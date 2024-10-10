LINUX FUNDAMENTALS 5

\----------------------

PIPES (|)

A pipe is used by the shell to connect the output of one command directly to input of another command

The symbol for a pipe is the vertical bar (|).The command syntax is :

"command1 [argument] | command2 [argument]"

FLOW :

[command1] => [PIPE (|)] => [command2]

\----------------------

FILE MAINTENANCE COMMANDS : CÁC LỆNH BẢO TRÌ TẬP TIN

\+ cp : copy

EX : cp [oldnamefile] [newnamefile]

\+ rm : remove

\+ mv : move

EX : mv [oldnamefile] [newnamefile]

\+ mkdir : make directories

\+ rmdir : remove directories

\+ chgrp :

\+ chown :

\----------------------

FILE DISPLAY COMMANDS : CÁC LỆNH HIỂN THỊ TẬP TIN

\+ cat : Chức năng: cat (concatenate) là lệnh dùng để hiển thị toàn bộ nội dung của một hoặc nhiều tệp lên màn hình.

\+ more : Chức năng: more là lệnh dùng để hiển thị nội dung tệp theo trang, cho phép bạn xem tệp từng trang một.

`	`Thích hợp cho việc xem nội dung lớn mà không cần phải cuộn lại toàn bộ nội dung.

\+ less : Chức năng: less cũng là lệnh phân trang nội dung tệp nhưng cung cấp nhiều tính năng hơn so với more.

\+ head : Chức năng: head là lệnh dùng để hiển thị các dòng đầu tiên của một tệp.

head -n 1 [filename] : Hiển thị 1 dòng đầu tiên của tệp => LƯU Ý : SỐ TRUYỀN VÀO SẼ HIỆN THỊ DÒNG CỤ THỂ, KHÔNG PHẢI SỐ DÒNG

\+ tail :

tail -n 1 [filename] : Hiển thị 1 dòng đầu tiên của tệp => LƯU Ý : SỐ TRUYỀN VÀO SẼ HIỆN THỊ DÒNG CỤ THỂ, KHÔNG PHẢI SỐ DÒNG



