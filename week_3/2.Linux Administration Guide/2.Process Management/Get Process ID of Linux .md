Process Management : Get Process ID of Linux

\-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

2\.1. Tiến trình chính

Chúng ta có thể chạy một tiến trình ở chế độ chính bằng cách gọi nó trực tiếp từ dòng lệnh. Ví dụ, hãy chạy tiến trình xeyes: $ xeyes

2\.2. Tiến trình nền

Chúng ta có thể chạy cùng một tiến trình ở chế độ nền bằng lệnh &: $ xeyes &

Sau đó, sử dụng lệnh jobs, chúng ta có thể xem các tiến trình đang chạy ở chế độ nền: $ jobs

3\. Giám sát tiến trình

Mỗi tiến trình trong Linux có một ID tiến trình gọi là PID và một ID tiến trình cha gọi là PPID. Trong Linux, lệnh ps hiển thị các tiến trình đang chạy:

Chúng ta cũng có thể sử dụng lệnh ps -aux hoặc ps -ef để hiển thị tất cả các tiến trình trên hệ thống: $ ps -aux

Sử dụng lệnh grep kết hợp với ps, chúng ta có thể giám sát một tiến trình cụ thể: $ ps -aux | grep xeyes

4\. Thao tác với tiến trình

4\.1. Lấy ID tiến trình


