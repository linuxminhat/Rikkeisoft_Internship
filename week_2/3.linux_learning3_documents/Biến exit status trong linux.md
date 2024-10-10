Trong Linux, $? là một biến đặc biệt chứa exit status (mã thoát) của lệnh vừa thực thi trước đó.

Nếu lệnh trước thực hiện thành công, $? sẽ có giá trị 0.

Nếu lệnh trước thất bại, $? sẽ chứa một giá trị khác 0 (thường là số nguyên dương).

Ví dụ:

bash

Copy code

ls /home  # Lệnh thực hiện thành công

echo $?   # Sẽ in ra 0

ls /folder\_khong\_ton\_tai  # Lệnh thất bại vì folder không tồn tại

echo $?   # Sẽ in ra giá trị khác 0 (thường là 2 hoặc 1)

Biến $? rất hữu ích khi bạn cần kiểm tra trạng thái của một lệnh sau khi nó được thực thi trong shell scripting hoặc khi xử lý lỗi.
