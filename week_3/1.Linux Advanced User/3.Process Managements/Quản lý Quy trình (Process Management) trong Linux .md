Quản lý Quy trình (Process Management) trong Linux

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Quy trình (Process) là một chương trình đang được thực thi. Quy trình (Process) nhận đầu vào, xử lý và trả về kết quả phù hợp. Dưới đây là các thông tin chi tiết về các loại quy trình (Process) và cách quản lý chúng trong Linux.

Các loại quy trình (Process) :

1/Quy trình (Process) ở chế độ foreground (Foreground Processes):

- Còn gọi là quy trình tương tác (interactive processes).
- Được khởi tạo bởi người dùng hoặc lập trình viên, không thể được khởi tạo bởi các dịch vụ hệ thống.
- Nhận đầu vào từ người dùng và trả kết quả ra màn hình. Trong khi quy trình này đang chạy, bạn không thể khởi tạo một quy trình mới từ cùng một terminal.

COMMAND : sleep 5 => Lệnh này sẽ thực hiện và bạn có thể thực hiện lệnh khác sau khi lệnh này kết thúc.

=> Sử dụng sleep trong một script:

\-----

echo "Bắt đầu..."

sleep 5  # Tạm dừng 5 giây

echo "Hoàn tất sau 5 giây!"

2\. Các đặc điểm chính:

- Quy trình tương tác (Interactive Processes):

- Quy trình ở chế độ foreground thường là những quy trình yêu cầu sự tương tác từ người dùng, như nhập lệnh, nhận đầu vào và hiển thị kết quả. Ví dụ, khi bạn chạy một chương trình như bash, python, hoặc một ứng dụng nào đó trong terminal, đó là một quy trình tương tác.

- Khởi tạo bởi người dùng hoặc lập trình viên:

Các quy trình foreground được khởi tạo trực tiếp bởi người dùng thông qua việc nhập lệnh vào terminal. Ví dụ, khi bạn gõ python my\_script.py, một quy trình foreground được khởi tạo để thực thi script Python đó.

Điều này có nghĩa là quy trình không thể được khởi tạo tự động bởi hệ thống hoặc các dịch vụ không tương tác với người dùng. Ví dụ, một dịch vụ hệ thống như cron không thể khởi tạo quy trình foreground.

- Nhận đầu vào từ người dùng:

Quy trình foreground thường nhận đầu vào từ bàn phím (stdin). Ví dụ, trong một ứng dụng tương tác, người dùng có thể nhập thông tin, lệnh hoặc lựa chọn, và chương trình sẽ xử lý những thông tin này để trả về kết quả.

\-----

2/Quy trình (Process) ở chế độ background (Background Processes):

- Còn gọi là quy trình không tương tác (non-interactive processes).
- Có thể được khởi tạo bởi hệ thống hoặc người dùng và có thể được quản lý bởi người dùng.
- Có PID (Process ID) duy nhất và bạn có thể khởi tạo các quy trình khác trong cùng một terminal.

=> Ngược lại quy trình tương tác thì quy trình background là quy trình không tương tác

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Quản lý Quy trình Thực tế

1. Ví dụ về quy trình ở chế độ Foreground

sleep 5 : Lệnh này sẽ giữ terminal trong 5 giây. Trong thời gian này, người dùng không thể nhập lệnh khác cho đến khi lệnh này hoàn tất.

1. Dừng một quy trình trong quá trình thực thi : CTRL + Z:
1. Danh sách các quy trình : Để xem danh sách các quy trình đang chạy hoặc đã dừng lại: jobs
1. Chạy các quy trình đã dừng trong nền : bg

6\. Chạy lại quy trình đã dừng trong foreground : fg

10\. Danh sách tất cả các quy trình đang chạy trên máy : top

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Trạng thái quy trình trong Linux

Một quy trình trong Linux có thể trải qua các trạng thái khác nhau sau khi được tạo ra và trước khi nó bị chấm dứt. Các trạng thái này bao gồm:

Running: Quy trình đang chạy hoặc sẵn sàng chạy.

Sleeping: Quy trình đang chờ tài nguyên có sẵn.

Interruptible sleep: Quy trình có thể đánh thức để xử lý tín hiệu.

Uninterruptible sleep: Quy trình không thể đánh thức.

Stopped: Quy trình đã nhận tín hiệu dừng.

Zombie: Quy trình đã chết nhưng vẫn còn bản ghi trong bảng quy trình.

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Các lệnh khác nhau cho quản lý quy trình trong Linux

Có hai lệnh có sẵn trong Linux để theo dõi các quy trình đang chạy. Hai lệnh này là top và ps.

1. Lệnh top

Để theo dõi các quy trình đang chạy trên máy của bạn, bạn có thể sử dụng lệnh top.

COMMAND : $ top

Lệnh top hiển thị danh sách các quy trình đang chạy theo thời gian thực cùng với mức sử dụng bộ nhớ và CPU của chúng. Dưới đây là một số thông tin trong đầu ra:

PID: Mã quy trình duy nhất được cấp cho mỗi quy trình.

User: Tên người dùng sở hữu quy trình.

PR: Độ ưu tiên được cấp cho quy trình trong quá trình lên lịch.

NI: Giá trị ‘nice’ của quy trình.

VIRT: Số lượng bộ nhớ ảo mà quy trình đang sử dụng.

RES: Số lượng bộ nhớ vật lý mà quy trình đang sử dụng.

SHR: Số lượng bộ nhớ được chia sẻ với các quy trình khác.

S: Trạng thái của quy trình:

‘D’ = đang ngủ không thể bị đánh thức

‘R’ = đang chạy

‘S’ = đang ngủ

‘T’ = bị dừng

‘Z’ = quy trình zombie

%CPU: Phần trăm CPU đang được sử dụng bởi quy trình.

%MEM: Phần trăm RAM đang được sử dụng bởi quy trình.

TIME+: Tổng thời gian CPU mà quy trình đã tiêu tốn.

COMMAND : Lệnh đã được sử dụng để kích hoạt quy trình.

Bạn có thể sử dụng phím lên/xuống để di chuyển lên và xuống danh sách. Để thoát, nhấn q. Để dừng một quy trình, làm nổi bật quy trình bằng phím lên/xuống và nhấn k.

1. Lệnh ps : Tuy nhiên, khác với lệnh top, đầu ra của nó không phải là thời gian thực.

Các thuật ngữ trong đầu ra bao gồm:

PID: mã quy trình

TTY: loại terminal

TIME: tổng thời gian quy trình đã chạy

CMD: tên của lệnh khởi động quy trình

1. Dừng một quy trình

Để dừng một quy trình trong Linux, bạn sử dụng lệnh kill. Lệnh kill gửi một tín hiệu đến quy trình.

Có nhiều loại tín hiệu mà bạn có thể gửi. Tuy nhiên, tín hiệu phổ biến nhất là kill -9, tức là SIGKILL.

Bạn có thể liệt kê tất cả các tín hiệu bằng cách sử dụng:

COMMAND : $ kill -L

HOẶC :

COMMAND : $ kill -9 [pid]

1. Thay đổi độ ưu tiên của một quy trình

Trong Linux, bạn có thể đặt độ ưu tiên giữa các quy trình. Giá trị độ ưu tiên cho một quy trình được gọi là giá trị Niceness. Giá trị Niceness có thể dao động từ -20 đến 19. 0 là giá trị mặc định.

- Để bắt đầu một quy trình và cấp cho nó giá trị nice khác ngoài giá trị mặc định, sử dụng:

COMMAND : $ nice -n [value] [process name]

- Để thay đổi giá trị nice của một quy trình đang chạy, sử dụng:

COMMAND : renice [value] -p [PID]




