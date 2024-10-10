COMMAND-LINE INTERFACE : BASIC NAVIGATION COMMAND

\----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Dưới đây là phần tóm tắt và giải thích chi tiết từ tài liệu về Introduction to the Linux Command Line Interface:

Giới thiệu

Khi làm việc với máy chủ Linux, bạn sẽ không có giao diện đồ họa (GUI) mà phải tương tác thông qua CLI (giao diện dòng lệnh). Hướng dẫn này giúp những người mới bắt đầu làm quen với dòng lệnh trong Linux.

Từ vựng cơ bản

Terminal: Một cửa sổ cho phép bạn nhập lệnh và nhận kết quả đầu ra từ máy tính.

Shell prompt: Là giao diện chính để bạn nhập lệnh. Ví dụ:

ruby

Copy code

[username@domain directory]$

Nó cho biết bạn đang đăng nhập dưới người dùng nào (username), vào máy chủ nào (domain) và đang ở thư mục nào (directory). Dấu $ là biểu tượng tách biệt giữa thông tin này và lệnh bạn nhập.

Path (đường dẫn): Đường dẫn đến tệp hoặc thư mục trong hệ thống. Đường dẫn tuyệt đối bắt đầu từ gốc /, còn đường dẫn tương đối bắt đầu từ thư mục hiện tại.

File Permissions (quyền tệp): Quyền hạn truy cập tệp hoặc thư mục, bao gồm read (đọc), write (ghi), và execute (thực thi). Các quyền này có thể được gán cho user (người dùng), group (nhóm), và other (người dùng khác).

Các lệnh Linux cơ bản

pwd: In ra đường dẫn của thư mục hiện tại.

bash

Copy code

pwd

ls: Liệt kê nội dung trong thư mục hiện tại.

bash

Copy code

ls

ls -l  # Hiển thị danh sách dài kèm chi tiết

ls -a  # Hiển thị tất cả, bao gồm cả tệp ẩn

chmod: Thay đổi quyền hạn của tệp/thư mục.

bash

Copy code

chmod u+x file.sh  # Thêm quyền thực thi cho user (chủ sở hữu)

chmod -R u+x dir   # Thêm quyền cho thư mục và các tệp bên trong

cd: Thay đổi thư mục làm việc.

bash

Copy code

cd dir1

cd ..  # Quay lại thư mục cha

mkdir: Tạo thư mục mới.

bash

Copy code

mkdir dir1

mkdir -p dir1/subdir  # Tạo nhiều cấp thư mục

cp: Sao chép tệp hoặc thư mục.

css

Copy code

cp file1 file2  # Sao chép file1 thành file2

cp -r dir1 dir2  # Sao chép thư mục dir1 cùng toàn bộ nội dung vào dir2

mv: Di chuyển hoặc đổi tên tệp/thư mục.

bash

Copy code

mv file1 dir  # Di chuyển file1 vào thư mục dir

mv file1 file2  # Đổi tên file1 thành file2

rm: Xóa tệp hoặc thư mục.

css

Copy code

rm file1  # Xóa tệp file1

rm -r dir1  # Xóa thư mục dir1 và toàn bộ nội dung

Các trình soạn thảo dòng lệnh

Nano:

Dễ sử dụng, phù hợp cho người mới bắt đầu.

Mở tệp: nano file

Thao tác chính:

Lưu tệp: Ctrl + O

Thoát: Ctrl + X

Vim:

Mạnh mẽ hơn, có nhiều tính năng nâng cao.

Mở tệp: vim file

Chế độ:

Insert mode (chỉnh sửa): Nhấn i để vào.

Command mode (lệnh): Nhấn Esc để thoát.
