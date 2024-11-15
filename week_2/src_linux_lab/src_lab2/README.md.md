# LAB2

---

## Step 1:

Cài đặt và cấu hình web server:

Nếu chưa cài, bạn cần cài đặt Nginx hoặc Apache bằng cách sử dụng các lệnh sau:

- **Nginx**: 
  ```bash
  sudo apt install nginx
  sudo apt install apache2
sudo systemctl status nginx

#!/bin/bash

LOG_FILE="/var/log/nginx/access.log"
ERROR_CODE="404"
ADMIN_EMAIL="admin@example.com"

if grep -q "$ERROR_CODE" "$LOG_FILE"; then
    echo "Lỗi 404 đã xảy ra trên server!" | mail -s "Lỗi 404 phát hiện trên Nginx" "$ADMIN_EMAIL"
fi

sudo apt install mailutils

* * * * * /path/to/your/script.sh
* * * * * /home/user/log404.sh

crontab -l
