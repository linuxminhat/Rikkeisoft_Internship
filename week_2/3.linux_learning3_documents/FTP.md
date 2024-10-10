
Chủ đề: FTP - File Transfer Protocol

FTP (File Transfer Protocol) là một giao thức mạng tiêu chuẩn dùng để truyền tải tệp giữa máy khách (client) và máy chủ (server) qua mạng TCP/IP. FTP cho phép người dùng tải lên (upload), tải xuống (download), liệt kê và quản lý tệp tin từ xa trên máy chủ.

1. Các thành phần chính của FTP

FTP Client (Máy khách): Là phần mềm hoặc thiết bị kết nối với máy chủ FTP để tải tệp lên hoặc xuống. Các máy khách FTP phổ biến như FileZilla, WinSCP, hoặc dùng lệnh dòng lệnh trên terminal.

FTP Server (Máy chủ): Là hệ thống lưu trữ tệp và cung cấp dịch vụ FTP để cho phép truy cập và quản lý các tệp từ xa. Máy chủ FTP chấp nhận các yêu cầu kết nối từ máy khách và xử lý việc truyền tệp.

1. Cách hoạt động của FTP

FTP hoạt động trên hai cổng chính:

Cổng 21 (Control Port): Dùng để thiết lập kết nối và gửi các lệnh điều khiển (chẳng hạn như yêu cầu tải lên hoặc tải xuống tệp).

Cổng 20 (Data Port): Dùng để truyền dữ liệu giữa máy khách và máy chủ (tệp tin được truyền qua cổng này).

1. Cách sử dụng FTP qua dòng lệnh

Kết nối với máy chủ FTP

Mở terminal và nhập lệnh để kết nối đến máy chủ FTP:

bash

Copy code

ftp <địa\_chỉ\_IP\_hoặc\_tên\_máy\_chủ>

Khi được nhắc, nhập tên đăng nhập và mật khẩu để xác thực.

Các lệnh cơ bản trong FTP

Liệt kê các tệp tin trên máy chủ:

bash

Copy code

ls

Tải xuống một tệp từ máy chủ về máy:

bash

Copy code

get <tên\_tệp>

Tải lên một tệp từ máy cục bộ lên máy chủ:

bash

Copy code

put <tên\_tệp>

Thay đổi thư mục trên máy chủ:

bash

Copy code

cd <tên\_thư\_mục>

Tạo thư mục mới trên máy chủ:

bash

Copy code

mkdir <tên\_thư\_mục>

Xóa tệp trên máy chủ:

bash

Copy code

delete <tên\_tệp>

Thoát khỏi phiên FTP:

bash

Copy code

bye

1. Các chế độ hoạt động của FTP

Active Mode (Chế độ chủ động): Máy chủ mở cổng 20 để truyền dữ liệu, và máy khách phải sẵn sàng nhận kết nối từ máy chủ.

Passive Mode (Chế độ bị động): Máy chủ chỉ mở cổng để máy khách kết nối, phù hợp khi máy khách bị chặn bởi firewall và không thể nhận kết nối từ máy chủ. Chế độ này thường được sử dụng để tránh các vấn đề liên quan đến tường lửa.

1. SFTP vs. FTP

SFTP (SSH File Transfer Protocol) là một giao thức an toàn hơn, sử dụng mã hóa để bảo mật dữ liệu khi truyền qua mạng. FTP truyền dữ liệu không được mã hóa, do đó kém an toàn hơn so với SFTP. Chị nên sử dụng SFTP nếu cần bảo mật cao trong việc truyền tải tệp.

1. Ví dụ thực tế

Kết nối tới máy chủ FTP:

bash

Copy code

ftp ftp.example.com

Tải xuống một tệp tên là "example.txt":

bash

Copy code

get example.txt

Tải lên một tệp tên là "upload.txt":

bash

Copy code

put upload.txt

Kết luận

FTP là một giao thức truyền tệp tin từ xa phổ biến, nhưng có một số hạn chế về bảo mật. Để truyền tệp an toàn, SFTP hoặc các giải pháp bảo mật khác như FTPS thường được ưu tiên hơn.






