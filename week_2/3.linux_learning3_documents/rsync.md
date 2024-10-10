
Chủ đề: rsync - Remote Synchronization (Đồng bộ từ xa)

rsync là một công cụ mạnh mẽ và hiệu quả trong Linux để đồng bộ hóa tệp và thư mục giữa các hệ thống cục bộ và từ xa. Nó sử dụng thuật toán đồng bộ hóa thông minh để chỉ truyền những phần thay đổi của tệp tin, giúp tiết kiệm băng thông và tăng tốc quá trình truyền tải. rsync cũng có thể kết hợp với SSH để đảm bảo việc truyền tệp an toàn.

1. Cách hoạt động của rsync

rsync hoạt động bằng cách so sánh tệp tin giữa nguồn và đích. Nó chỉ truyền các thay đổi trong tệp thay vì toàn bộ tệp, điều này làm cho rsync rất nhanh và hiệu quả, đặc biệt là khi đồng bộ dữ liệu lớn.

1. Cú pháp cơ bản của rsync

bash

Copy code

rsync [tùy chọn] <nguồn> <đích>

nguồn: Đường dẫn tới tệp hoặc thư mục cần đồng bộ (có thể là trên máy cục bộ hoặc máy từ xa).

đích: Đường dẫn tới vị trí cần sao chép đến (có thể là trên máy cục bộ hoặc máy từ xa).

1. Các tùy chọn phổ biến với rsync
- r: Đệ quy, để đồng bộ toàn bộ thư mục và các thư mục con.
- a: Chế độ lưu trữ (archive), giữ nguyên quyền truy cập, thời gian tạo, liên kết tượng trưng, và các thuộc tính khác.
- v: Chế độ hiển thị chi tiết, giúp theo dõi quá trình đồng bộ hóa.
- z: Bật tính năng nén dữ liệu trong khi truyền, giúp tăng tốc khi truyền qua mạng.
- P: Hiển thị tiến trình và cho phép tiếp tục đồng bộ hóa nếu quá trình bị ngắt.
- e: Xác định giao thức kết nối, thường dùng với SSH để bảo mật.

4\. Các tình huống sử dụng phổ biến của rsync

Sao chép tệp hoặc thư mục trên máy cục bộ

Sao chép một thư mục từ vị trí này đến vị trí khác trên cùng máy tính:

bash

Copy code

rsync -av /path/to/source/ /path/to/destination/

Đồng bộ tệp giữa máy cục bộ và máy từ xa

Sao chép thư mục từ máy cục bộ lên máy từ xa qua SSH:

bash

Copy code

rsync -avz -e ssh /path/to/source/ user@remote:/path/to/destination/

Đồng bộ tệp từ máy từ xa về máy cục bộ

Sao chép dữ liệu từ máy chủ từ xa về máy cục bộ:

bash

Copy code

rsync -avz -e ssh user@remote:/path/to/source/ /path/to/local/destination/

Đồng bộ hóa một thư mục với tiếp tục nếu bị ngắt

Nếu chị đang sao chép dữ liệu lớn và muốn tiếp tục từ nơi đã dừng lại nếu quá trình bị ngắt, sử dụng tùy chọn --partial:

bash

Copy code

rsync -avz --partial --progress /path/to/source/ user@remote:/path/to/destination/

Xóa tệp trên đích không còn trong nguồn

Nếu chị muốn đồng bộ hóa và xóa các tệp trên đích mà không còn tồn tại trong thư mục nguồn, sử dụng tùy chọn --delete:

bash

Copy code

rsync -avz --delete /path/to/source/ user@remote:/path/to/destination/

5\. Ví dụ thực tế

Sao chép toàn bộ thư mục cục bộ lên máy chủ từ xa:

bash

Copy code

rsync -avz /home/user/myfolder/ user@192.168.1.10:/home/remoteuser/

Đồng bộ hóa một thư mục từ máy từ xa về máy cục bộ:

bash

Copy code

rsync -avz user@192.168.1.10:/home/remoteuser/myfolder/ /home/localuser/

Đồng bộ hóa với việc xóa tệp không còn trong nguồn:

bash

Copy code

rsync -avz --delete /home/user/source/ user@192.168.1.10:/home/remoteuser/destination/

6\. Lợi ích của rsync

Hiệu quả: Chỉ truyền phần thay đổi của tệp, giúp tiết kiệm băng thông và thời gian.

An toàn: Khi sử dụng với SSH, việc truyền tệp được mã hóa và bảo mật.

Tiếp tục quá trình truyền tải: Có thể tiếp tục đồng bộ hóa từ nơi bị ngắt nếu gặp sự cố.

Đồng bộ hóa chính xác: Giữ nguyên quyền truy cập, ngày tạo, và các thuộc tính tệp.

Kết luận

rsync là một công cụ mạnh mẽ và linh hoạt cho việc đồng bộ hóa dữ liệu cục bộ và từ xa. Nhờ tính năng chỉ truyền tải những phần thay đổi của tệp, rsync giúp tăng hiệu quả khi đồng bộ hóa, đặc biệt với các tập dữ liệu lớn.
