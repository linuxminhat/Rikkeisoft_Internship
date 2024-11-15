Tận dụng kiến thức về kiến trúc trong Docker để viết lại Dockerfile cho tối ưu hơn ! 
Ở file cũ : 
 
FROM node 
WORKDIR /app
COPY . /app
RUN npm install
EXPOSE 80
CMD ["node", "server.js"]

Cách viết này dở vì nếu có bất kì 1 sự thay đổi nào trong ứng dụng của mình, Docker engine phải copy toàn bộ mã trong app rồi chạy lại RUN npm install

!!! DỞ  
Cách viết mới : 
FROM node 
WORKDIR /app
COPY package.json/app
RUN npm install 
COPY ./app 
EXPOSE 80
CMD ["node", "server.js"]