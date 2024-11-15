# Mô phỏng các lỗi HTTP bằng các lệnh và mã PHP

## 1. 403 Forbidden
Sử dụng các lệnh dưới đây để mô phỏng lỗi **403 Forbidden**:

```bash
sudo chmod 000 /var/www/html/myweb/index.php

Lệnh này sẽ khiến tập tin index.php không có bất kỳ quyền truy cập nào, dẫn đến lỗi 403 Forbidden khi truy cập vào.

Để khôi phục lại quyền truy cập:sudo chmod 644 /var/www/html/myweb/index.php

2. 500 Internal Server Error
Lỗi 500 Internal Server Error có thể xảy ra khi có vấn đề về cú pháp trong mã PHP. Hãy kiểm tra lại mã PHP của bạn để đảm bảo không có lỗi cú pháp.

3. 503 Service Unavailable
sudo systemctl stop php7.4-fpm
sudo systemctl start php7.4-fpm

4. 408 Request Timeout
<?php
sleep(35); // Tạm dừng trong 35 giây (giả định thời gian chờ của server là 30 giây)
echo "This request took too long!";
?>

    