import os
import time

# Đường dẫn đến thư mục chứa log
LOG_DIR = "/var/log"

# Thời gian hiện tại
current_time = time.time()

# Tìm và xóa các file không được truy cập trong 1 phút
for filename in os.listdir(LOG_DIR):
    file_path = os.path.join(LOG_DIR, filename)
    if os.path.isfile(file_path):
        last_access_time = os.path.getatime(file_path)
        if (current_time - last_access_time) / 60 > 1:  
            os.remove(file_path)
            print(f"Đã xóa file: {file_path}")

print("Các file log cũ hơn 1 phút đã bị xóa.")