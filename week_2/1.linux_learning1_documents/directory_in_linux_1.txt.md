LINUX FILE OR DIRECTORY PROPERTIES

If first letter is D, its a Directory

If first letter is L, its a Link

If its last, its just a file

Structure :

Type - # of Links - Owner - Group - Size - Month - Day - Time - Name

\------------------------------

LINUX FILE TYPE

File Symbol |||||| Mearning

`	`- 				Regular File

`	`d 				Directory

`	`l 				Link

`	`c 				Special File or Device File : Kết nối bàn phím, cổng nối tiếp,CPU nó sẽ bắt đầu tạo tệp là chữ c

`	`s 				Socket : Là điểm cuối giao tiếp mà các ứng dụng sử dụng để trao đổi dữ liệu => Socket được coi là một cổng giao tiếp giữa các ứng dụng trên mạng.

`	`p 				Named pipe : Liên lạc các tiến trình trong máy => Tạo tiến trình bằng câu lệnh mkfifo

`	`b 				Block Device : Tệp đại diện cho các thiết bị lưu trữ block như ổ cứng, ổ đĩa SSD

\------------------------------

WHAT IS ROOT ?

There are 3 types of root on linux system :

1/Root account : most powerful which can access to all command and files

2/Root as / :first directory => thu muc goc

3/Root home directory

\------------------------------

CHANGING PASSWORD :

command line : passwd

- Current password :
- New password :
- Repeat :

\------------------------------

FILE SYSTEM PATH :

There are two paths to navigate to a file system : Đường dẫn để điều hướng tệp !

- Absolute Path : cd /var/log/samba
- Relative Path : cd var => cd log => cd samba

\-----------------------------

CREATING FILES AND DIRECTORIES :

+Creating Files :

touch : Creating files. ls -l to view, ls -ltr to tracking time you creating files !

cp : Creating a copy files.

=> cp [name old file] [name new file]

vi : vi homer

=> how to quit : "Esc" + :wq : Its saving and quit / "Esc" + :q! : Quit without savings

+Creating Directories :	

mkdir : mkdir + nameFile

\-----------------------------

COPYING DIRECTORIES :

Command to copy a dir : cp

Copy a directory in Linux : cp -R <sourcefolder> <destinationfolder>

cp -R /home/user/documents /home/user/backup

- R: Viết tắt của "recursive", có nghĩa là lệnh sẽ sao chép tất cả nội dung bên trong thư mục, bao gồm cả các thư mục con và tệp bên trong chúng. Đây là cách sao chép toàn bộ cấu trúc thư mục
