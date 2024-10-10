144\. Downloading Files or Apps (wget)

Chủ đề: Downloading Files or Apps (wget)

wget là một công cụ dòng lệnh phổ biến trong Linux dùng để tải xuống (download) các tệp tin hoặc ứng dụng từ Internet. Công cụ này hỗ trợ nhiều giao thức như HTTP, HTTPS, và FTP, và rất tiện dụng trong các tình huống khi chị cần tải xuống các tệp từ terminal mà không cần giao diện đồ họa.

1. Cài đặt wget

Thông thường, wget đã được cài đặt sẵn trên hầu hết các hệ điều hành Linux. Tuy nhiên, nếu Kali Linux của chị chưa có, chị có thể cài đặt bằng lệnh sau:

bash

Copy code

sudo apt-get install wget

1. Cách sử dụng wget

Tải xuống tệp tin đơn giản

Để tải xuống một tệp tin từ URL, chị chỉ cần chạy lệnh:

bash

Copy code

wget <URL>

Ví dụ:

bash

Copy code

wget https://example.com/file.zip

Tải xuống và lưu với tên khác

Chị có thể chỉ định tên tệp lưu khác với tệp trên server bằng cách dùng cờ -O:

bash

Copy code

wget -O ten\_tep\_moi.zip https://example.com/file.zip

Tải xuống trong chế độ nền (Background)

Để tải tệp mà không cần phải chờ kết thúc, chị có thể dùng cờ -b để thực hiện trong nền:

bash

Copy code

wget -b https://example.com/file.zip

Quá trình tải xuống sẽ tiếp tục trong nền, và chị có thể theo dõi tiến trình bằng cách kiểm tra tệp wget-log.

Tiếp tục tải khi bị ngắt kết nối

Nếu quá trình tải xuống bị gián đoạn, chị có thể tiếp tục tải xuống từ nơi dừng lại bằng cách thêm cờ -c:

bash

Copy code

wget -c https://example.com/file.zip

Tải xuống toàn bộ website

wget có thể được sử dụng để tải toàn bộ nội dung của một website. Dùng cờ -r để tải theo kiểu đệ quy (recursive):

bash

Copy code

wget -r https://example.com

Giới hạn tốc độ tải xuống

Chị có thể giới hạn băng thông để tránh chiếm quá nhiều tài nguyên mạng khi tải tệp, sử dụng cờ --limit-rate:

bash

Copy code

wget --limit-rate=100k https://example.com/file.zip

Điều này sẽ giới hạn tốc độ tải xuống ở mức 100 KB/s.

Tải nhiều tệp tin từ danh sách

Nếu có một danh sách URL trong tệp văn bản, chị có thể sử dụng wget để tải nhiều tệp cùng lúc bằng cách sử dụng cờ -i:

bash

Copy code

wget -i list\_of\_urls.txt

Tải xuống từ FTP

wget cũng hỗ trợ tải xuống từ các máy chủ FTP. Nếu máy chủ yêu cầu xác thực, chị có thể cung cấp tên đăng nhập và mật khẩu:

bash

Copy code

wget ftp://username:password@ftp.example.com/file.zip

1. Ví dụ thực tế

Tải một tệp PDF:

bash

Copy code

wget https://example.com/document.pdf

Tải xuống một file ISO lớn và tiếp tục nếu bị gián đoạn:

bash

Copy code

wget -c https://example.com/ubuntu.iso

Tải xuống nhiều tệp từ danh sách URL:

bash

Copy code

wget -i my\_urls.txt

Kết luận

wget là công cụ mạnh mẽ và dễ sử dụng để tải xuống tệp tin, ứng dụng hoặc toàn bộ nội dung từ Internet. Nó linh hoạt trong việc xử lý các quá trình tải xuống phức tạp như tải trong nền, tiếp tục tải khi bị gián đoạn và tải xuống toàn bộ website.
