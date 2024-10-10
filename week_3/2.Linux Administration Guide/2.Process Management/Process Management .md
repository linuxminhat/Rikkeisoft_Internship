Process Management

\-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Trong Linux, quá trình quản lý foreground và background process đóng vai trò quan trọng trong việc quản lý tác vụ. Dưới đây là những điểm cơ bản:

1/Foreground Process:

Là các tiến trình chạy ở chế độ trực tiếp tương tác với người dùng qua terminal.

Người dùng cần chờ cho đến khi tiến trình kết thúc trước khi thực hiện hành động tiếp theo trong terminal.

Ví dụ: Khi bạn chạy một lệnh như python script.py, nó sẽ chạy ở foreground và bạn không thể nhập lệnh khác cho đến khi quá trình kết thúc.

2/Background Proces:

Là các tiến trình chạy trong nền và không yêu cầu người dùng phải chờ cho đến khi hoàn thành.

Để chạy một tiến trình dưới nền, thêm dấu & vào cuối lệnh, ví dụ: python script.py &.

Điều này cho phép bạn tiếp tục sử dụng terminal để nhập các lệnh khác mà không cần đợi quá trình hoàn thành.

3/Quản lý Process:

Bạn có thể kiểm tra các tiến trình đang chạy với lệnh jobs.

Để đưa một tiến trình từ foreground về background, sử dụng tổ hợp Ctrl + Z để tạm dừng nó, sau đó nhập bg để đưa nó về nền.

Để đưa một tiến trình từ background lên foreground, sử dụng lệnh fg kèm theo ID của job, ví dụ: fg %1.

4/Kill Process:

Để dừng một tiến trình nền, dùng lệnh kill theo sau là PID (Process ID), ví dụ: kill 1234.

Để dừng tiến trình foreground, sử dụng tổ hợp phím Ctrl + C.

Hệ thống này cho phép bạn quản lý các tiến trình một cách hiệu quả, đặc biệt là khi cần chạy nhiều tác vụ đồng thời.

\-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

MỚI : Để đặt một công việc ở chế độ nền, chúng ta chỉ cần thêm ký tự & ở cuối lệnh shell.

\-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

3\.3. Đưa công việc chính về nền

- Nếu chúng ta bắt đầu một công việc ở chế độ chính và muốn đặt nó ở chế độ nền, điều đầu tiên cần làm là tạm dừng công việc với Ctrl-Z, điều này sẽ giải phóng terminal:

$ tail -f temp.log

^Z[1]+  Stopped                    tail -f temp.log

- Sau đó, chúng ta có thể ra lệnh bg để đặt công việc bị tạm dừng vào chế độ nền:

$ bg

[1] tail -f temp.log

$ jobs

[1]+  Running                    tail -f temp.log

\-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

3\.4. Đưa công việc nền về chế độ chính

Chúng ta có thể kết nối lại một công việc nền với terminal bằng lệnh fg.

$ fg %2
