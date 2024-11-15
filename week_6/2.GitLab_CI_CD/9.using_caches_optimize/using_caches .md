# 1. Khái niệm cache trong CI/CD

Trong hệ thống CI/CD, build mã nguồn tốn kém nhiều bước như cài đặt dependencies, compile mã nguồn và tạo artifact.

**=> Cache ra đời** nhằm lưu trữ tạm thời những kết quả của các bước build trước để tái sử dụng cho các lần build sau, tiết kiệm thời gian và tài nguyên.

# 2. Lợi ích

- **Giảm thời gian build**: Thay vì phải cài lại dependencies, bạn có thể sử dụng cache từ lần build trước.
- **Tiết kiệm tài nguyên**: Không cần phải tải hoặc cài lại mọi thứ từ đầu.
- **Tăng hiệu suất CI/CD Pipeline**: Các bước được thực hiện nhanh hơn, giúp pipeline chạy hiệu quả hơn.

# 3. Cách hoạt động

- Trong lúc build, chỉ định một số thư mục, file, hoặc các dependencies để lưu lại vào cache.
- Khi chạy lại pipeline, những phần đã cache sẽ được tải lại thay vì phải chạy từ đầu.

# 4. Làm sao để lưu thứ vào cache một cách hợp lý

- **Xác định các thành phần không thay đổi thường xuyên**: Dependencies là một ví dụ tiêu biểu, vì chúng chỉ thay đổi khi bạn cập nhật chúng.
