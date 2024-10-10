Disk/Partition Management 1: Phân vùng ổ đĩa trong Linux

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Phân vùng ổ đĩa là quá trình chia ổ đĩa thành một hoặc nhiều vùng logic, thường được gọi là phân vùng (partitions), nơi mà người dùng có thể làm việc một cách riêng biệt.

Khi một phân vùng được tạo, thông tin về vị trí và kích thước của các phân vùng sẽ được lưu trữ trong bảng phân vùng (partition table)

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Tại sao cần phân vùng ổ đĩa?

- Nâng cấp ổ cứng: Để thêm một ổ cứng mới vào hệ thống.
- Cài đặt nhiều hệ điều hành (dual boot): Cho phép chạy nhiều hệ điều hành trên cùng một hệ thống.
- Quản lý ổ đĩa hiệu quả: Giúp chia nhỏ dữ liệu theo các mục đích khác nhau.
- Sao lưu và bảo mật: Dễ dàng hơn trong việc sao lưu và bảo mật dữ liệu.
- Sử dụng nhiều hệ thống file: Có thể làm việc với nhiều hệ thống tệp trên cùng một hệ thống.

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

COMMAND : Mở Terminal và chạy lệnh sau để xem danh sách các ổ đĩa hiện có : lsblk

+sda: Đây là tên của ổ đĩa cứng đầu tiên trên hệ thống. Trong Linux, các ổ đĩa thường được đặt tên theo thứ tự sda, sdb, sdc, v.v. Ổ đĩa sda là ổ đĩa đầu tiên, có thể là ổ cứng chính mà hệ điều hành Kali Linux được cài đặt.

`	`sda1: Đây là phân vùng đầu tiên trên ổ đĩa sda. Con số đằng sau sda (ở đây là 1) chỉ ra số phân vùng. Ví dụ:

`	`sda1: Phân vùng đầu tiên của ổ đĩa sda.

`	`sda2: Phân vùng thứ hai của ổ đĩa sda (nếu có).

Trong trường hợp của bạn, sda1 có thể là phân vùng chứa hệ điều hành chính hoặc một phân vùng hệ thống đã được tạo trước đó.

+sr0: Đây là thiết bị CD/DVD-ROM hoặc ổ đĩa quang (optical drive) được hệ thống nhận diện. sr0 thường dùng để chỉ các ổ đĩa quang, chẳng hạn như khi bạn chèn đĩa CD hoặc DVD vào máy ảo hoặc máy thật, thiết bị này sẽ xuất hiện dưới tên sr0.

Trong hệ thống máy ảo, sr0 có thể đại diện cho ổ đĩa CD ảo mà bạn sử dụng để cài đặt hệ điều hành hoặc các công cụ khác.

Nếu bạn cần tạo phân vùng mới trên ổ đĩa sda, bạn có thể thao tác với các lệnh quản lý phân vùng như tôi đã hướng dẫn ở trên.

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

COMMAND : Sử dụng lệnh sau để hiển thị thông tin phân vùng chi tiết: sudo fdisk -l /dev/sda

+Các lệnh chính trong fdisk:

`	`m: Hiển thị trợ giúp.

`	`p: In bảng phân vùng.

`	`n: Tạo phân vùng mới.

`	`w: Ghi thay đổi vào đĩa.

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

sda là tên của ổ đĩa cứng đầu tiên trong Linux, được hệ thống nhận diện theo thứ tự, chẳng hạn như sda, sdb, sdc,... trong đó sd là viết tắt của SCSI Disk (Small Computer System Interface Disk).

`	`+sd: Viết tắt của SCSI Disk.

`	`+a: Chỉ ổ đĩa đầu tiên trong hệ thống (ổ đĩa tiếp theo sẽ là sdb, sdc,...).

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Gắn kết phân vùng (Mounting a Partition) là quá trình liên kết một phân vùng của ổ đĩa với một thư mục cụ thể trên hệ thống tập tin của Linux, để người dùng và các chương trình có thể truy cập và sử dụng dữ liệu trên phân vùng đó. Khi một phân vùng được gắn kết, hệ điều hành sẽ coi thư mục đó như một phần của hệ thống tập tin hiện tại và cho phép người dùng thao tác dữ liệu như bình thường.      	

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

QUY TRÌNH GẮN KẾT MỘT PHÂN VÙNG :

1/Tạo một thư mục để gắn kết phân vùng (nếu chưa có): sudo mkdir /mnt/data

2/Gắn phân vùng vào thư mục đã tạo: sudo mount /dev/sda1 /mnt/data

3/Kiểm tra phân vùng đã được gắn: Sử dụng lệnh sau để kiểm tra trạng thái gắn kết: df -h

`	`Giải thích các cột trong kết quả của df -h:

`	`Filesystem: Đây là tên của hệ thống tệp hoặc phân vùng. Ví dụ, /dev/sda1 chỉ phân vùng sda1 trên ổ đĩa sda.

`	`Size: Dung lượng tổng cộng của phân vùng hoặc hệ thống tệp (thường được hiển thị dưới dạng GB hoặc MB nhờ tùy chọn -h).

`	`Used: Dung lượng đã được sử dụng trên phân vùng hoặc hệ thống tệp (cũng hiển thị dưới dạng GB, MB,...).

`	`Avail: Dung lượng còn trống (chưa sử dụng) trên phân vùng hoặc hệ thống tệp.

`	`Use%: Phần trăm dung lượng đã được sử dụng. Con số này giúp bạn nhanh chóng xem xét phân vùng nào đã đầy và cần dọn dẹp dữ liệu.

`	`Mounted on: Thư mục mà phân vùng được gắn kết. Đây là nơi mà bạn có thể truy cập dữ liệu trên phân vùng đó. Ví dụ, phân vùng /dev/sda1 có thể được gắn kết vào thư mục / (thư mục gốc của hệ thống), hoặc phân vùng /dev/sdb1 có thể gắn kết vào /mnt/data.

4/Gỡ gắn phân vùng (nếu cần): Nếu bạn muốn ngừng truy cập vào phân vùng đó, bạn có thể gỡ gắn phân vùng bằng lệnh: sudo umount /mnt/data

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Tạo hệ thống tệp trên phân vùng

`	`Các máy tính sử dụng các loại hệ thống tệp cụ thể để lưu trữ và tổ chức dữ liệu trên các phương tiện lưu trữ như ổ cứng, CD, DVD, v.v. Các hệ thống tệp phổ biến trong Linux bao gồm ext2, ext3, ext4, JFS, ReiserFS, XFS, FAT (thường được sử dụng trong Windows OS) và B-treeFS. Để chỉ định hệ thống tệp cho mỗi phân vùng, chúng ta có thể sử dụng lệnh mkfs (make file system).

COMMAND : mkfs.ext4 -j /dev/sdb1

=> Lệnh này định dạng phân vùng đầu tiên với hệ thống tệp ext4. Cờ -j cho phép hỗ trợ nhật ký (journaling), giúp ghi lỗi vào nhật ký trong trường hợp hệ thống gặp sự cố.
