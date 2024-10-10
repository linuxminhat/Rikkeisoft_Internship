Interface Configuration Files (Các file cấu hình mạng)

Trong Linux, cấu hình mạng được quản lý thông qua một số file cấu hình nằm trong thư mục /etc/network và một số hệ thống khác có thể dùng thêm các dịch vụ khác như NetworkManager. Dưới đây là các file cấu hình mạng chính:

1. /etc/network/interfaces

Đây là file chính để cấu hình các giao diện mạng trên các hệ thống dùng Debian-based (như Kali Linux, Ubuntu). Trong file này, chị có thể cấu hình các giao diện mạng tĩnh (static) hoặc động (DHCP).

Cấu trúc cơ bản:

bash

Copy code

auto eth0  # Tự động bật eth0 khi khởi động

iface eth0 inet static  # Định nghĩa cấu hình tĩnh

address 192.168.1.10  # Địa chỉ IP tĩnh

netmask 255.255.255.0  # Subnet mask

gateway 192.168.1.1  # Gateway

auto wlan0  # Tự động bật wlan0 khi khởi động

iface wlan0 inet dhcp  # Cấu hình sử dụng DHCP

Các tham số quan trọng:

auto: Tự động bật giao diện mạng khi khởi động.

iface: Định nghĩa cấu hình cho giao diện, có thể là static hoặc dhcp.

address: Địa chỉ IP tĩnh của giao diện.

netmask: Subnet mask của mạng.

gateway: Gateway mặc định để ra ngoài Internet.

1. /etc/resolv.conf

Đây là file cấu hình DNS của hệ thống. Nó chứa địa chỉ của các máy chủ DNS mà hệ thống sẽ sử dụng để phân giải tên miền.

Cấu trúc:

bash

Copy code

nameserver 8.8.8.8  # Google DNS

nameserver 8.8.4.4  # Google DNS thứ hai

1. /etc/hosts

File này dùng để ánh xạ tên miền (hostname) thành địa chỉ IP cục bộ, giúp phân giải tên miền mà không cần truy cập vào máy chủ DNS.

Cấu trúc:

bash

Copy code

127\.0.0.1   localhost

192\.168.1.10 myserver.local

1. /etc/hostname

File này lưu trữ tên máy chủ của hệ thống, được sử dụng trong quá trình khởi động và khi hệ thống cần xác định tên của chính mình.

Cấu trúc:

bash

Copy code

kali-linux

1. /etc/network/if-up.d/ và /etc/network/if-down.d/

Đây là các thư mục chứa các script sẽ được thực thi khi một giao diện mạng được bật (up) hoặc tắt (down). Chị có thể đặt các script tùy chỉnh tại đây để tự động chạy khi cấu hình mạng thay đổi.

Kết luận

File cấu hình mạng và các lệnh quản lý giao diện mạng giúp quản trị viên mạng dễ dàng kiểm soát và quản lý các kết nối mạng trên hệ thống Linux.
