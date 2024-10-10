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
