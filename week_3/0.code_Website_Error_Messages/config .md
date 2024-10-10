server {

listen 80;

server\_name localhost;

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

\# Định nghĩa các trang lỗi và chuyển hướng đến một file PHP xử lý lỗi

error\_page 404 /error.php?code=404;

error\_page 500 502 503 504 /error.php?code=500;

error\_page 403 /error.php?code=403;

location = /error.php {

fastcgi\_pass unix:/var/run/php/php7.4-fpm.sock;

include fastcgi\_params;

fastcgi\_param SCRIPT\_FILENAME $document\_root/error.php;

}

}
