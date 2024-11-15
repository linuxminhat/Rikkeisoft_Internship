#Chỉ định image cơ sở mà Docker sử dụng tạo image 
FROM node 

#Thiết lập thư mục mặc định cho tất cả các lệnh làm việc tiếp theo Dockerfile 
WORKDIR /app

#Sao chép toàn bộ nội dung thư mục hiện tại trên máy tính vào /app trong container 
COPY . /app

#Lệnh này yêu cầu Docker thực thi "npm install" trong container 
RUN npm install

#Lệnh này thông báo dùng cổng 80
EXPOSE 80

CMD ["node", "server.js"]


