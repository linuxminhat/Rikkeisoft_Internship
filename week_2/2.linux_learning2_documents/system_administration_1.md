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

Commands :

useradd : => useradd -m spiderman => checking : id spiderman

groupadd : groupadd footballmatch => cat /etc/group

userdel :

groupdel : groupdel footballmatch

usermod : Lệnh usermod trong Linux được sử dụng để thay đổi các thông tin, thuộc tính và quyền của một tài khoản người dùng đã tồn tại. Với lệnh này, bạn có thể chỉnh sửa thông tin người dùng như thêm vào nhóm, thay đổi thư mục home, thiết lập lại shell đăng nhập, khóa/mở khóa tài khoản, và nhiều hơn nữa.

=> usermod [tùy chọn] tên\_người\_dùng

- aG (append group): Thêm người dùng vào một hoặc nhiều nhóm phụ. Tùy chọn -a sẽ giúp thêm người dùng vào nhóm mà không xóa người dùng khỏi các nhóm khác.

usermod -aG tên\_nhóm tên\_người\_dùng

usermod -aG footballteam footballer

Lệnh này thêm người dùng footballer vào nhóm footballteam.



Bất cứ khi nào tạo ra người dùng mới, tôi đã tạo ra quản lí người dùng đó

Files :

/etc/passwd :

/etc/group :

/etc/shadow :

\--------------------

90\. Enable Password Aging

The /etc/login.defs file in kalilinux

Tệp /etc/login.defs là một tệp cấu hình trong Linux, chứa các thiết lập mặc định liên quan đến việc quản lý người dùng và việc đăng nhập.

Tệp này quy định các thông số và chính sách cho các công cụ quản lý tài khoản như useradd, usermod, passwd, và các công cụ khác liên quan đến quản lý người dùng và đăng nhập hệ thống.

Tệp này chứa các cấu hình mặc định cho việc tạo người dùng mới, chính sách mật khẩu, giới hạn đăng nhập, và các tham số khác liên quan đến người dùng.

Khi bạn tạo tài khoản người dùng mới hoặc chỉnh sửa tài khoản hiện có bằng lệnh như useradd hoặc usermod, các giá trị trong tệp này sẽ được tham chiếu để quyết định cách hành xử của hệ thống.

Một số tham số phổ biến trong /etc/login.defs:

1/UID\_MIN và UID\_MAX:

Xác định dải ID người dùng (User ID - UID) được cấp phát cho các tài khoản người dùng thông thường.

UID\_MIN 1000

UID\_MAX 60000

Điều này có nghĩa là khi bạn tạo một người dùng mới, UID của họ sẽ nằm trong khoảng từ 1000 đến 60000 (đối với các tài khoản thông thường).

2/GID\_MIN và GID\_MAX:

Xác định dải ID nhóm (Group ID - GID) cho các nhóm người dùng.

GID\_MIN 1000

GID\_MAX 60000

3/PASS\_MAX\_DAYS:

Quy định số ngày tối đa mà mật khẩu của một người dùng có thể tồn tại trước khi hết hạn và yêu cầu đổi mật khẩu.

PASS\_MAX\_DAYS 99999

Điều này có nghĩa là mật khẩu sẽ hết hạn sau 99999 ngày (tức là mật khẩu sẽ gần như không hết hạn).

4/PASS\_MIN\_DAYS:

Số ngày tối thiểu mà người dùng phải chờ trước khi có thể đổi mật khẩu.

PASS\_MIN\_DAYS 0

5/PASS\_WARN\_AGE:

Số ngày trước khi hết hạn mật khẩu, hệ thống sẽ cảnh báo người dùng về việc sắp hết hạn mật khẩu.

PASS\_WARN\_AGE 7

Điều này có nghĩa là người dùng sẽ được cảnh báo 7 ngày trước khi mật khẩu của họ hết hạn.

=>The chage command : => chage -m 5 -M 90 -W 10 -I 3 [username : babubutt]

=>Lệnh chage trong Linux được sử dụng để quản lý các chính sách về thời hạn mật khẩu cho người dùng. Với lệnh này, quản trị viên có thể đặt các điều kiện về thời hạn sử dụng mật khẩu, như số ngày tối thiểu và tối đa mà mật khẩu có thể được sử dụng, ngày hết hạn của mật khẩu, và các cảnh báo trước khi mật khẩu hết hạn. Điều này giúp tăng cường bảo mật cho hệ thống, yêu cầu người dùng thường xuyên thay đổi mật khẩu.

\--------------------

91\. Switch Users and sudo Access

=> su [username] : su maradona ( before useradd maradona ) => Thoát ra khỏi : exit

=> sudo command :

Lệnh sudo trong Kali Linux (và các bản phân phối Linux khác) được sử dụng để chạy các lệnh với quyền quản trị (quyền root) mà không cần đăng nhập trực tiếp vào tài khoản root. Khi sử dụng sudo, người dùng sẽ tạm thời thực hiện một lệnh với quyền của người dùng root hoặc một người dùng khác có quyền cao hơn, mà không cần phải chuyển sang tài khoản root hoàn toàn.

sudo là viết tắt của "superuser do", tức là "thực hiện lệnh dưới quyền siêu người dùng".

File :

/etc/sudoers

dmidecode :

Lệnh dmidecode trong Kali Linux (và các bản phân phối Linux khác) là một công cụ dòng lệnh được sử dụng để thu thập thông tin về phần cứng của hệ thống từ bảng DMI (Desktop Management Interface). dmidecode lấy dữ liệu từ DMI hoặc SMBIOS (System Management BIOS), một giao diện chuẩn giúp quản lý và mô tả các thành phần phần cứng của hệ thống.

\--------------------

92\. Monitor Users (who, last, w, id) : giám sát người dùng

=> who : Có bao nhiêu người đã đăng nhập và id của người dùng đó

=> last : Lệnh cuối cùng hiển thị các lượt đăng nhập kể từ ngày đầu tiên => In ra tên : last | awk '{print}' => In ra tên và sắp xếp : last | awk '{print $1}' | sort | uniq

=> w

=> finger :

Lệnh finger trong Kali Linux (và hầu hết các hệ điều hành Linux/Unix) là một công cụ dùng để hiển thị thông tin chi tiết về người dùng trên hệ thống. Lệnh này cung cấp thông tin như tên người dùng, tên thật, thư mục home, shell đăng nhập, thời gian đăng nhập gần đây nhất, thời gian không hoạt động, và các thông tin khác về người dùng.

=> id

\--------------------

93\. Talking to Users (users, wall, write)

Người dùng là người đã đăng nhập vào hệ thống của bạn

=> user :

Đây là cách viết tắt để chỉ một người dùng (user) đã đăng nhập vào hệ thống. Người dùng có thể thực hiện các tác vụ, giao tiếp với các người dùng khác, và tương tác với hệ thống.

Trong ngữ cảnh này, "user" đề cập đến người dùng đã đăng nhập vào hệ thống.

=> wall :

Lệnh wall được sử dụng để gửi tin nhắn đến tất cả người dùng đã đăng nhập vào hệ thống. Khi bạn gửi một tin nhắn bằng wall, tin nhắn sẽ xuất hiện trên màn hình của tất cả những người dùng đang hoạt động.

=> write :

Lệnh write cho phép bạn gửi tin nhắn trực tiếp đến một người dùng cụ thể đã đăng nhập vào hệ thống. Người nhận sẽ thấy tin nhắn ngay lập tức trên màn hình của họ.

\--------------------

94\. Linux Directory Service - Account Authentication : Xác thực tài khoản Linux

Vấn đề, 1000 nhân viên mới join vào công ty và bạn muốn tạo ra 10000 tài khoản người dùng

Type of Accounts :

- Local Accounts :
- Domain/Directory Accounts :

=> Giao thức SSL :

SSL (Secure Sockets Layer) là một giao thức bảo mật được sử dụng để mã hóa và bảo vệ dữ liệu trao đổi giữa người dùng và máy chủ trên internet.

Giao thức này giúp đảm bảo rằng dữ liệu được truyền tải một cách an toàn và bảo mật khỏi việc bị đánh cắp hoặc thay đổi trong quá trình truyền.

\--------------------

95\. Difference between Active Directory, LDAP, IDM, WinBIND, OpenLDAP etc.

Active Directory = Microsoft

IDM = Identity Manager

WindBIND = Used in Linux to communicate with Windows (Samba)

OpenLDAP (open source)

IBM Directory Server

JumpCloud

\--------------------

Play

96\. System Utility Commands (date, uptime, hostname, uname, which, cal, bc)

date : Hiển thị ngày và giờ hiện tại của hệ thống.

uptime :

hostname : Hiển thị thời gian hệ thống đã hoạt động (kể từ khi khởi động), số người dùng hiện tại, và tải trung bình của hệ thống.

uname : Hiển thị thông tin hệ thống, bao gồm kernel, kiến trúc hệ thống, và các thông tin liên quan.

which : Tìm vị trí của một chương trình trong hệ thống (xác định vị trí của tệp thực thi trong các thư mục có trong PATH).

cal : Hiển thị lịch của tháng hiện tại hoặc một tháng cụ thể.

bc : Hiển thị thời gian hệ thống đã hoạt động (kể từ khi khởi động), số người dùng hiện tại, và tải trung bình của hệ thống.

\--------------------

97\. Processes, Jobs and Scheduling

Application = Service : Một ứng dụng hoặc dịch vụ giống như một chương trình chạy trên máy tính

=> NTP / NFS / rsyslog / Apache / Nginx

Script : Shell scripts or Commands are list of instructions

=> Một tập lệnh là thứ được viết trong một tệp sau đó có thể đóng gói theo cách mà nó có thể thực thi

=> Ví dụ chạy một ứng dụng Apache cũng phải chạy dưới dạng một tập lệnh

=> Tất cả các lệnh chúng ta chạy trong Linux đều là một script

Process : Khi chạy chương trình sẽ khởi động tiến trình Process / Một process là một chương trình đang chạy trên hệ thống. Khi một chương trình được khởi động, hệ điều hành tạo ra một process cho nó. Mỗi quá trình có thể thực hiện một công việc cụ thể, được quản lý bởi hệ điều hành và sử dụng các tài nguyên như CPU, bộ nhớ, I/O, v.v.

Daemon : Daemon là một loại đặc biệt của process chạy ẩn trong nền và thường không yêu cầu tương tác từ người dùng. Daemon thường được sử dụng để cung cấp các dịch vụ hệ thống, chẳng hạn như quản lý mạng, in ấn, hoặc giám sát tài nguyên.

Threads :

Service => Process => thread1 / thread2 / thread3 / thread4

Job : Công việc là thứ được tạo ra bởi trình lập lịch, giống lệnh làm việc

Process / Services Commands :

\--------------------

98\. systemctl command

=> systemctl or service : systemctl là một công cụ quản lý hệ thống và dịch vụ trong hệ điều hành Linux sử dụng systemd (hệ thống init mới và hiện đại). systemctl cho phép người dùng khởi động, dừng, kiểm tra trạng thái của các dịch vụ, và quản lý các đơn vị hệ thống (unit) như dịch vụ, bộ đệm, điểm gắn kết (mount points), và các đối tượng khác.

- systemctl start nginx
- systemctl stop nginx
- systemctl reload nginx : Nạp lại cấu hình dịch vụ mà không cần dừng dịch vụ (nếu dịch vụ hỗ trợ).
- systemctl restart nginx
- systemctl enable nginx : Cấu hình dịch vụ nginx tự động khởi động khi hệ thống bật.
- systemctl status nginx : Kiểm tra trạng thái của dịch vụ.
- systemctl is-active nginx : Kiểm tra xem dịch vụ có đang chạy không.
- systemctl is-enabled nginx : Kiểm tra xem dịch vụ có được thiết lập để khởi động cùng hệ thống không.
- systemctl list-units --all : hiển thị danh sách tất cả các unit (đơn vị) trên hệ thống, bao gồm cả những unit đang hoạt động và không hoạt động.
- systemctl halt :
- systemctl poweroff :
- systemctl reboot :

NOTE : LỆNH ĐỂ THÊM DỊCH VỤ DƯỚI QUẢN LÍ CHƯƠNG TRÌNH LỆNH CỦA SYS

\*\*\* VÍ DỤ BẠN CÓ MỘT ỨNG DỤNG BÊN THỨ BA VÀ MUỐN ỨNG DỤNG HOẶC DỊCH VỤ ĐÓ QUẢN LÍ BẰNG LỆNH CTL CỦA SYS,TẤT CẢ CẦN LÀM LÀ TẠO DỊCH VỤ HOẶC TỆP ĐƠN VỊ ĐÓ TRONG THƯ MỤC HỆ THỐNG ETSI sys DX	

Một unit trong systemd là một thành phần mà systemctl quản lý, và nó có thể là dịch vụ, điểm gắn kết (mount point), bộ đệm (swap), socket, mục tiêu (target), hoặc timer.

\--------------------

99\. ps command

=> ps : "process status"

Lệnh ps trong Linux là viết tắt của "process status", được sử dụng để hiển thị thông tin về các tiến trình (process) đang chạy trên hệ thống. Lệnh này cung cấp chi tiết về các tiến trình như PID (Process ID), người sở hữu (user), CPU sử dụng, bộ nhớ, thời gian bắt đầu, và nhiều thông tin khác

- ps [tùy chọn]
- ps -e : show all running process
- ps aux : show all running process in BSD format
- ps -ef : show all running process in full format listing (most commonly used)

PID TTY          TIME CMD

1329 pts/0    00:00:00 bash

3456 pts/0    00:00:00 ps

Trong đó:

PID: ID của tiến trình.

TTY: Thiết bị đầu cuối (terminal) mà tiến trình đang chạy.

TIME: Thời gian CPU mà tiến trình đã sử dụng.

CMD: Lệnh được sử dụng để khởi động tiến trình.

- ps -f:

Hiển thị thông tin chi tiết hơn về tiến trình, bao gồm PID, PPID (ID tiến trình cha), người sở hữu (user), và thời gian khởi động tiến trình.

UID        PID  PPID  C STIME TTY          TIME CMD

root         1     0  0 10:00 ?        00:00:03 systemd

user      1329  1244  0 10:15 pts/0    00:00:00 bash

user      3456  1329  0 10:20 pts/0    00:00:00 ps -f

\--------------------

100\. top command

=> top : top command is used to show Linux process and its provide a real time view of running system

- top -u [username] : show task/procees by user owned
- top then press c : shows command absolute path

EXPLAINING :

\--------------------

PID : Show task's unique id

USER : Username

PR : priority

NI : Nice Value of Task

VIRT : Total virtual memory used by the task

RES : Memory consumed by RAM

SHR : Shared Memory

S: process state in the single letter form

%CPU : CPU usage

%MEM : Memory usage of task

\--------------------

101\. kill command

=> kill : kill [OPTION] [PID]

OPTION = Signal name or signal number /ID

PID = Process ID

Lệnh kill trong Linux được sử dụng để gửi tín hiệu tới một hoặc nhiều tiến trình để yêu cầu dừng, khởi động lại, hoặc thực hiện một hành động cụ thể. Mặc dù tên lệnh là "kill," nó không chỉ dùng để kết thúc tiến trình mà còn có thể gửi các tín hiệu khác nhau để điều khiển tiến trình.

kill -l : to get a list of all signal names or signal numbers

Most used signals are :

kill PID = Kill a process with default signal

\--------------------

102\. crontab command

=> crontab : crontab command is used to schedule tasks

- crontab -e : Edit the crontab
- crontab -l : List the crontab entries
- crontab -r : Remove the crontab
- crond : crontab daemon/services that manages scheduling
- Mỗi tác vụ có cấu trúc 5 trường thời gian (phút, giờ, ngày, tháng, ngày trong tuần), tiếp theo là lệnh hoặc script cần chạy.

CU PHAP :

* \* \* \* \* <command to execute>

1/\* : minute (0-59)

2/\* : hours (0-23)

3/\* : day of the month (1-31)

4/\* : month (1-12)

5/\* : day of the week (0-6) : Sunday - Sat, some system 7 is also Sunday.

\--------------------

103\. at command

=> at : at command is like crontab which allows you to schedule job but only once time

- when the command is run, it will enter interactive mode and you can only get out by pressing Ctr + D

CU PHAP :

at HH:MM PM : Schedule a job

atq : list the at entries

atrm # : remove at entry

NOTE : Phải dùng mạng để cài đặt gói at

\--------------------

104\. Additional cronjobs (hourly, daily, weekly, monthly)

By default, there are 4 types of cronjobs :

\+ Hourly

\+ Daily

\+ Weekly

\+ Monthly

All above crons are setup in :

/etc/cron.\_\_\_\_ (directory) :

The timing for each are set in :

/etc/anacrontab -- except hourly

anacrontab là tệp cấu hình dành cho Anacron, một tiện ích trong Linux dùng để lên lịch các tác vụ chạy định kỳ tương tự như cron, nhưng với mục đích đặc biệt là đảm bảo các tác vụ định kỳ vẫn được thực thi ngay cả khi hệ thống không chạy liên tục (chẳng hạn nếu máy tính đã tắt khi tác vụ được lên lịch).

Tệp /etc/anacrontab là nơi chứa các thông tin về thời gian và tần suất mà các tác vụ sẽ được thực hiện bởi Anacron. Trong tệp này, bạn có thể cấu hình các tác vụ định kỳ như hàng ngày, hàng tuần, và hàng tháng.

Thư mục lưu tập lệnh cron :

cd /etc/

ls cron\* : Kiểm tra có thư mục cron nào trong này không ?

\--------------------

105\.Process Management

Process Management trong Kali Linux (và các hệ điều hành dựa trên Linux nói chung) là việc giám sát, kiểm soát, và quản lý các tiến trình (processes) đang chạy trên hệ thống.

Một tiến trình là một chương trình hoặc một đoạn mã đang thực thi.

Quản lý các tiến trình là một phần quan trọng của hệ thống vận hành vì nó ảnh hưởng đến việc sử dụng tài nguyên như CPU, bộ nhớ và các thiết bị I/O.

Background = Ctrl + Z, jobs and bg

Foreeground = fg

Run process even after exit = nohup process &

`	`OR : nohup process > /dev/null 2>&1 &

Kill a process by name = pkill

Process priority = nice

\--------------------

106\. System Monitoring Commands (df, dmesg, iostat 1, netstat, free, top)

=> top :

=> df : Lệnh df (disk free) trong Linux được sử dụng để hiển thị thông tin về dung lượng đĩa còn trống và đã sử dụng trên các hệ thống tệp được gắn kết. Dưới đây là giải thích chi tiết về lệnh này:

=> dmesg :

Lệnh dmesg (diagnostic message) là một công cụ quan trọng trong hệ thống Linux, bao gồm cả Kali Linux.

Nó được sử dụng để hiển thị và kiểm tra các thông báo từ kernel ring buffer.

Dưới đây là giải thích chi tiết về lệnh dmesg:

Chức năng chính:

Hiển thị các thông báo từ kernel trong quá trình khởi động hệ thống.

Xem các thông báo liên quan đến phần cứng và trình điều khiển.

Giúp chẩn đoán các vấn đề hệ thống và phần cứng.

=> iostat :Lệnh iostat (Input/Output Statistics) là một công cụ quan trọng trong hệ thống Linux, bao gồm Kali Linux, được sử dụng để giám sát hiệu suất input/output của hệ thống và các thiết bị lưu trữ

=> free :

=> cat /proc / cpuinfo :

=> ip route : Lệnh ip route là một phần của bộ công cụ iproute2 trong hệ thống Linux, bao gồm cả Kali Linux

Các lệnh phổ biến:

show: Hiển thị bảng định tuyến.

add: Thêm một tuyến đường mới.

del: Xóa một tuyến đường.

change: Thay đổi một tuyến đường hiện có.

get: Tìm kiếm tuyến đường cho một địa chỉ cụ thể.

\--------------------

107\. System Logs Monitor (/var/log)

Log Directory = /var/log

- boot
- chronyd = NTP Liên quan đến dịch vụ đồng bộ hóa thời gian (NTP).
- cron Ghi lại các hoạt động của cron jobs.
- maillog Chứa log của hệ thống email.
- secure Ghi lại các sự kiện liên quan đến bảo mật và xác thực.
- messages Chứa các thông báo hệ thống chung.
- http Chứa log của máy chủ web.




