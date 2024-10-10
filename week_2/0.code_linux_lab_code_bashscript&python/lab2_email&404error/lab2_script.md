LAB2

\----

Step1 :

Cài đặt và cấu hình web server:

Nếu chưa cài, bạn cần cài đặt Nginx hoặc Apache bằng cách sử dụng các lệnh sau:

Nginx: sudo apt install nginx

Apache: sudo apt install apache2

\----

Step2 :

Khởi động ngix hoặc apache2

sudo systemctl status ngix

\----

Step3 :

Kiểm tra log của Nginx/Apache:

Log của Nginx nằm ở /var/log/nginx/access.log hoặc /var/log/nginx/error.log.

Log của Apache nằm ở /var/log/apache2/access.log hoặc /var/log/apache2/error.log.

\----

Step4 :

Tạo script để kiểm tra lỗi 404, đặt trong /home/user:

Tạo một script bash đọc log file và kiểm tra xem có dòng lỗi 404 nào xuất hiện không. Dưới đây là ví dụ về script để tìm lỗi 404 trong log của Nginx:

Nội dung :

#!/bin/bash

LOG\_FILE="/var/log/nginx/access.log"

ERROR\_CODE="404"

ADMIN\_EMAIL="admin@example.com"

if grep -q "$ERROR\_CODE" "$LOG\_FILE"; then

echo "Lỗi 404 đã xảy ra trên server!" | mail -s "Lỗi 404 phát hiện trên Nginx" "$ADMIN\_EMAIL"

fi

\----

Step5 :

Thiết lập dịch vụ gửi email:

Cài đặt một công cụ gửi email như mailutils hoặc postfix để có thể gửi email từ script của bạn. Cài đặt mailutils với lệnh:

sudo apt install mailutils

\----

Step6 :

crontab -e

Bạn có thể sử dụng cronjob để kiểm tra log file theo một khoảng thời gian định kỳ. Ví dụ, kiểm tra mỗi phút:

* \* \* \* \* /path/to/your/script.sh
1. \* \* \* \* /home/user/log404.sh

\----

Step7 :

crontab -l
