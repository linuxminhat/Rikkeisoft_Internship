- `npm install -g gatsby-cli`
- **ERROR when running static-website**:  
"Windows PowerShell có cơ chế Execution Policy nhằm bảo vệ người dùng khỏi việc chạy các script không an toàn. Theo mặc định, chính sách này thường được đặt là **Restricted**, tức là ngăn không cho chạy bất kỳ script nào trên hệ thống."

**Cách khắc phục**:
1. **Bước 1**: Kiểm tra chính sách thực thi hiện tại: `Get-ExecutionPolicy`
2. **Bước 2**: Thay đổi chính sách thực thi: `Set-ExecutionPolicy RemoteSigned`
3. **Bước 3**: Xác nhận thay đổi

- `gatsby new static-website`
- `cd static-website`
- `gatsby develop`  
  => Chương trình sẽ khởi động máy chủ cục bộ!
- `gatsby build`

-----

### Why do jobs fail?

- After a command is executed it will return an "exit status":
  - **0**: Success
  - **1-255**: Unsuccessful

-----

### alpine : lightweight distribution Linux
-----

### deployment using surge.sh 
npm install --global surge
surge
thay đổi tên miền : dangnhatminhrikkei.surge.sh

