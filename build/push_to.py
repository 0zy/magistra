#!/usr/bin/python

import sys

def main():
    if len(sys.argv) == 1:
        help()
    env = sys.argv[1];

    #heroku create
    #modify env file
    #git push
    #scale dyno



def help():
    print "Please pass environment [production, staging, dev1]"
    sys.exit(1)

if __name__ == "__main__":
    main()
