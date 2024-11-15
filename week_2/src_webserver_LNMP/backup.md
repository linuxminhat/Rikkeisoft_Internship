Xây dựng một project trên Linux sử dụng LAMP (Linux, Apache, MySQL/MariaDB, PHP)

1. Cài đặt Nginx

sudo apt update

sudo apt install nginx

Khởi động và cho phép Nginx chạy khi khởi động:

sudo systemctl start nginx

sudo systemctl enable nginx

Kiểm tra trạng thái Nginx:

sudo systemctl status nginx

1. Cài đặt MariaDB

sudo apt install mariadb-server mariadb-client

Kết nối MariaDB bằng tài khoản root:

sudo mysql -u root -p

Tạo cơ sở dữ liệu và người dùng:

\------

CREATE DATABASE first\_database;

CREATE USER 'dangnhatminh'@'localhost' IDENTIFIED BY 'kali28102003';

GRANT ALL PRIVILEGES ON first\_database.\* TO 'dangnhatminh'@'localhost';

FLUSH PRIVILEGES;

EXIT;

\------

1. Cài đặt PHP

sudo apt install php-fpm php-mysql

Sau đó, khởi động PHP-FPM và đảm bảo nó chạy khi khởi động:

sudo systemctl start php7.4-fpm

sudo systemctl enable php7.4-fpm
