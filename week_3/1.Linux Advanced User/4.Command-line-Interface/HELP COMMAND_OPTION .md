COMMAND-LINE INTERFACE : HELP COMMAND / OPTION

\----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

\1. man (Manual Page)

Lệnh man hiển thị hướng dẫn chi tiết về một lệnh. Cấu trúc:

bash

Copy code

man <tên\_lệnh>

Ví dụ, để xem hướng dẫn của lệnh ls:

bash

Copy code

man ls

2\. --help Option

Hầu hết các lệnh Linux đều hỗ trợ tùy chọn --help để hiển thị thông tin nhanh về cú pháp và các tùy chọn của lệnh đó.

bash

Copy code

<tên\_lệnh> --help

Ví dụ:

bash

Copy code

ls --help

Lệnh này sẽ cung cấp danh sách các tùy chọn có thể sử dụng cùng với ls.

3\. info Command

Lệnh info cung cấp tài liệu chi tiết hơn về một số lệnh.

bash

Copy code

info <tên\_lệnh>

Ví dụ:

bash

Copy code

info ls

4\. help Command (Built-in Bash Commands)

Lệnh help thường được dùng cho các lệnh nội tại (built-in commands) của bash. Nó liệt kê tất cả các lệnh nội tại hoặc cung cấp thông tin chi tiết về một lệnh nội tại cụ thể.

bash

Copy code

help <tên\_lệnh>

Ví dụ:

bash

Copy code

help cd

5\. apropos (Search Manual Pages)

Lệnh apropos tìm các lệnh liên quan đến một từ khóa nào đó, rất hữu ích khi bạn không nhớ chính xác tên lệnh.

bash

Copy code

apropos <từ\_khóa>

Ví dụ:

bash

Copy code

apropos copy

6\. whatis

Lệnh whatis cung cấp mô tả ngắn gọn về một lệnh.

bash

Copy code

whatis <tên\_lệnh>

Ví dụ:

bash

Copy code

whatis ls

Những lệnh trên giúp bạn dễ dàng tra cứu và sử dụng các lệnh trong Linux một cách hiệu quả hơn.
