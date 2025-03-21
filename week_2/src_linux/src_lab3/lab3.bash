#!/bin/bash

LOG_DIR="/var/log"

echo "Đang xóa các file log cũ hơn 1 phút..."

find "$LOG_DIR" -type f -amin +1 -exec rm -f {} \;

echo "Quá trình xóa hoàn tất."
