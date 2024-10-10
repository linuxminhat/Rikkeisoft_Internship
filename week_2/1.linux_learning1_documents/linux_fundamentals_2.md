LINUX FUNDAMENTALS 2

\----------------------

There are 2 owners of a file or directory :

User and Group

Command to change file ownership :

- chown and chgrp

\+ chown change the ownership of a file  : stand for change owner : chown [new owner] [namefile]

\+ chgrp change the group ownership of a file :

Lệnh chgrp (change group) trong Linux được sử dụng để thay đổi nhóm sở hữu của một tệp hoặc thư mục.

Mỗi tệp hoặc thư mục trong Linux có một chủ sở hữu và một nhóm sở hữu, và chgrp cho phép bạn điều chỉnh nhóm này.

Recursive ownership change option :

- R

\----------------------

ACCESS CONTROL LIST : DANH SÁCH QUẢN LÍ TRUY CẬP

Think of a scenario in which particular user is not a member of group created by you but still you want to give

some read or write access, here come in picutures Access Control List

Basically, ACL are used to make a flexible permission mechanism in Linux

Commands to assign and remove ACL permissions are :

setfacl and getfacl

List of commands for setting up ACL :

1) To add permission for user :

setfacl -m u:user:rwx /path/to/file : -m : modify

1) To add permissions for a group

setfacl -m g:group:rw /path/to/live

1) To allow all files or directories to inherit ACL entries from the director it is within

setfacl -dm "entry" /path/to/dir

1) To remove a specific entry

setfacl -x u:user /path/to/file (For a specific user)

1) To remove all entries :

setfacl -b path/to/file (For all users)

Method 2: Using "New Session" in Kali Linux

If you want to open a duplicate session (like another terminal window or a new desktop environment session) within the same Kali Linux VM:

1/Open a New Terminal:

Simply open a new terminal window in the existing session by right-clicking on the desktop and selecting "Open Terminal" or using the shortcut Ctrl + Alt + T.

2/Switch to a New TTY:

You can switch to another TTY (Terminal) session by pressing Ctrl + Alt + F2, Ctrl + Alt + F3, etc., up to F6. Use Ctrl + Alt + F1 (or F7 in some distributions) to return to the graphical user interface (GUI).

3/Using tmux or screen:

You can use terminal multiplexers like tmux or screen to create multiple terminal sessions within a single window. Install tmux using:
