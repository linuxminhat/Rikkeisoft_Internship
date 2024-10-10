COMMAND-LINE INTERFACE : HELP COMMAND / OPTION

\----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Đường dẫn tương đối chỉ có ý nghĩa khi bạn ở trong một thư mục gần với file mà bạn muốn truy cập. Ví dụ, nếu bạn ở thư mục /home/user, bạn có thể sử dụng đường dẫn tương đối như Documents/report.txt để truy cập file report.txt.

\----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Trong Linux, đường dẫn (path) là cách mà bạn xác định vị trí của một file hoặc thư mục trong hệ thống file. Có hai loại đường dẫn chính: Relative Path (Đường dẫn tương đối) và Absolute Path (Đường dẫn tuyệt đối).

1. Absolute Path (Đường dẫn tuyệt đối)

Đường dẫn tuyệt đối là đường dẫn bắt đầu từ thư mục gốc (root) /, và nó mô tả chính xác vị trí của một file hoặc thư mục từ thư mục gốc này.

Cấu trúc của đường dẫn tuyệt đối luôn bắt đầu bằng dấu /.

Ví dụ:

/home/user/Documents/report.txt

/var/www/html/index.html

1. Relative Path (Đường dẫn tương đối)

Đường dẫn tương đối là đường dẫn được xác định dựa trên vị trí hiện tại của bạn trong hệ thống file.

Không bắt đầu bằng dấu /, mà dựa vào vị trí thư mục hiện tại.

Một số ký hiệu đặc biệt:

. (dấu chấm): đại diện cho thư mục hiện tại.

.. (hai dấu chấm): đại diện cho thư mục cha của thư mục hiện tại.

Ví dụ:

Nếu bạn đang ở trong thư mục /home/user và muốn truy cập file report.txt trong thư mục Documents, bạn chỉ cần dùng đường dẫn tương đối: Documents/report.txt.

Nếu bạn muốn đi lên một cấp và truy cập thư mục other\_folder trong /home, dùng: ../other\_folder.

Sự khác nhau giữa Absolute và Relative Path:

Absolute Path luôn cung cấp vị trí chính xác của file hoặc thư mục bất kể bạn đang ở đâu trong hệ thống file.

Relative Path phụ thuộc vào vị trí hiện tại của bạn.

Ví dụ minh họa:

Giả sử bạn đang ở thư mục /home/user:

Absolute Path:

bash

Copy code

/home/user/Documents/report.txt

(Dù bạn đang ở đâu, đây luôn là cách chính xác để truy cập file report.txt).

Relative Path:

bash

Copy code

Documents/report.txt

(Bạn chỉ có thể dùng đường dẫn này nếu bạn đang ở trong /home/user).

Cách sử dụng trong một số lệnh:

cd: Chuyển thư mục.

Đường dẫn tuyệt đối:

bash

Copy code

cd /home/user/Documents

Đường dẫn tương đối (nếu đang ở /home/user):

bash

Copy code

cd Documents

cp: Sao chép file.

Đường dẫn tuyệt đối:

bash

Copy code

cp /home/user/file.txt /tmp/

Đường dẫn tương đối (nếu đang ở /home/user):

bash

Copy code

cp file.txt ../

Sử dụng đúng loại đường dẫn sẽ giúp bạn dễ dàng hơn khi làm việc với file và thư mục trong Linux.
