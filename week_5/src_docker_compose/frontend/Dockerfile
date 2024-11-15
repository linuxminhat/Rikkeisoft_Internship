FROM node 

WORKDIR /app

COPY package.json .

RUN npm install

COPY . .

EXPOSE 3000

#Đây là đoạn Dockerfile trong ứng dụng ReactJS 
#Khi chạy npm start => chương trình kích hoạt script start trong ứng dụng React được định nghĩa trong package.json 

CMD ["npm", "start"]
