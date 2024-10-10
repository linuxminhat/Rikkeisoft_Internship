sudo unable to resolve host your-hostname Temporary failure in name resolution

- Khi tôi gõ : sudo systemctl start nginx hiện lỗi : sudo : unable to resolve

Lỗi sudo: unable to resolve thường xảy ra khi máy của bạn không thể phân giải tên hostname (tên máy tính) chính xác.

=> Cách xử lí :

1. Kiểm tra tên máy (hostname) hostname
1. Sửa file /etc/hostname sudo nano /etc/hostname
1. Sửa file /etc/hosts sudo nano /etc/hosts => 127.0.1.1    your\_hostname
1. Khởi động lại dịch vụ hoặc hệ thống sudo reboot
