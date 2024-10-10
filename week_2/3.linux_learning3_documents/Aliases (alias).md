132\. Aliases (alias)

Trong Linux, alias là một cách tạo tên tắt hoặc bí danh cho các lệnh dài hoặc phức tạp, giúp bạn sử dụng chúng dễ dàng hơn. Alias thường được sử dụng để tạo lệnh ngắn gọn cho những lệnh mà bạn thường xuyên sử dụng, hoặc để thay đổi hành vi mặc định của một lệnh.

Cách sử dụng alias:

1. Tạo alias:

Bạn có thể tạo một alias bằng lệnh alias theo cú pháp sau:

bash

Copy code

alias <tên-bí-danh>='<lệnh-gốc>'

Ví dụ:

bash

Copy code

alias ll='ls -la'  # Tạo alias 'll' để thay cho 'ls -la'

Bây giờ, khi bạn gõ ll, hệ thống sẽ chạy lệnh ls -la.

1. Kiểm tra alias hiện có:

Để xem danh sách các alias hiện tại, bạn dùng lệnh:

bash

Copy code

alias

1. Xóa alias:

Nếu bạn muốn loại bỏ một alias, sử dụng lệnh unalias:

bash

Copy code

unalias <tên-bí-danh>

Ví dụ:

bash

Copy code

unalias ll  # Xóa alias 'll'

1. Lưu alias vĩnh viễn:

Alias được tạo bằng lệnh alias chỉ tồn tại trong phiên làm việc hiện tại. Để lưu alias vĩnh viễn, bạn cần thêm nó vào file cấu hình như .bashrc (hoặc .bash\_profile, tùy shell bạn sử dụng):

Mở file .bashrc:

bash

Copy code

nano ~/.bashrc

Thêm dòng alias vào:

bash

Copy code

alias ll='ls -la'

Lưu file và thoát, sau đó nạp lại cấu hình:

bash

Copy code

source ~/.bashrc

Kết Luận:

Alias là cách hữu ích để đơn giản hóa và tăng tốc quá trình sử dụng các lệnh dài trong Linux. Chúng có thể được tùy chỉnh theo nhu cầu và giúp công việc trên terminal hiệu quả hơn.
