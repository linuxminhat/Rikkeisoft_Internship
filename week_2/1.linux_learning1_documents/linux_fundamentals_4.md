LINUX FUNDAMENTALS 4

\----------------------

Hai câu lệnh cat > findpath và cat < findpath đều liên quan đến việc điều hướng đầu vào và đầu ra trong Linux, nhưng chúng có chức năng rất khác nhau. Dưới đây là sự khác biệt giữa chúng:

cat > findpath

Chức năng:

Câu lệnh này được sử dụng để ghi dữ liệu vào một tệp.

Khi bạn chạy cat > findpath, cat chờ bạn nhập dữ liệu từ bàn phím. Bạn có thể nhập nội dung mà bạn muốn lưu vào tệp findpath.

Sau khi bạn đã nhập dữ liệu, bạn có thể nhấn Ctrl + D (trên Unix-like systems) để kết thúc nhập liệu và ghi dữ liệu vào tệp findpath.

Hành động:

Dữ liệu nhập vào từ bàn phím sẽ được ghi vào tệp findpath. Nếu tệp findpath đã tồn tại, nó sẽ bị ghi đè (overwrite) bởi dữ liệu mới.

cat < findpath

Chức năng:

Câu lệnh này được sử dụng để đọc và hiển thị nội dung của một tệp.

Khi bạn chạy cat < findpath, cat sẽ đọc dữ liệu từ tệp findpath và hiển thị nội dung của tệp đó ra màn hình (standard output).

Hành động:

Dữ liệu được lấy từ tệp findpath và được gửi đến đầu ra tiêu chuẩn (standard output), thường là màn hình của bạn. Tệp findpath không bị thay đổi trong quá trình này.

Tóm tắt

cat > findpath:

Ghi dữ liệu từ bàn phím vào tệp findpath.

Nếu tệp đã tồn tại, nó sẽ bị ghi đè.

cat < findpath:

Đọc dữ liệu từ tệp findpath và hiển thị nội dung của tệp đó trên màn hình.

Hy vọng sự giải thích này giúp bạn hiểu rõ sự khác biệt giữa hai câu lệnh. Nếu bạn cần thêm thông tin nào khác, đừng ngần ngại hỏi!

\----------------------

STANDARD OUTPUT TO A FILE (TEE)

"tee" command is used to store and view (both at the same time) the output of any command

Lệnh tee trong Linux được sử dụng để chuyển hướng đầu ra của một lệnh (standard output) đến một tệp đồng thời vẫn hiển thị đầu ra đó trên màn hình.

Đây là một công cụ hữu ích khi bạn muốn lưu lại kết quả của một lệnh vào tệp trong khi vẫn xem nó trực tiếp trong terminal.

Cách hoạt động của tee

Chạy lệnh và hiển thị đầu ra:

Khi bạn chạy một lệnh và sử dụng tee, lệnh sẽ ghi đầu ra vào một tệp và đồng thời xuất đầu ra đó ra màn hình.

Lưu đầu ra vào tệp:

tee nhận đầu ra từ lệnh mà bạn đã chỉ định, sau đó ghi đầu ra đó vào tệp được chỉ định.

EX :

Giả sử bạn muốn thực hiện lệnh ls -l để liệt kê các tệp và thư mục trong thư mục hiện tại và đồng thời lưu danh sách này vào tệp listings.txt, bạn có thể sử dụng:

ls -l | tee listings.txt

FLOW :

COMMAND =>  TEE => STDOUT

`			`||

`			`VV

`			`FILE
