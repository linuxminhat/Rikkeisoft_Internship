Chủ đề: SCP - Secure Copy Protocol

SCP (Secure Copy Protocol) là một giao thức dùng để truyền tệp an toàn giữa các máy tính qua mạng bằng cách sử dụng SSH (Secure Shell) để đảm bảo tính bảo mật. Nó cho phép truyền tải tệp giữa máy cục bộ và máy từ xa hoặc giữa hai máy từ xa thông qua kết nối an toàn, mã hóa dữ liệu trong quá trình truyền.

1. Cách hoạt động của SCP

SCP sử dụng giao thức SSH để bảo mật kết nối và mã hóa tệp tin trong quá trình truyền tải. Điều này giúp bảo vệ tệp tin khỏi việc bị đánh cắp hoặc thay đổi trong quá trình chuyển giao.

1. Cú pháp cơ bản của lệnh SCP

bash

Copy code

scp [tùy chọn] <nguồn> <đích>

nguồn: Đường dẫn tới tệp tin cần sao chép (có thể là máy cục bộ hoặc máy từ xa).

đích: Đường dẫn tới nơi sẽ sao chép tệp tin đến (có thể là máy cục bộ hoặc máy từ xa).

1. Các tình huống sử dụng phổ biến

Sao chép tệp từ máy cục bộ lên máy chủ từ xa

Để sao chép một tệp từ máy cục bộ tới máy chủ từ xa, sử dụng cú pháp:

bash

Copy code

scp <tên\_tệp> <tên\_đăng\_nhập>@<địa\_chỉ\_IP\_hoặc\_host>:<thư\_mục\_đích>

Ví dụ:

bash

Copy code

scp file.txt user@192.168.1.10:/home/user/

Lệnh này sẽ sao chép file.txt từ máy cục bộ đến thư mục /home/user/ trên máy từ xa.

Sao chép tệp từ máy từ xa về máy cục bộ

Để sao chép một tệp từ máy từ xa về máy cục bộ, sử dụng cú pháp:

bash

Copy code

scp <tên\_đăng\_nhập>@<địa\_chỉ\_IP\_hoặc\_host>:<tên\_tệp> <thư\_mục\_đích\_trên\_máy\_cục\_bộ>

Ví dụ:

bash

Copy code

scp user@192.168.1.10:/home/user/file.txt /home/localuser/

Lệnh này sẽ sao chép file.txt từ máy từ xa về thư mục /home/localuser/ trên máy cục bộ.

Sao chép thư mục toàn bộ (bao gồm các tệp con)

Sử dụng tùy chọn -r để sao chép toàn bộ thư mục cùng với các tệp con:

bash

Copy code

scp -r <thư\_mục\_nguồn> <tên\_đăng\_nhập>@<địa\_chỉ\_IP\_hoặc\_host>:<thư\_mục\_đích>

Ví dụ:

bash

Copy code

scp -r /home/localuser/myfolder user@192.168.1.10:/home/user/

Lệnh này sẽ sao chép toàn bộ thư mục myfolder từ máy cục bộ đến máy từ xa.

Sao chép tệp giữa hai máy từ xa

Chị có thể sao chép tệp giữa hai máy từ xa trực tiếp:

bash

Copy code

scp user1@remote1:/path/to/file user2@remote2:/path/to/destination

1. Tùy chọn thường dùng với SCP
- r: Sao chép đệ quy, thường dùng để sao chép toàn bộ thư mục.
- P: Xác định cổng SSH khác ngoài mặc định (22).

bash

Copy code

scp -P 2222 file.txt user@192.168.1.10:/home/user/

- i: Sử dụng một khóa SSH cụ thể để xác thực.

bash

Copy code

scp -i ~/.ssh/id\_rsa file.txt user@192.168.1.10:/home/user/

- C: Bật nén dữ liệu khi truyền, giúp tăng tốc độ trong một số trường hợp.

5\. Ví dụ thực tế

Sao chép tệp từ máy cục bộ lên máy chủ từ xa:

bash

Copy code

scp myfile.txt user@192.168.1.10:/home/user/

Sao chép tệp từ máy từ xa về máy cục bộ:

bash

Copy code

scp user@192.168.1.10:/home/user/file.txt /home/localuser/

Sao chép thư mục từ máy cục bộ lên máy chủ từ xa:

bash

Copy code

scp -r /home/localuser/myfolder user@192.168.1.10:/home/user/

Kết luận

SCP là một công cụ hữu ích và bảo mật cao để sao chép tệp qua mạng trong môi trường Linux. Với sự hỗ trợ của SSH, SCP đảm bảo tính bảo mật cho dữ liệu trong quá trình truyền, đặc biệt là trong các mạng không an toàn.
