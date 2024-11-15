# Manually Triggering Jobs

**Manually triggering jobs** là tính năng cho phép bạn chạy một job cụ thể trong pipeline bằng cách kích hoạt nó thủ công, thay vì để GitLab tự động chạy toàn bộ pipeline theo quy trình. Điều này hữu ích trong các trường hợp bạn muốn thực hiện kiểm tra hoặc hành động nhất định mà không cần phải kích hoạt toàn bộ pipeline.

## Tại sao cần Manually Triggering Jobs?

- **Chạy lại job sau khi kiểm tra**: Có thể có những job bạn muốn kiểm tra lại mà không cần chạy lại cả pipeline.
- **Chạy các job chỉ khi cần**: Một số job có thể không cần chạy thường xuyên, và bạn chỉ muốn chạy chúng khi thực sự cần thiết.
