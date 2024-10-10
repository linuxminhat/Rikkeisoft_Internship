120\. Tổng Quan Về Shell Scripting

1. Linux Kernel

Linux Kernel là nhân hệ điều hành (core of the operating system), quản lý tài nguyên hệ thống như CPU, bộ nhớ, và các thiết bị phần cứng khác. Nó cung cấp các dịch vụ cơ bản cho phần mềm ứng dụng và kiểm soát giao tiếp giữa phần cứng và phần mềm.

1. Shell Là Gì

Shell là giao diện giữa người dùng và hệ điều hành. Nó nhận các lệnh từ người dùng, gửi chúng đến kernel để thực hiện và hiển thị kết quả. Shell có thể hoạt động ở dạng tương tác (người dùng nhập lệnh) hoặc dạng script (tập hợp các lệnh được thực thi tuần tự).

1. Các Loại Shell

Có nhiều loại shell khác nhau trong Linux, một số phổ biến gồm:

Bash (Bourne Again Shell): Shell mặc định trên nhiều hệ thống Linux.

Sh (Bourne Shell): Shell đơn giản và cổ điển.

Zsh: Một shell mạnh mẽ hơn với nhiều tính năng mở rộng.

Csh (C Shell): Sử dụng cú pháp tương tự ngôn ngữ C.

Ksh (Korn Shell): Kết hợp các tính năng từ Bash và Csh.

1. Shell Scripting Là Gì

Shell scripting là việc viết các đoạn mã, tức là các tập hợp lệnh trong một file script để hệ thống thực thi tuần tự. Nó giúp tự động hóa các tác vụ, tối ưu hóa quản lý hệ thống và tiết kiệm thời gian.

1. Câu Lệnh Đơn Giản

Một vài câu lệnh đơn giản trong shell scripting:

bash

Copy code

#!/bin/bash

echo "Hello, World!"  # In ra chuỗi "Hello, World!"

#!/bin/bash: Khai báo sử dụng Bash shell.

echo: In ra văn bản hoặc giá trị.

1. Input/Output

Để lấy đầu vào từ người dùng, dùng lệnh read:

bash

Copy code

read name

echo "Hello, $name!"

read: Nhận input từ người dùng.

$name: Biến chứa giá trị người dùng nhập.

Output thường được thực hiện qua lệnh echo, nhưng có thể điều hướng input/output bằng các ký hiệu:

\>: Ghi đè output vào file.

\>>: Thêm output vào cuối file.

<: Sử dụng một file làm input.

1. Cấu Trúc If-Then

Cấu trúc điều kiện if-then trong shell scripting:

bash

Copy code

a=5

b=10

if [ $a -lt $b ]; then

echo "$a nhỏ hơn $b"

else

echo "$a không nhỏ hơn $b"

fi

if [ condition ]: Kiểm tra điều kiện.

- lt: Toán tử so sánh "nhỏ hơn" (less than).

then và else: Xác định các nhánh điều kiện.

8\. Vòng Lặp For

Vòng lặp for trong shell cho phép lặp qua các phần tử:

bash

Copy code

for i in 1 2 3 4 5; do

echo "Số: $i"

done

for i in ...: Lặp qua các giá trị.

do và done: Bắt đầu và kết thúc vòng lặp.

9\. Vòng Lặp Do While

Vòng lặp while tiếp tục chạy khi điều kiện đúng:

bash

Copy code

count=1

while [ $count -le 5 ]; do

echo "Số: $count"

count=$((count + 1))

done

while [ condition ]: Lặp khi điều kiện đúng.

count=$((count + 1)): Tăng biến count sau mỗi lần lặp.

Kết Luận

Shell scripting là công cụ mạnh mẽ giúp tự động hóa các tác vụ quản lý hệ thống và xử lý dữ liệu. Nắm vững các khái niệm cơ bản như shell, câu lệnh, vòng lặp và điều kiện sẽ giúp bạn sử dụng Linux một cách hiệu quả hơn.
