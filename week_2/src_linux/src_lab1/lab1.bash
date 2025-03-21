#!/bin/bash
LOG_DIR="/var/log"

cd "$LOG_DIR" || exit

for file in *.1 *.old; do
    if [ -f "$file" ]; then
        gzip "$file"
    fi
done

echo "Completed compressing old log files."
