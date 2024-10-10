nslookup và dig là hai công cụ dòng lệnh phổ biến được sử dụng để tra cứu thông tin tên miền (DNS) như tên máy chủ (hostname) hoặc địa chỉ IP.

1. nslookup

Mục đích: nslookup là công cụ dùng để truy vấn các bản ghi DNS (Domain Name System) từ máy chủ DNS.

Sử dụng: Có thể tìm kiếm địa chỉ IP từ hostname và ngược lại.

Cách sử dụng:

Tra cứu địa chỉ IP từ hostname:

bash

Copy code

nslookup example.com

Kết quả sẽ hiển thị địa chỉ IP tương ứng với tên miền example.com.

Tra cứu hostname từ địa chỉ IP (Reverse DNS Lookup):

bash

Copy code

nslookup 8.8.8.8

Kết quả sẽ hiển thị tên miền (hostname) của địa chỉ IP 8.8.8.8.

Ví dụ kết quả:

bash

Copy code

Server:         8.8.8.8

Address:        8.8.8.8#53

Non-authoritative answer:

Name:   example.com

Address: 93.184.216.34

1. dig (Domain Information Groper)

Mục đích: dig là công cụ mạnh mẽ hơn so với nslookup để truy vấn thông tin DNS. Nó cung cấp nhiều chi tiết về các bản ghi DNS và có thể sử dụng để gỡ lỗi mạng.

Sử dụng: Tương tự nslookup, dig cũng có thể tìm kiếm địa chỉ IP từ hostname và ngược lại, nhưng cung cấp nhiều thông tin hơn.

Cách sử dụng:

Tra cứu địa chỉ IP từ hostname:

bash

Copy code

dig example.com

Tra cứu hostname từ địa chỉ IP (Reverse DNS Lookup):

bash

Copy code

dig -x 8.8.8.8

Ví dụ kết quả:

bash

Copy code

; <<>> DiG 9.11.3-1ubuntu1.11-Ubuntu <<>> example.com

;; global options: +cmd

;; Got answer:

;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 12345

;; flags: qr rd ra; QUERY: 1, ANSWER: 1, AUTHORITY: 0, ADDITIONAL: 1

;; QUESTION SECTION:

;example.com.                  IN      A

;; ANSWER SECTION:

example.com.           300     IN      A       93.184.216.34

1. So sánh nslookup và dig

Đặc điểm	nslookup	dig

Mức độ chi tiết	Ít chi tiết hơn	Cung cấp nhiều chi tiết hơn

Tính năng mở rộng	Cơ bản	Mạnh mẽ hơn và linh hoạt hơn

Hỗ trợ phân tích	Giới hạn	Hỗ trợ phân tích sâu hơn

Sử dụng	Dễ sử dụng cho các truy vấn đơn giản	Phù hợp với người cần tra cứu DNS chi tiết

Trong trường hợp cần tra cứu nhanh thông tin IP, nslookup là công cụ đơn giản, dễ sử dụng. Còn nếu bạn cần chi tiết hơn hoặc phân tích sâu hơn về DNS, dig là lựa chọn mạnh mẽ hơn.
