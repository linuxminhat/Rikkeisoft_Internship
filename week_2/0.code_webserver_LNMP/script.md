Script xây dựng một project trên Kali Linux sử dụng LNMP (Linux, Nginx, MariaDB, PHP) :

1. Cài đặt Nginx
* Command cài đặt :

+sudo apt update

+sudo apt install nginx

* Command khởi động và cho phép Nginx hoạt động :

+sudo systemctl start nginx

+sudo systemctl enable nginx

* Command kiểm tra trạng thái Nginx:

+sudo systemctl status nginx

2\. Cài đặt MariaDB

+sudo apt install mariadb-server mariadb-client

+sudo mysql\_secure\_installation

Command kết nối MariaDB bằng tài khoản root:

+sudo mysql -u root -p

Command tạo cơ sở dữ liệu và người dùng:

\------------------------------

CREATE DATABASE first\_database;

CREATE USER 'dangnhatminh'@'localhost' IDENTIFIED BY 'kali28102003';

GRANT ALL PRIVILEGES ON first\_database.\* TO 'dangnhatminh'@'localhost';

FLUSH PRIVILEGES;

EXIT;

\------------------------------

3\. Cài đặt PHP

* Command :

+sudo apt install php-fpm php-mysql

* Command :

+sudo systemctl start php8.2-fpm

+sudo systemctl enable php8.2-fpm

4\. Cấu hình Nginx để sử dụng PHP

* Command :

+sudo nano /etc/nginx/sites-available/LNMP-webserver

Thêm nội dung sau vào file:

server {

listen 80;

server\_name your\_domain.com;

root /var/www/your\_project;

index index.php index.html index.htm;

location / {

try\_files $uri $uri/ =404;

}

location ~ \.php$ {

include snippets/fastcgi-php.conf;

fastcgi\_pass unix:/var/run/php/php7.4-fpm.sock;

fastcgi\_param SCRIPT\_FILENAME $document\_root$fastcgi\_script\_name;

include fastcgi\_params;

}

location ~ /\.ht {

deny all;

}

}

* Command kích hoạt file cấu hình bằng cách tạo symlink:

+sudo ln -s /etc/nginx/sites-available/your\_project /etc/nginx/sites-enabled/

* Command kiểm tra cấu hình Nginx:

+sudo nginx -t

* Command khởi động lại Nginx để áp dụng thay đổi:

+sudo systemctl restart nginx

5\. Tạo project và cấp quyền

Mã nguồn project : /var/www/your\_project/

/var/www/LNMP-webserver/

Cấp quyền :

+sudo chown -R www-data:www-data /var/www/LNMP-webserver /

+sudo chmod -R 755 /var/www/your\_project/

6\. Tạo file project với php

Cấu trúc thư mục của file :

/var/www/LNMP-webserver/

├── css/

├── js/

├── images/

├── index.php

├── header.php

├── footer.php

└── about.php

8\. Khởi chạy project

Truy cập vào địa chỉ IP hoặc tên miền để kiểm tra project

----> CẢI THIỆN : BUG KHI THAY ĐỔI TÊN MIỀN !
