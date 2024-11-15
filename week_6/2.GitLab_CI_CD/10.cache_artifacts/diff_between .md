# Sự khác nhau giữa "Cache" và "Artifacts"

## 1. Cache

- **Mục đích chính**: Lưu trữ tạm thời những file hoặc thư mục dành riêng cho lần build tiếp theo.
- **Cách làm giảm thời gian build**: Lưu lại các file mà không thay đổi nhiều để tái sử dụng trong các lần build sau.
- **Thời gian tồn tại**: Tồn tại trong thời gian dài, thường được tái sử dụng giữa các pipeline khác nhau hoặc giữa các lần build trong cùng một pipeline.

## 2. Artifacts

- **Mục đích chính**: Sản phẩm đầu ra của một pipeline muốn lưu trữ và chia sẻ với các bước khác trong pipeline, hoặc sử dụng sau khi pipeline hoàn tất.
- **Sử dụng**: Lưu trữ sản phẩm cuối cùng của một job hoặc pipeline để dùng cho các bước tiếp theo, hoặc chia sẻ giữa các thành viên phát triển.
- **Thời gian tồn tại**: Thường ngắn, chỉ tồn tại cho đến khi pipeline hoàn tất.
