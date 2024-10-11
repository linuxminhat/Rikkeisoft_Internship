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

---

Chạy image bằng lệnh :

- docker build -t myweb-image .
  => ERROR : Lỗi copy failed nên tạo một đường dẫn mới !
  Chạy container bằng lệnh :
- docker run -d -p 8080:80 --name myweb-container myweb-image
- docker images

---

1. Xác định Container hay Image
2. Kiểm tra trạng thái của Container : docker ps -a
3. Kiểm tra thông tin chi tiết của Container : docker inspect 654ec...
4. Truy cập vào Container :docker exec -it 654ec... /bin/bash
5. Kiểm tra Image : docker images
6. Gán tên cho Container hoặc Image : docker run -d --name my-container myweb-image
7. Dừng hoặc xóa Container
   docker stop 654ec...
   docker rm 654ec...
   docker rm 654ec...
8. Xóa Image
   docker rmi 654ec...

---

Chạy Docker Compose:

bash
Copy code
docker-compose up --build
