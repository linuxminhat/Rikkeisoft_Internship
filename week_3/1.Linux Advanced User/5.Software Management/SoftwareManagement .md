Software Management trong Linux.

Chủ đề :

1/Install/remove unofficial/unpacked software

2/Install/remove official/packed software

\----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1. Cài đặt/Gỡ bỏ phần mềm không chính thức (unofficial/unpacked software)

Phần mềm không chính thức thường là những phần mềm mà không có trong các kho lưu trữ (repository) của hệ điều hành. Phải cài đặt bằng cách tải trực tiếp từ nguồn của nhà phát triển (website, GitHub, v.v.).

+Cài đặt phần mềm không chính thức:

Thông qua file .tar.gz, .zip, hoặc mã nguồn:

Thông thường, các gói phần mềm không chính thức sẽ được phát hành dưới dạng file nén (.tar.gz hoặc .zip). Tải và giải nén chúng, sau đó biên dịch hoặc cài đặt thủ công.

Các bước cơ bản:

1/Tải file phần mềm (ví dụ: software.tar.gz):

`	`wget https://example.com/software.tar.gz

2/Giải nén file:

`	`tar -xvzf software.tar.gz

`	`cd software/

3/Chạy file cài đặt hoặc biên dịch (nếu cần):

./install.sh

4/Nếu phải biên dịch từ mã nguồn:

./configure

`	`make

`	`sudo make install

+Gỡ bỏ phần mềm không chính thức:

Phần mềm không chính thức thường không được quản lý bởi trình quản lý gói của hệ thống, vì vậy việc gỡ bỏ sẽ phụ thuộc vào cách phần mềm được cài đặt. Nếu có file uninstall.sh hoặc hướng dẫn gỡ cài đặt, bạn có thể làm theo.

Ví dụ: Nếu có script gỡ cài đặt:

./uninstall.sh

Nếu không có script, bạn có thể cần phải xóa các file thủ công trong thư mục mà bạn đã cài đặt.

\----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1. Cài đặt/Gỡ bỏ phần mềm chính thức (official/packed software)

Phần mềm chính thức là những phần mềm được cung cấp qua các kho lưu trữ của hệ điều hành, được quản lý bởi trình quản lý gói của hệ điều hành. Dưới đây là một số hệ quản lý gói phổ biến trong Linux:

Với Ubuntu/Debian (sử dụng apt):

+Cài đặt phần mềm chính thức:

Sử dụng lệnh apt để cài đặt phần mềm từ kho lưu trữ chính thức:

`	`sudo apt update        # Cập nhật danh sách gói

`	`sudo apt install <tên\_phần\_mềm>    # Cài đặt phần mềm

Ví dụ, để cài curl:

`	`sudo apt install curl

+Gỡ bỏ phần mềm chính thức:

Để gỡ bỏ một phần mềm:

`	`sudo apt remove <tên\_phần\_mềm>

Nếu bạn muốn gỡ bỏ cả các file cấu hình:

`	`sudo apt purge <tên\_phần\_mềm>

Sau khi gỡ bỏ, bạn có thể dọn dẹp hệ thống bằng lệnh:

`	`sudo apt autoremove

Với Red Hat/CentOS/Fedora (sử dụng yum hoặc dnf):

+Cài đặt phần mềm chính thức:

Sử dụng lệnh dnf hoặc yum (tùy vào hệ điều hành) để cài đặt:

`	`sudo dnf install <tên\_phần\_mềm>   # Đối với Fedora

`	`sudo yum install <tên\_phần\_mềm>   # Đối với CentOS, Red Hat

Gỡ bỏ phần mềm chính thức:

`	`sudo dnf remove <tên\_phần\_mềm>

Với Arch Linux (sử dụng pacman):

+Cài đặt phần mềm chính thức:

`	`sudo pacman -S <tên\_phần\_mềm>

`	`sudo pacman -R <tên\_phần\_mềm>



Tổng kết:

Phần mềm không chính thức (unofficial/unpacked) yêu cầu tải trực tiếp từ nguồn, giải nén và cài đặt thủ công.

Phần mềm chính thức (official/packed) có thể được cài đặt dễ dàng bằng các trình quản lý gói như apt, dnf, yum, hoặc pacman.
