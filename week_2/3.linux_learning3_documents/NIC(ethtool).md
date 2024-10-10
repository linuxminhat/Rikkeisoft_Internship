Chủ đề: NIC Information (ethtool)

ethtool là một công cụ mạnh mẽ trong Linux, được sử dụng để lấy thông tin và cấu hình các thông số của Network Interface Card (NIC - Card giao tiếp mạng). Với công cụ này, chị có thể kiểm tra tốc độ, trạng thái, và các thuộc tính khác của card mạng.

1. Cài đặt ethtool

Nếu chưa có công cụ ethtool trong hệ thống Kali Linux của chị, có thể cài đặt bằng lệnh sau:

bash

Copy code

sudo apt-get install ethtool

1. Lệnh cơ bản với ethtool

Sau khi cài đặt, chị có thể sử dụng lệnh ethtool để lấy thông tin về NIC. Dưới đây là một số lệnh phổ biến:

Kiểm tra thông tin cơ bản của NIC:

bash

Copy code

sudo ethtool eth0

Trong đó, eth0 là tên của giao diện mạng cần kiểm tra (chị có thể thay thế bằng tên giao diện khác như wlan0 nếu dùng mạng không dây).

Thông tin có thể bao gồm:

Speed: Tốc độ kết nối hiện tại của card mạng (ví dụ: 1000Mb/s).

Duplex: Chế độ truyền dữ liệu (full duplex hoặc half duplex).

Auto-negotiation: Trạng thái tự thương lượng tốc độ kết nối.

Link detected: Hiển thị trạng thái kết nối mạng (có kết nối hay không).

Kiểm tra chi tiết trạng thái NIC: Để kiểm tra chi tiết hơn, chị có thể dùng:

bash

Copy code

sudo ethtool -i eth0

Thông tin hiển thị sẽ bao gồm:

driver: Tên driver được sử dụng cho NIC.

version: Phiên bản của driver.

firmware-version: Phiên bản firmware của card mạng.

bus-info: Thông tin về bus mà NIC kết nối vào.

Kiểm tra khả năng và tính năng của NIC: Chị có thể kiểm tra các tính năng mà NIC hỗ trợ bằng lệnh:

bash

Copy code

sudo ethtool -k eth0

Lệnh này sẽ hiển thị các tính năng như:

tcp-segmentation-offload: Khả năng offload phân mảnh gói TCP.

scatter-gather: Tính năng scatter-gather I/O.

checksumming: Tính năng kiểm tra checksum của gói tin.

1. Cấu hình NIC với ethtool

ethtool không chỉ cho phép kiểm tra thông tin mà còn có thể dùng để cấu hình NIC. Một số lệnh cấu hình bao gồm:

Cấu hình tốc độ và chế độ truyền dữ liệu: Chị có thể thiết lập tốc độ và chế độ duplex của NIC (lưu ý cần quyền root):

bash

Copy code

sudo ethtool -s eth0 speed 1000 duplex full autoneg on

speed 1000: Thiết lập tốc độ là 1000Mb/s.

duplex full: Sử dụng chế độ full duplex (truyền và nhận cùng lúc).

autoneg on: Kích hoạt tính năng tự động thương lượng tốc độ và chế độ.

Tắt hoặc bật tính năng checksum:

bash

Copy code

sudo ethtool -K eth0 rx off tx off

rx off: Tắt tính năng kiểm tra checksum nhận.

tx off: Tắt tính năng kiểm tra checksum gửi.

1. Ví dụ

Kiểm tra trạng thái NIC:

bash

Copy code

sudo ethtool eth0

Kết quả:

yaml

Copy code

Settings for eth0:

Supported ports: [ TP ]

Supported link modes:   1000baseT/Full

Supported pause frame use: No

Speed: 1000Mb/s

Duplex: Full

Auto-negotiation: on

Link detected: yes

Kiểm tra phiên bản driver:

bash

Copy code

sudo ethtool -i eth0

Kết quả:

yaml

Copy code

driver: e1000e

version: 3.2.6-k

firmware-version: 0.13-4

bus-info: 0000:00:19.0

Kết luận

Công cụ ethtool rất hữu ích khi chị cần kiểm tra hoặc cấu hình card mạng (NIC) trên hệ thống Linux, giúp chị tối ưu hóa hiệu suất mạng hoặc xử lý các sự cố liên quan đến kết nối mạng.
