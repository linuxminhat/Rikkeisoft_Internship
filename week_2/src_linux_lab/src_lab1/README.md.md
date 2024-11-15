# LAB1

## B1: Kiểm tra các thư mục chứa log cũ trong kali linux

```bash
cd /var/log
/home/user/compress_log.sh.
#!/bin/bash

# Script để nén các log cũ trong thư mục /var/log

# Di chuyển vào thư mục log
cd /var/log

# Nén các file log cũ (có đuôi .1, .old)
gzip *.1 *.old
chmod +x /home/user/compress_logs.sh
crontab -e
0 2 * * * /home/user/compress_logs.sh
crontab -l
