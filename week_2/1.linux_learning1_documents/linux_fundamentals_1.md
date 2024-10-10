LINUX FUNDAMENTALS 1

\----------------------

LINUX COMMAND SYNTAX :

Commands typically have the syntax :

command option(s) argument(s)

EX : ls -l

EX : ls -ltr

OPTIONS :

What is options ?

Modify the way that a command work

Usually consist of a hyphen or dash followed by a single letter

Some command accept multiple options which can be grouped together

ARGUMENTS :

Most commands are used together with one or more arguments

Arguments are option for some commands and required by other

\----------------------

FILES AND DIRECTORIES PERMISSION (chmod)

There are 3 types of permission :

r - read

w - write

x - execute : running a program

Each permission can be controlled at three levels :

u - user=yourself

g - group=can be people in a project

- - other=everyone in a system

File or Directory permission can be displayed by running ls-l command

Command cho change permission : chmod

EX :

Trước đó đã tạo một file là susan

Khi thực hiện ls -l susan: sẽ    hiển thị

- rw-r--r-- 1 root root 0 Sep 18 03:35 susam
- : Tệp

rw : read and write

chmod g-r susan

\----------------------

PERMISSION USING NUMERIC MODE (chmod)

Owners assignment Permission on Every File and Directory :

User => Read/Write/Execute

Group => Read/Write/Execute

All => Read/Write/Execute

NUMBER | PERMISSION TYPE | SYMBOL

0 			No Permission

1. `			`Execute
1. `			`Write
1. `			`Execute + Write
1. `			`Read
1. `			`Read + Execute
1. `			`Read + Write
1. `			`Read + Write + Execute

For Example : chmod 764 FILE => 7 for user/6 for group/4 for other
