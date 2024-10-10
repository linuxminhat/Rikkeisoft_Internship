FROM node

WORKDIR /app
# chỉ cần thực thi nếu package.json thay đổi ! 
COPY package.json /app

RUN npm install

COPY . /app 

EXPOSE 80

CMD ["node", "server.js"]