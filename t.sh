#!/bin/bash
echo "# website" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:Maneeshbhaskar/website.git
git push -u origin main
