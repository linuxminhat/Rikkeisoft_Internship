1. Text, Files & Folders
1. Khái niệm Cơ bản
- Văn bản (Text): Trong Linux, văn bản thường được lưu dưới dạng các tệp văn bản (text files), bao gồm các ký tự mà người dùng có thể đọc và chỉnh sửa. Các tệp văn bản thường có định dạng .txt, nhưng cũng có thể là các tệp cấu hình, mã nguồn, hoặc tài liệu.
- Tệp (File): Tệp là một đơn vị lưu trữ dữ liệu trong hệ thống tệp. Tệp có thể là tệp văn bản, tệp nhị phân (binary files), hoặc tệp thực thi (executable files). Mỗi tệp có một tên và có thể chứa dữ liệu hoặc thông tin.
- Thư mục (Folder): Thư mục là một loại tệp đặc biệt dùng để tổ chức các tệp và thư mục khác trong hệ thống tệp. Thư mục giúp người dùng dễ dàng quản lý và tìm kiếm các tệp.

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

2\. Văn bản (Text) & Tệp (File)

Văn bản (Text) và Tệp (File) là hai khái niệm liên quan nhưng có những điểm khác biệt rõ ràng:

1. Văn bản (Text)

Định nghĩa: Văn bản là một tập hợp các ký tự mà người dùng có thể đọc và hiểu. Nó thường được lưu trữ trong các tệp văn bản.

Đặc điểm:

Chứa dữ liệu dưới dạng chuỗi ký tự (như chữ cái, số, ký hiệu).

Thường không có định dạng phức tạp (như định dạng bảng, hình ảnh, âm thanh).

Ví dụ: Tệp .txt, tệp cấu hình, mã nguồn (như .py, .html).

1. Tệp (File)

Định nghĩa: Tệp là một đơn vị lưu trữ dữ liệu trong hệ thống tệp. Mỗi tệp có một tên và có thể chứa nhiều loại dữ liệu khác nhau.

Đặc điểm:

Có thể chứa bất kỳ loại dữ liệu nào (văn bản, hình ảnh, âm thanh, video, tệp nhị phân, v.v.).

Có định dạng cụ thể tùy thuộc vào nội dung của nó (ví dụ: .jpg cho hình ảnh, .mp3 cho âm thanh, .exe cho tệp thực thi).

Mỗi tệp đều có các thuộc tính như tên, kích thước, và quyền truy cập.

Ví dụ: Tệp document.txt chứa văn bản, trong khi tệp image.jpg là tệp hình ảnh, không phải văn bản.

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1. Các Lệnh Cơ Bản để Quản Lý Tệp và Thư Mục
1. Lệnh Tạo Thư Mục : mkdir tên\_thư\_mục
1. Lệnh Liệt Kê Tệp và Thư Mục : ls
1. Lệnh Di Chuyển vào Thư Mục : cd tên\_thư\_mục
1. Lệnh Tạo Tệp Mới : touch tên\_tệp : touch my\_image.jpg
1. Lệnh Mở Tệp Văn Bản : nano tên\_tệp
1. Lệnh Sao Chép Tệp : cp tên\_tệp\_cũ tên\_tệp\_mới
1. Lệnh Di Chuyển hoặc Đổi Tên Tệp : mv tên\_tệp\_cũ tên\_tệp\_mới
1. Lệnh Xóa Tệp hoặc Thư Mục : Để xóa tệp: rm tên\_tệp : Để xóa thư mục: rm -r tên\_thư\_mục

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

4\.View, replace text in large files

Để xem và thay thế văn bản trong các tệp lớn trên Kali Linux (hoặc bất kỳ bản phân phối Linux nào), bạn có thể sử dụng một số công cụ dòng lệnh hữu ích như less, grep, sed, và awk. Dưới đây là hướng dẫn chi tiết cho từng công cụ.

1. Xem Tệp Lớn
1. less

less là một trình xem tệp cho phép bạn xem nội dung của tệp mà không cần mở toàn bộ tệp vào bộ nhớ.

Điều khiển:

↑, ↓: Cuộn lên/xuống

Space: Cuộn xuống một trang

\-

b: Cuộn lên một trang

/search\_term: Tìm kiếm từ khóa

q: Thoát

1. more

more cũng là một trình xem tệp nhưng có tính năng ít hơn so với less.

2\. Tìm Kiếm Văn Bản

1. grep

grep cho phép bạn tìm kiếm một chuỗi trong tệp.

grep "search\_term" filename.txt

Tùy chọn:

- i: Không phân biệt chữ hoa chữ thường.
- n: Hiển thị số dòng.
- r: Tìm kiếm đệ quy trong thư mục.

3\. Thay Thế Văn Bản

1. sed

sed là một công cụ dòng lệnh mạnh mẽ để thay thế văn bản trong tệp.

Ví dụ: Thay thế "foo" bằng "bar" trong example.txt: sed -i 's/foo/bar/g' example.txt

1. awk

awk là một ngôn ngữ lập trình cho xử lý văn bản, thường được sử dụng để thay thế và định dạng văn bản.

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

5\.Files/folder permissions: Quyền truy cập (permissions) trên tệp và thư mục (files/folders) trong Linux là một phần quan trọng để đảm bảo an ninh và quản lý người dùng.

1. Kiến Thức Cơ Bản Về Quyền Truy Cập

Mỗi tệp và thư mục trong Linux có ba loại quyền cơ bản:

Read (r): Quyền đọc (được phép xem nội dung).

Write (w): Quyền ghi (được phép thay đổi nội dung).

Execute (x): Quyền thực thi (được phép chạy tệp hoặc truy cập thư mục).

\-----

1. Các Loại Người Dùng

Linux phân chia người dùng thành ba loại:

- Owner (người sở hữu): Người dùng tạo ra tệp hoặc thư mục.
- Group (nhóm): Nhóm người dùng có quyền truy cập chung vào tệp hoặc thư mục.
- Others (người khác): Những người dùng không phải là chủ sở hữu và không thuộc nhóm.

\-----

3\. Cách Kiểm Tra Quyền Truy Cập

Sử dụng lệnh ls -l để xem quyền truy cập của các tệp và thư mục trong một thư mục. ls -l

\-----

4\. Thay Đổi Quyền Truy Cập

1. Sử dụng Ký Tự : Để thay đổi quyền truy cập, sử dụng lệnh chmod. chmod u+rwx,g+rx,o-r filename.txt
1. Sử dụng Số : chmod 754 filename.txt

\-----

5\. Thay Đổi Chủ Sở Hữu và Nhóm

chown newowner:newgroup filename.txt

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

6\.CRUD files/folders

CRUD là một thuật ngữ thường được sử dụng trong quản lý dữ liệu, đại diện cho bốn thao tác cơ bản: Create, Read, Update, và Delete. Dưới đây là hướng dẫn chi tiết về cách thực hiện các thao tác CRUD với tệp và thư mục trong Linux.

1. Create (Tạo)
1. Tạo Tệp

Sử dụng lệnh touch để tạo một tệp mới: touch filename.txt

Hoặc sử dụng lệnh echo để tạo và viết nội dung vào tệp: echo "Hello, World!" > filename.txt

1. Tạo Thư Mục

Sử dụng lệnh mkdir để tạo một thư mục mới: mkdir foldername

2\. Read (Đọc)

1. Đọc Nội Dung Tệp

Sử dụng lệnh cat để xem nội dung của tệp: cat filename.txt

less filename.txt

more filename.txt

3\. Update (Cập Nhật)

1. Cập Nhật Nội Dung Tệp : nano filename.txt

mv oldname.txt newname.txt

4\. Delete (Xóa)

rm filename.txt

rm -f filename.txt

1. Xóa Thư Mục

rmdir foldername

Nếu thư mục không rỗng, bạn có thể sử dụng rm với tùy chọn -r để xóa thư mục và tất cả nội dung bên trong: : rm -r foldername

















