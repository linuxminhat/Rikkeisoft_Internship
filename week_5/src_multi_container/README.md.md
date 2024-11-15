-----------
## Xây dựng ứng dụng nhiều container trong Docker: Backend, Frontend và Database

Thông thường viết Dockerfile tại môi trường Backend vì Backend chịu trách nhiệm xử lý logic.  
Frontend là môi trường tĩnh, không cần cài đặt Dockerfile.

### Blueprint for this demo-project setup:
Xây dựng ứng dụng đa container! Kết hợp nhiều dịch vụ vào một ứng dụng và làm việc với nhiều container.

### Có ba thành phần chính:
1. **Database**: MongoDB
2. **Backend**: NodeJS REST API
3. **Frontend**: React SPA

----

### Quy trình cài đặt các dependencies cho Node.js và chạy MongoDB bằng Docker:

1. **cd vào backend** và cài đặt Node.js dependencies:
   ```bash
   npm install

Chạy MongoDB bằng Docker:

bash
Copy code
docker run --name mongodb_backend --rm -d -p 27017:27017 mongo
27017: Cổng mặc định của MongoDB.
Chạy Node.js:

bash
Copy code
node app.js
Kết nối thành công với MongoDB: "CONNECT TO MONGODB"
Khởi động frontend:

bash
Copy code
npm start
Dọn dẹp Docker:

bash
Copy code
docker prune -a
Build backend image:

bash
Copy code
docker build -t goals-node .
Chạy container cho backend:

bash
Copy code
docker run --name goals-backend --rm goals-node
Cải thiện mã nguồn:
Trong file app.js, nếu kết nối MongoDB như sau:

bash
Copy code
mongodb://localhost:27017/course-goals
Sẽ dẫn đến lỗi khi khởi động container. Lý do: container chứa Node.js và MongoDB không nằm cùng một mạng. localhost:27017 chỉ trỏ đến container của Node.js.

Khắc phục:
Thay đổi chuỗi kết nối thành:

bash
Copy code
mongodb://host.docker.internal:27017/course-goals
Viết Dockerfile cho React SPA:
Sử dụng cổng 3000.
Dòng cuối cùng trong Dockerfile: CMD ["npm", "start"] để chạy script start được định nghĩa trong package.json.
Build React frontend image:

bash
Copy code
docker build -t goals-react .
Chạy frontend container:

bash
Copy code
docker run --name goals-frontend --rm -p 3000:3000 -it goals-react
Cài đặt Docker Network để giao tiếp giữa các container:
Tạo Docker network:

bash
Copy code
docker network create goals-network
Build backend image:

bash
Copy code
docker build -t goals-node .
Chạy backend container trong cùng network:

bash
Copy code
docker run --name goals-backend --rm -d --network goals-network goals-node
Build frontend image:

bash
Copy code
docker build -t goals-react .
Chạy frontend container:

bash
Copy code
docker run --name goals-frontend --rm -p 3000:3000 -it goals-react
Chạy frontend container với network:

bash
Copy code
docker run --name goals-frontend --network goals-network --rm -p 3000:3000 -it goals-react