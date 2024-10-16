﻿SSH (Secure Shell) và Telnet đều là các giao thức mạng được sử dụng để truy cập từ xa vào các thiết bị và hệ thống máy tính, nhưng chúng có sự khác biệt lớn về bảo mật và tính năng.

1. SSH (Secure Shell)

Mục đích: SSH được sử dụng để đăng nhập và thực hiện các lệnh từ xa trên hệ thống, bảo mật toàn bộ quá trình bằng mã hóa.

Bảo mật: Giao thức SSH cung cấp mã hóa dữ liệu mạnh mẽ, giúp bảo vệ thông tin người dùng, mật khẩu, và các dữ liệu truyền qua mạng.

Cổng: Mặc định sử dụng cổng 22.

Xác thực: Hỗ trợ nhiều phương pháp xác thực như mật khẩu, khóa công khai (public key), khóa riêng tư (private key), v.v.

Tính năng bổ sung:

Chuyển tiếp cổng (Port forwarding): Cho phép chuyển tiếp lưu lượng mạng giữa các cổng bảo mật.

Sao chép tệp bảo mật: Sử dụng scp hoặc sftp để truyền tệp an toàn.

Nén dữ liệu: SSH có thể nén dữ liệu trước khi truyền để tăng tốc độ.

1. Telnet

Mục đích: Telnet là giao thức cho phép người dùng đăng nhập vào hệ thống từ xa và thực hiện các lệnh, nhưng không cung cấp mã hóa.

Bảo mật: Toàn bộ dữ liệu, bao gồm thông tin xác thực và nội dung, được truyền dưới dạng văn bản rõ (plain text), làm cho Telnet dễ bị tấn công Man-in-the-Middle (MitM) và nghe trộm (eavesdropping).

Cổng: Mặc định sử dụng cổng 23.

Xác thực: Thường chỉ hỗ trợ xác thực bằng mật khẩu, không an toàn khi so với SSH.

Tính năng bổ sung: Không hỗ trợ các tính năng bảo mật như SSH.

1. So sánh chính

Đặc điểm	SSH	Telnet

Bảo mật	Mã hóa mạnh mẽ	Không mã hóa (plain text)

Cổng mặc định	22	23

Xác thực	Mật khẩu, khóa công khai	Mật khẩu

Sao chép file an toàn	Hỗ trợ (SCP, SFTP)	Không hỗ trợ

Chuyển tiếp cổng	Có	Không

Sử dụng chính	Đăng nhập bảo mật từ xa	Đăng nhập từ xa, kém an toàn

Khi nào sử dụng SSH và Telnet:

SSH: Được khuyến nghị sử dụng cho mọi trường hợp khi cần truy cập từ xa an toàn và bảo mật.

Telnet: Hiếm khi được sử dụng ngày nay do thiếu bảo mật, chỉ thích hợp cho môi trường mạng cục bộ, thử nghiệm, hoặc hệ thống không yêu cầu bảo mật.
