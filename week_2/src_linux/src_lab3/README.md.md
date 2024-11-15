# LAB3

Tạo script xóa các file log cũ không access trong 3 tháng gần đây

---

Sử dụng lệnh `find` để tìm file log cũ.

**Lưu ý**: Vì các file log cũ đang có không quá 3 tháng, nên thay đổi thành file log cũ không access quá 1 phút:

```bash
find /var/log -type f -amin +1

mkdir bin
cd bin

vi delete_old_logs.sh

#!/bin/bash

# Đường dẫn đến thư mục chứa log
LOG_DIR="/var/log"

# Tìm và xóa các file không được truy cập trong 1 phút
find "$LOG_DIR" -type f -amin +1 -exec rm -f {} \;

echo "Các file log cũ hơn 1 phút đã bị xóa."

chmod +x /home/user/bin/delete_old_logs.sh

cd ../../../

crontab -e

0 2 * * 0 /usr/local/bin/delete_old_logs.sh

cat /var/log/syslog | grep cron

