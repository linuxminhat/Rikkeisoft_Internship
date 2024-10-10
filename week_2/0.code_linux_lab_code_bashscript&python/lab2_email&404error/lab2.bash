#!/bin/bash
LOG_FILE="/var/log/nginx/access.log"
ERROR_CODE="404"
ADMIN_EMAIL="admin@example.com"

if grep -q "$ERROR_CODE" "$LOG_FILE"; then
    echo "Lỗi 404 đã xảy ra trên server!" | mail -s "Lỗi 404 phát hiện trên Nginx" "$ADMIN_EMAIL"
fi