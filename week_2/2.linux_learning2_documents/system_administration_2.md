86/System Administration

\--------------------

A text editor is a program which enables you to create and manipulate data (text) in a Linux file

There are several standard text editor :

vi - Visual Editor

ed - standard line editor

pico - beginner 's editor

vim - advance version of vi

\--------------------

Câu lệnh grep trong linux

Tìm chuỗi trong tệp: Tìm chuỗi trong tệp: grep "hello" file.txt

\--------------------

87\. Difference between vi and vim Editors

\--------------------

88\. "sed" Command

Lệnh sed (viết tắt của stream editor) trong Linux là một trình soạn thảo dòng lệnh,

cho phép bạn thực hiện các thao tác chỉnh sửa văn bản tự động trên tệp hoặc đầu ra của lệnh khác mà không cần mở tệp trong trình soạn thảo

Replace a string in a file with a new string

Find and delete a line

Remove empty lines

=> sed 's/Keny/Leny/g' [namefile]

Note : Chỉ hiện thị thay đổi trên màn hình, không thay đổi trong tệp

g (global): Tùy chọn g có nghĩa là "thực hiện thay thế trên toàn bộ dòng".

Nếu không có g, sed chỉ thay thế lần xuất hiện đầu tiên của "Keny" trong mỗi dòng. Khi thêm g, sed sẽ thay thế tất cả các lần xuất hiện của "Keny" bằng "Leny" trong mỗi dòng.

=> loại bỏ 5 dòng trống :

=> sed '/^$/d' [namefile]

Câu lệnh sed '/^$/d' [namefile] có nghĩa là xóa tất cả các dòng trống trong tệp namefile. Đây là cách hoạt động của các thành phần trong lệnh:

/^$/: Đây là một biểu thức chính quy (regular expression) đại diện cho một dòng trống.

^: Ký tự này biểu thị bắt đầu của một dòng.

$: Ký tự này biểu thị kết thúc của một dòng.

Khi kết hợp lại ^$, nó mô tả một dòng không có bất kỳ ký tự nào giữa vị trí bắt đầu và kết thúc, nghĩa là dòng trống.

=> sed '1D' [namefile] : Xóa dòng đầu tiên

=> sed's/\t/ /g' [namefile] : Xóa tab trong Linux

\--------------------

89\. User Account Management (useradd, groupadd, usermod, userdel, groupdel)

