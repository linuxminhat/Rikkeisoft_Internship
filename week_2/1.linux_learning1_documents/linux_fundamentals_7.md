﻿LINUX FUNDAMENTALS 7

\---------------------

COMPARE FILES IN LINUX :

+diff(line by line):

+cmp (byte by byte) :

\---------------------

COMPRESS AND un-COMPRESS FILE :

+tar : #zip => tar cvf [namefile1] [namefile2]

Lệnh tar (viết tắt của "tape archive") được sử dụng để lưu trữ nhiều tệp và thư mục vào một tệp lưu trữ (archive file).

Mặc dù tar không nén các tệp theo mặc định, nó có thể kết hợp với các công cụ nén khác như gzip để nén các tệp lưu trữ


Lệnh tar cvf kali.tar bị lỗi vì bạn chưa chỉ định các tệp hoặc thư mục cần lưu trữ trong tệp tar.

Khi sử dụng lệnh tar với tùy chọn -c (create), bạn cần chỉ định các tệp hoặc thư mục bạn muốn đưa vào tệp lưu trữ.

Giải thích các tùy chọn của lệnh tar:

- c: Tạo một tệp lưu trữ mới (create).
- v: Hiển thị thông tin chi tiết trong quá trình thực hiện (verbose).
- f: Chỉ định tên tệp lưu trữ (file).


+gzip : like zip

Lệnh gzip (viết tắt của "GNU zip") được sử dụng để nén tệp.

gzip nén tệp đơn lẻ và thay thế tệp gốc bằng tệp nén có phần mở rộng .gz.

+gzip -d OR gunzip :

Lệnh gunzip được sử dụng để giải nén tệp nén bởi gzip. gunzip hoạt động tương tự như gzip -d và khôi phục tệp gốc từ tệp nén.

\---------------------

TRUNCAT FILE SIZE (truncate) :

The Linux truncate command is often used to shrink or extend the size of a file to the specified size

Lệnh truncate trong Linux thường được sử dụng để thu nhỏ hoặc mở rộng kích thước của một tập tin đến kích thước được chỉ định.

truncate -s [kích\_thước] [tập\_tin]

EX : Tạo một tệp tên là learningtruncate

truncate -s 20 learningtruncate

tệp có size là 35, sau khi đã vi vào

cat learning truncate => Nó sẽ cắt ngắn nội dung

\---------------------

COMBINING AND SPLITING FILE :

Multiple files can be combined into one and One file can be split into multiple files

