403 Forbidden
sudo chmod 000 /var/www/html/myweb/index.php
sudo chmod 644 /var/www/html/myweb/index.php
500 Internal Server Error : cú pháp PHP
503 Service Unavailable : sudo systemctl stop php7.4-fpm
408 Request Timeout : 
<?php
sleep(35); // Tạm dừng trong 35 giây (giả định thời gian chờ của server là 30 giây)
echo "This request took too long!";
?>
