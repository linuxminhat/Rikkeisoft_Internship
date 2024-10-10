rpm và yum

Kali Linux không sử dụng rpm và yum vì nó là một bản phân phối Debian-based. Trong các bản phân phối Debian-based như Kali Linux, công cụ quản lý gói chính là dpkg và apt.

1. Thay thế cho rpm trong Kali Linux

rpm được thay thế bằng dpkg trong Kali Linux để cài đặt, gỡ bỏ và quản lý các gói phần mềm định dạng .deb (tương tự như .rpm trên Red Hat-based).

Lệnh phổ biến của dpkg:

Cài đặt gói .deb:

bash

Copy code

sudo dpkg -i package.deb

Gỡ bỏ gói:

bash

Copy code

sudo dpkg -r package\_name

Kiểm tra gói đã cài:

bash

Copy code

dpkg -l

1. Thay thế cho yum trong Kali Linux

yum được thay thế bằng apt trong Kali Linux để tự động quản lý gói, giải quyết các phụ thuộc và cập nhật hệ thống từ các kho lưu trữ (repositories).

Lệnh phổ biến của apt:

Cập nhật danh sách gói:

bash

Copy code

sudo apt update

Cập nhật tất cả các gói đã cài:

bash

Copy code

sudo apt upgrade

Cài đặt một gói phần mềm:

bash

Copy code

sudo apt install package\_name

Gỡ bỏ một gói:

bash

Copy code

sudo apt remove package\_name

Kết luận

Trong Kali Linux, chị sẽ sử dụng dpkg để thay thế rpm và apt để thay thế yum. Các lệnh này giúp quản lý gói phần mềm hiệu quả và dễ dàng trên hệ thống Debian-based như Kali Linux.
