LINUX FUNDAMENTALS 6

\---------------------

FILTERS/TEXT PROCESSORS COMMANDS : CÁC LỆNH XỬ LÍ VĂN BẢN TRONG LINUX

- cut :

\+ cut filename : does not work : Giải thích: Câu lệnh này không hợp lệ. Lệnh cut yêu cầu phải có tùy chọn xác định (như -c, -d, hoặc -f) để chỉ ra phần nào của tệp bạn muốn trích xuất.

\+ cut --version : checking version : Giải thích: Lệnh này được sử dụng để kiểm tra phiên bản của chương trình cut đang được cài đặt trên hệ thống.

\+ cut -c1 filename : list one character : Giải thích: Lệnh này trích xuất ký tự đầu tiên của mỗi dòng trong tệp filename.

\+ cut -c1,2,4 filename : pick and choose character

\+ cut -c1-3 filename : list range of characters

\+ cut -c1-3,6-8 filename : list specific range of characters

\+ cut -b1-3 filename : list by byte size

\+ using pipe : ls -l | cut -c2-4 :

- awk :

\+ awk --version : checking version	

\+ awk '{print $1}' file : list 1st field from a file

EX :

\-------

John 85

Alice 90

Bob 78

awk '{print $1}' students.txt

\-------

John

Alice

Bob

\+ ls -l | awk '{print $1,$3}' file : list 1st an 3rd field from a file

\+ ls -l | awk '{print $NF}' : last field of the output . NF là viết tắt của "Number of Fields" (Số lượng Trường), và $NF là cách để truy cập trường cuối cùng.

\+ awk '/Jerry/ {print}' file : Search for a specific word

\+ awk -F: '{print $1}' /etc/passwd :

NOTE : CÒN THIẾU KHÁ NHIỀU PHẦN AWK NÀY !

- grep and egrep : The grep command which stands for "global regular expression print", process text line by line and prints any lines which match a specified pattern

+Checking Version : grep --version / grep --help

+grep keyword [namefile] : Searching for keyword file

+grep -c keyword [namefile] : Searching for a keyword and count

+grep -i keyword [namefile] : Searching for keyword ignore case-sensitive

Lệnh grep -i keyword [namefile] trong Linux được sử dụng để tìm kiếm các dòng chứa từ khóa (keyword) trong một tập tin ([namefile]) mà không phân biệt chữ hoa và chữ thường.

+grep -n keyword [namefile] : displayed the matched lines and there lines numbers

Lệnh grep -n keyword [namefile] trong Linux được sử dụng để tìm kiếm một từ khóa (keyword) trong một tập tin ([namefile]) và hiển thị các dòng chứa từ khóa đó cùng với số dòng tương ứng.

- sort :

+Sort command sorts in alphabetical order

Lệnh sort trong Linux dùng để sắp xếp nội dung của một tệp tin hoặc đầu ra của một lệnh theo thứ tự nhất định. Câu lệnh này thường sắp xếp theo thứ tự chữ cái (alphabetical order) đối với các chuỗi văn bản.

+sort [namefile]

+sort -n numbers.txt : sort in number

+sort -r filename.txt : sort in riverse

+sort -k2 filename.txt : Lệnh sort -k2 filename.txt trong Linux được sử dụng để sắp xếp các dòng trong tệp filename.txt dựa trên cột thứ hai của mỗi dòng.

- uniq :

+uniq namefile : loại bỏ phần tử trùng lặp

+sort file | uniq : sort first and then uniq

+sort file | uniq -c : sort first, uniq and list count


- wc : lệnh đếm từ

+wc --version

+wc namefile : checking file line count

+wc -l file : get the number of lines in a file
