#!/bin/bash
# try-it-on-heroku.sh
# Temporarily test our current edits on Heroku

set -e

git add . 
git commit -m 'Heroku temporary commit'
git push heroku master --force
git reset --soft HEAD~1

echo "Done"
echo

