#!/bin/bash

# Navigate to the repository
cd /var/www/html

if git diff --quiet; then
  echo "No changes detected."
else
  # Stage changes
  git add .

  # Commit with a message
  git commit -m "Automated update: $(date)"

  # Push changes to GitHub
  git push origin main

  echo "Changes pushed to GitHub."
fi

