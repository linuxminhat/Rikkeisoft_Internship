LINUX FUNDAMENTALS 3

\----------------------

TIPS FOR NEW SESSION ON KALI LINUX :

- IF U WANT TO OPEN A NEW SESSION, "Ctrl + Alt + F2"
- IF U WANT TO COMEBACK, "Ctr + Alt + F7"

\----------------------

HELP COMMANDS

There are 3 types of HELP COMMAND :

- whatis command

EX : whatis clear

- command --help

EX : clear --help

- man command

EX : man clear

\----------------------

TAB COMPLETION AND UP ARROW

Using TAB to complete command fast

\----------------------

ADDING TEXT TO FILES

3 simples ways to add text to a file :

- vi
- Redirect command output > or >>
- echo > or >>

NOTE : DIFF BETWEEN ECHO > AND ECHO >>

ECHO > : DELETE

ECHO >> : NOT DELETE

\----------------------

INPUT AND OUTPUT REDIRECTS

There are 3 redirects in Linux :

1/Standard input (stdin) and it has file descriptor number as 0

2/Standard output (stdout) and it has file descriptor number as 1

3/Standard error (stderr) and it has file descriptor number as 2

Trong Linux, khi làm việc với các lệnh và chương trình, việc điều hướng đầu vào và đầu ra rất quan trọng.

Dưới đây là giải thích chi tiết về các loại điều hướng đầu vào và đầu ra, cùng với số mô tả (file descriptor) của chúng:

1. Standard Input (stdin)

Mô tả: Đây là nguồn đầu vào chuẩn của một chương trình. Khi bạn gõ lệnh hoặc cung cấp dữ liệu cho một chương trình, đó là từ stdin.

Số mô tả: 0

Sử dụng: Bạn có thể điều hướng đầu vào từ một tệp hoặc một lệnh khác bằng cách sử dụng ký hiệu <. Ví dụ:

command < inputfile
