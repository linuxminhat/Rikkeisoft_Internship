Quản lý Quy trình (Process Management) trong Linux

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

List Processes :

Dưới đây là kiến thức cơ bản về danh sách quá trình (list process) trong quản lý quá trình (process management) trong Linux:

1. Khái Niệm về Quá Trình

Quá trình (Process) là một chương trình đang chạy trong bộ nhớ, bao gồm mã lệnh, dữ liệu, và các thông tin cần thiết để thực hiện.

Mỗi quá trình trong Linux có một PID (Process ID) duy nhất để nhận diện.

1. Lệnh Quản Lý Quá Trình

ps: Lệnh này dùng để hiển thị danh sách các quá trình đang chạy.

1. Các Tùy Chọn của Lệnh ps
- a: Hiển thị quy trình cho tất cả người dùng.
- e: Hiển thị tất cả quy trình.
- f: Cung cấp danh sách chi tiết về quy trình.
- l: Hiển thị thông tin quy trình ở định dạng dài.
- x: Liệt kê tất cả các quy trình, bao gồm những quy trình không có terminal.
- p: Hiển thị thông tin cho ID quy trình cụ thể.
- o: Tùy chỉnh định dạng đầu ra.
- H: Hiển thị cây quy trình.
- T: Xem quy trình liên kết với terminal.

Ví dụ: ps aux hiển thị tất cả các quá trình của tất cả người dùng.

top: Lệnh này hiển thị danh sách các quá trình đang chạy theo thời gian thực. Nó cho phép bạn theo dõi sử dụng CPU, bộ nhớ và các thông tin khác.

htop: Phiên bản nâng cao của top, cho phép điều hướng dễ dàng hơn và nhiều tính năng hơn (cần cài đặt thêm).

pgrep: Lệnh này tìm kiếm các quá trình theo tên. Ví dụ: pgrep firefox để tìm PID của trình duyệt Firefox.

kill: Lệnh này dùng để gửi tín hiệu đến một quá trình, thường được sử dụng để dừng (terminate) quá trình. Ví dụ: kill 1234 sẽ dừng quá trình với PID 1234.

3\. Thông Tin Về Quá Trình

pstree: Hiển thị các quá trình theo dạng cây (tree), cho phép bạn thấy mối quan hệ giữa các quá trình cha và con.

pidof: Lệnh này trả về PID của một chương trình cụ thể. Ví dụ: pidof nginx để tìm PID của server Nginx.

4\. Các Trạng Thái của Quá Trình

Running: Đang chạy.

Sleeping: Đang chờ (không hoạt động).

Stopped: Đã dừng lại (bị ngừng bởi người dùng).

Zombie: Quá trình đã kết thúc nhưng chưa được thu hồi.

5\. Thao Tác Với Quá Trình

Tạo quá trình: Sử dụng lệnh fork() trong C hoặc lệnh trong shell để khởi tạo quá trình mới.

Quản lý quá trình: Sử dụng các lệnh như nice để thay đổi mức độ ưu tiên của quá trình.

6\. Mô Hình Quản Lý Quá Trình

Linux sử dụng mô hình Kernel-based Process Management, nơi kernel quản lý các tài nguyên hệ thống và quá trình.

Ví dụ Thực Hành

Mở terminal.

Gõ ps aux để xem danh sách các quá trình.

Sử dụng top để xem thông tin thời gian thực.

Dùng kill <PID> để dừng một quá trình.

Bạn có thể tìm hiểu sâu hơn về các lệnh và tham số của chúng bằng cách sử dụng lệnh man <tên lệnh>, ví dụ: man ps.
