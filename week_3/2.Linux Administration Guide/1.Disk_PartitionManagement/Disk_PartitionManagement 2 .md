Disk/Partition Management 2 : Phân vùng ổ đĩa trong Linux

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Bước 1 — Cài đặt Parted

`	`sudo apt update

`	`sudo apt install parted

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Bước 2 — Xác định ổ đĩa mới trong hệ thống

`	`sudo parted -l | grep Error

Bạn sẽ thấy một lỗi "nhãn đĩa không được nhận diện" cho ổ đĩa mới chưa được phân vùng:

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Bước 3 — Phân vùng ổ đĩa mới

Để làm điều này, trước tiên bạn cần chỉ định tiêu chuẩn phân vùng sẽ sử dụng. Có hai lựa chọn: GPT và MBR. GPT là một tiêu chuẩn hiện đại hơn, trong khi MBR được hỗ trợ rộng rãi hơn trong các hệ điều hành cũ. Đối với một máy chủ đám mây điển hình, GPT là lựa chọn tốt hơn.

Để chọn tiêu chuẩn GPT, hãy chuyển ổ đĩa mà bạn đã xác định đến parted với lệnh mklabel gpt:

`	`sudo parted /dev/sda mklabel gpt

Để sử dụng định dạng MBR, hãy sử dụng lệnh mklabel msdos:

`	`sudo parted /dev/sda mklabel msdos

Tạo phân vùng mới

`	`sudo parted -a opt /dev/sda mkpart primary ext4 0% 100%

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Bước 4 — Tạo hệ thống tệp trên phân vùng mới

`	`sudo mkfs.ext4 -L datapartition /dev/sda1

Nếu bạn muốn thay đổi nhãn phân vùng sau này, bạn có thể sử dụng lệnh e2label:

`	`sudo e2label /dev/sda1 newlabel

