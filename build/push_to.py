#!/usr/bin/python

import sys
import datetime
from subprocess import call

mappings = {
            "prod"      : "magistra-prod",
            "staging"   : "magistra-staging",
            "dev1"      : "magistra"
            }
class bcolors:
    HEADER = '\033[95m'
    OKBLUE = '\033[94m'
    OKGREEN = '\033[92m'
    WARNING = '\033[93m'
    FAIL = '\033[91m'
    ENDC = '\033[0m'
    BOLD = '\033[1m'
    UNDERLINE = '\033[4m'


def cprint(text, color):
    print color + text + bcolors.ENDC

def main():
    if len(sys.argv) == 1:
        help()
    env = sys.argv[1];

    cprint("PUSH_TO_ENVIRONMENT  Input Environment: "+ env, bcolors.HEADER)

    orig_file = ".env"
    env_file = ".env." + env
    backup_file = ".env.backup." + str(datetime.datetime.now().strftime("%A_%d_%B_%Y_%I_%M_%p"))
    cprint("Env File: " + env_file, bcolors.OKBLUE)
    if check_diff(env_file):
        cprint( "Backup File: " + backup_file, bcolors.OKBLUE)
        call(["cp", orig_file, backup_file])
        call(["cp", env_file, orig_file])
    else:
        cprint( "No diff found", bcolors.OKBLUE)

    if not mappings.has_key(env):
        print "create heroku"

    call(["build/try.sh"])
    call(["git", "reset", "HEAD" , backup_file])
    #scale dyno

def check_diff(env_file):
    cprint("<diff>", bcolors.WARNING)
    orig_file = ".env"
    diff = call(["diff", orig_file, env_file, "--ignore-blank-lines"])
    print "Diff: " + str(diff)
    cprint("</diff>", bcolors.WARNING)
    return diff

def help():
    print "Please pass environment [production, staging, dev1]"
    sys.exit(1)

if __name__ == "__main__":
    main()
