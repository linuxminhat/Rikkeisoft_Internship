# Manual Deployments và Manually Triggering Jobs trong GitLab CI/CD

**Manual deployments** và **manually triggering jobs** là hai tính năng quan trọng trong GitLab CI/CD giúp quản lý quá trình triển khai và kiểm soát pipeline một cách linh hoạt hơn. Thay vì để tất cả các bước trong pipeline tự động chạy sau khi code được đẩy lên, bạn có thể chọn các công việc hoặc quy trình triển khai cần sự can thiệp của con người thông qua các thao tác thủ công.

## 1. Manual Deployments (Triển khai thủ công)

**Manual deployments** là quá trình triển khai ứng dụng lên một môi trường cụ thể (ví dụ: staging, production) bằng thao tác thủ công.

### Tại sao cần Manual Deployments?

- **Kiểm soát quy trình**: Bạn có thể dừng quá trình triển khai để kiểm tra và đảm bảo rằng mọi thứ đều ổn trước khi đưa code vào môi trường sản xuất.
- **Giảm rủi ro**: Triển khai thủ công giúp tránh việc vô tình đưa code lên môi trường sản xuất nếu pipeline có lỗi.
- **Đồng bộ với quy trình quản lý**: Có thể cần sự phê duyệt của quản lý hoặc một nhóm khác trước khi triển khai.

### Cách kích hoạt Manual Deployment:

Sau khi pipeline chạy xong (trừ job thủ công), sẽ thấy một nút **Play** hoặc **Manual** bên cạnh job cần kích hoạt. Nhấp vào nút này để bắt đầu triển khai thủ công.
