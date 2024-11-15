# Script xây dựng một project trên Kali Linux sử dụng LNMP (Linux, Nginx, MariaDB, PHP)

---

## 1. Cài đặt Nginx

**Command cài đặt**:

```bash
sudo apt update
sudo apt install nginx

sudo systemctl start nginx
sudo systemctl enable nginx

sudo systemctl status nginx

sudo apt install mariadb-server mariadb-client
sudo mysql_secure_installation

sudo mysql -u root -p

CREATE DATABASE first_database;

CREATE USER 'dangnhatminh'@'localhost' IDENTIFIED BY 'kali28102003';

GRANT ALL PRIVILEGES ON first_database.* TO 'dangnhatminh'@'localhost';

FLUSH PRIVILEGES;

EXIT;

sudo apt install php-fpm php-mysql

sudo systemctl start php8.2-fpm
sudo systemctl enable php8.2-fpm

sudo nano /etc/nginx/sites-available/LNMP-webserver

server {
    listen 80;
    server_name your_domain.com;
    root /var/www/your_project;
    index index.php index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}

sudo ln -s /etc/nginx/sites-available/your_project /etc/nginx/sites-enabled/

sudo nginx -t

sudo systemctl restart nginx

sudo chown -R www-data:www-data /var/www/LNMP-webserver/
sudo chmod -R 755 /var/www/your_project/

/var/www/LNMP-webserver/
├── css/
├── js/
├── images/
├── index.php
├── header.php
├── footer.php
└── about.php

