LAB1

B1 : Kiểm tra các thư mục chứa log cũ trong kali linux

cd /var/log

Các tệp chứa log cũ thường có đuôi .1 hoặc .old

\----

B2 : Viết script nén các file log cũ

Người dùng sẽ viết ở mục /home/user/compress\_log.sh

\----

B3 : Viết script

Nội dung Script :

#!/bin/bash

\# Script để nén các log cũ trong thư mục /var/log

\# Di chuyển vào thư mục log

cd /var/log

\# Nén các file log cũ (có đuôi .1, .old)

gzip \*.1 \*.old

Lưu và thoát trình soạn thảo

\----

B4 : Cấp quyền thực thi cho script

chmod +x /home/user/compress\_logs.sh

\----

B5 : Tạo cron job để tự động nén log

Sau khi có script, tạo cron job để auto chạy script

Lỗi : "no crontab for root - using an empty one" xuất hiện vì người dùng chưa

thiết lập bất kỳ crontab nào

Chọn 1

crontab -e

\----

B6 : Thêm vào cuối dòng lệnh

Thiết lập cronjob chạy vào mỗi ngày 2 giờ sáng :

0 2 \* \* \* /home/user/compress\_logs.sh

\----

B7 : Kiểm tra cron job

crontab -l
