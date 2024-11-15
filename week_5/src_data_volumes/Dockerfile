FROM node
WORKDIR /app
COPY package.json .
#REMIND : RUN để chạy thực thi các lệnh build image 
RUN npm install
COPY . .
CMD ["node", "server.js"]
