#!/bin/bash
# try-it-on-heroku.sh
# Temporarily test our current edits on Heroku

set -e

git ci . -m 'Heroku temporary commit'
git push heroku master --force

echo
echo "Press Enter once you have tested the app on Heroku"
read

git reset --soft HEAD~1
git push heroku master --force

echo
echo "Okay, the app is restored to where it was before"
echo

