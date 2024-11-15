FROM node

WORKDIR /app

#Sao chép gói tệp package.json 
COPY package.json /

#Cài đặt các dependencies 
RUN npm install

#Tạo bản snapshot dự án 
COPY . .

EXPOSE 80 
CMD ["node","app.js"]