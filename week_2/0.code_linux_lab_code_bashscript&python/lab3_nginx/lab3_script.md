LAB3

Tạo script xóa các file log cũ không access trong 3 tháng gần đây

\----

Step1 :

Sử dụng lệnh find để tìm file log cũ

Lưu ý : Vì các file log cũ đang có không quá 3 tháng nên đổi qua là file log cũ không access quá 1 phút

find /var/log -type f -amin +1

\----

Step2 :

mkdir bin

cd bin

Lúc này, cấu trúc của một file sẽ là : /home/user/bin/ :

ls : nothing happen

Tạo file đặt tên là : delete\_old\_logs.sh

\----

Step3 :

vi delete\_old\_logs.sh :

#!/bin/bash

\# Đường dẫn đến thư mục chứa log

LOG\_DIR="/var/log"

\# Tìm và xóa các file không được truy cập trong 1 phút

find "$LOG\_DIR" -type f -amin +1 -exec rm -f {} \;

echo "Các file log cũ hơn 1 phút đã bị xóa."

\----

Step4 :

Cấp quyền thực thi cho script:

chmod +x /home/user/bin/delete\_old\_logs.sh

\----

Step5 :

Sau khi tạo script, bạn có thể tạo một cronjob để script chạy tự động theo lịch trình, chẳng hạn như mỗi tuần hoặc mỗi tháng.

cd ../../../

Tạo cronjob:

Mở crontab:

crontab -e

\----

Step6 :

Chạy script mỗi tuần vào Chủ nhật lúc 2:00 sáng:

0 2 \* \* 0 /usr/local/bin/delete\_old\_logs.sh

\----

Step7 :

Kiểm tra Cronjob

cat /var/log/syslog | grep cron

