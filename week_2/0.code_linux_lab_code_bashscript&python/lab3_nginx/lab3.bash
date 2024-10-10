#!/bin/bash

# Đường dẫn đến thư mục chứa log
LOG_DIR="/var/log"

# Thông báo rằng quá trình tìm kiếm và xóa file sẽ bắt đầu
echo "Đang xóa các file log cũ hơn 1 phút..."

# Tìm và xóa các file không được truy cập trong 1 phút
find "$LOG_DIR" -type f -amin +1 -exec rm -f {} \;

echo "Quá trình xóa hoàn tất."
