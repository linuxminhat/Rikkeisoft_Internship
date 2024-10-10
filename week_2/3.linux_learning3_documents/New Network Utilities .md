Chủ đề: New Network Utilities (nmtui, nmcli, nm-connection-editor, and GNOME Settings)

Trong các phiên bản hiện đại của hệ điều hành Linux, đặc biệt là các bản phân phối như Kali Linux, Ubuntu,... có một số công cụ quản lý mạng tiện lợi và mạnh mẽ giúp cấu hình, quản lý các kết nối mạng dễ dàng hơn. Các công cụ này hoạt động chủ yếu với NetworkManager – một dịch vụ quản lý mạng phổ biến trên Linux.

1. nmtui (NetworkManager Text User Interface)

nmtui là một giao diện dòng lệnh dựa trên văn bản để cấu hình các kết nối mạng. Nó cung cấp một giao diện thân thiện, dễ sử dụng mà không cần phải nhớ các lệnh phức tạp.

Lệnh khởi động:

bash

Copy code

sudo nmtui

Chức năng:

Activate a connection: Kích hoạt một kết nối mạng.

Edit a connection: Thay đổi cấu hình của các kết nối mạng (bao gồm IP, DNS, gateway, ...).

Set system hostname: Cấu hình tên máy chủ cho hệ thống.

Ưu điểm:

Đơn giản, dễ sử dụng với giao diện dạng menu.

Không cần nhớ cú pháp phức tạp.

1. nmcli (NetworkManager Command-Line Interface)

nmcli là công cụ dòng lệnh đầy đủ chức năng, cho phép chị quản lý các kết nối mạng, xem thông tin mạng, và cấu hình mạng ngay từ terminal mà không cần giao diện đồ họa.

Lệnh cơ bản:

Liệt kê các kết nối mạng:

bash

Copy code

nmcli connection show

Kích hoạt một kết nối mạng:

bash

Copy code

nmcli connection up <tên\_kết\_nối>

Tắt một kết nối mạng:

bash

Copy code

nmcli connection down <tên\_kết\_nối>

Tạo kết nối mạng mới (Wi-Fi):

bash

Copy code

nmcli dev wifi connect <SSID> password <mật\_khẩu>

Hiển thị thông tin thiết bị mạng:

bash

Copy code

nmcli device status

Ưu điểm:

Rất linh hoạt và mạnh mẽ, có thể sử dụng để cấu hình và quản lý chi tiết mạng.

Thích hợp cho việc tự động hóa cấu hình mạng thông qua script.

1. nm-connection-editor

nm-connection-editor là một công cụ đồ họa cho phép chị quản lý các kết nối mạng. Công cụ này cung cấp giao diện đồ họa để tạo, chỉnh sửa và xóa các cấu hình mạng.

Khởi động:

Trên terminal, chị có thể khởi động với lệnh sau:

bash

Copy code

nm-connection-editor

Hoặc tìm trong menu ứng dụng của hệ thống với từ khóa "Network Connections".

Chức năng:

Tạo mới các kết nối mạng (Wi-Fi, Ethernet, VPN, ...).

Chỉnh sửa các thông số như IP tĩnh, DNS, Gateway.

Xem thông tin chi tiết và điều chỉnh cấu hình của các kết nối hiện có.

Ưu điểm:

Dễ sử dụng với giao diện đồ họa trực quan.

Phù hợp với người dùng không quen dùng lệnh dòng lệnh.

1. GNOME Settings (Cài đặt GNOME)

Đây là công cụ quản lý mạng tích hợp sẵn trong môi trường desktop GNOME. Với GNOME Settings, chị có thể dễ dàng cấu hình các kết nối mạng thông qua giao diện đồ họa hiện đại.

Khởi động:

Mở Settings từ menu hệ thống hoặc tìm kiếm "Settings".

Chọn mục Network để quản lý các kết nối mạng.

Chức năng:

Quản lý các kết nối Ethernet, Wi-Fi, VPN, và các loại kết nối mạng khác.

Thêm mới hoặc chỉnh sửa các kết nối mạng.

Kích hoạt hoặc tắt các kết nối một cách nhanh chóng.

Xem thông tin chi tiết của kết nối hiện tại như địa chỉ IP, DNS, Gateway, trạng thái kết nối.

Ưu điểm:

Giao diện đồ họa đẹp, hiện đại, thân thiện với người dùng.

Dễ dàng truy cập và thao tác trực tiếp mà không cần dòng lệnh.

Kết luận

nmtui: Dễ sử dụng với giao diện văn bản, thích hợp cho những ai không muốn dùng nhiều dòng lệnh.

nmcli: Mạnh mẽ, linh hoạt và có thể sử dụng trong tự động hóa cấu hình mạng.

nm-connection-editor: Công cụ đồ họa giúp quản lý mạng trực quan.

GNOME Settings: Công cụ tích hợp trong GNOME với giao diện hiện đại, dễ thao tác.

Chị có thể lựa chọn công cụ phù hợp tùy theo môi trường làm việc và nhu cầu quản lý mạng của mình.
