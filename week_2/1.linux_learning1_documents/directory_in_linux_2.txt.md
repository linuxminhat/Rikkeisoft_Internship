FIND FILES AND DIRECTORIES :

find . -name "HuynhThaoLinh"

locate

\------------------------------

REQUIRE TO BECOME ROOT :

sudo su

\------------------------------

DIFFERENT BETWEEN "FIND" AND "LOCATE" COMMANDS :

LOCATE : IF U WANT TO USE, U SHOULD USING "UPDATEDB", AND IF U CANT, U MUST SWITCH ROOT ROLE FOR USING UPDATEDB

\------------------------------

WILDCARDS :

A Wildcard is a character that can be used as a substitute for any of a class of characters in a search

* : represents zero or more character

=> EX: If u want to find a characters with "te", u can search te?t

=> EX : If u want to remove any characters with "te", u can rm te?

? : represents single character

[] : represents a range of character

\------------------------------

rm : To remove a file or directories

\------------------------------

SOFT AND HARD LINKS :

inode : Pointer or number of a file on the hard disk

EXPLAIN : YOU CALL A FILE BY NAME, BUT LINUX CANT NOT BE UNDERSTAND WHAT IS YOUR NAME !

SoftLink : Link will be removed if file removed or renamed => Soft link hay còn gọi là symbolic link tương tự như một phím tắt (shortcut) trong hệ điều hành Windows.

HardLink : Deleting renaming or moving the original file will not affect the hard link =>

Hard link là một liên kết trực tiếp đến dữ liệu trên ổ đĩa. Khi bạn tạo một hard link cho một tệp, bạn đang tạo thêm một tên (entry) khác trong hệ thống tệp, liên kết trực tiếp đến cùng khối dữ liệu.

\------------------------------

Lệnh echo được sử dụng để hiển thị dòng văn bản hoặc chuỗi trên màn hình. Trong Linux, bạn cũng có thể sử dụng echo để ghi nội dung vào một tệp.

echo "nội dung cần ghi" > tên\_tệp

Lệnh cat được sử dụng để đọc và hiển thị nội dung của một hoặc nhiều tệp trên màn hình. Nó có thể kết hợp nội dung từ nhiều tệp hoặc chỉ hiển thị nội dung của một tệp.

cat tên\_tệp

\------------------------------

Tạo directory bằng tổ hợp phím :

mkdir {a..c}{1..3}

=>9 directories




