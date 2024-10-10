#!/bin/bash

# Đường dẫn tới thư mục log
LOG_DIR="/var/log"

# Di chuyển vào thư mục log
cd "$LOG_DIR" || exit

# Nén các file có đuôi .1 và .old
for file in *.1 *.old; do
    if [ -f "$file" ]; then
        gzip "$file"
    fi
done

echo "Completed compressing old log files."
