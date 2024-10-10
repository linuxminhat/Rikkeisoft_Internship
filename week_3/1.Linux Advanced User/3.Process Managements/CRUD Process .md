Quản lý Quy trình (Process Management) trong Linux (DEMO PROJECT WITH C PROGRAMMING LANGUAGE)

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Kiến Thức Về CRUD trong Quản Lý Quy Trình (Process Management) trong Linux

CRUD là từ viết tắt của bốn thao tác cơ bản mà bạn có thể thực hiện trên một đối tượng hoặc tài nguyên, bao gồm:

Create (Tạo): Tạo một quy trình mới.

Read (Đọc): Đọc thông tin về một quy trình đã tồn tại.

Update (Cập nhật): Cập nhật trạng thái hoặc thuộc tính của một quy trình.

Delete (Xóa): Xóa hoặc chấm dứt một quy trình.

\-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

1. Create (Tạo)

Trong Linux, bạn có thể tạo quy trình mới bằng cách sử dụng các lệnh như fork() và exec().

+fork(): Tạo một quy trình con bằng cách nhân bản quy trình hiện tại. Sau khi gọi fork(), quy trình cha và quy trình con sẽ tiếp tục thực thi từ điểm đó

\----------------------------------

pid\_t pid = fork();

if (pid == 0) {

// Đây là quy trình con

} else if (pid > 0) {

// Đây là quy trình cha

}

\----------------------------------

+exec(): Sau khi sử dụng fork(), bạn có thể gọi exec() để thay thế nội dung của quy trình con bằng một chương trình khác.

execl("/bin/ls", "ls", NULL);

1. Read (Đọc)

Để đọc thông tin về các quy trình đang chạy, bạn có thể sử dụng lệnh ps hoặc top.

+ps: Hiển thị thông tin về các quy trình hiện tại, bao gồm PID, TTY, thời gian sử dụng CPU và tên lệnh. ps aux

+top: Cung cấp cái nhìn thời gian thực về các quy trình đang chạy và mức sử dụng tài nguyên của chúng. top

1. Update (Cập nhật)

Cập nhật quy trình có thể bao gồm thay đổi thuộc tính của nó, như ưu tiên (niceness) hoặc trạng thái.

+nice: Được sử dụng để thay đổi mức độ ưu tiên của quy trình khi nó được khởi động. nice -n 10 ./your\_program

+renice: Cập nhật mức độ ưu tiên của quy trình đang chạy.

1. Delete (Xóa)

Để xóa hoặc chấm dứt một quy trình, bạn sử dụng lệnh kill.

+kill: Gửi tín hiệu đến quy trình để chấm dứt nó. Tín hiệu mặc định là SIGTERM, nhưng bạn có thể sử dụng SIGKILL để buộc chấm dứt quy trình.

kill <PID>           # Gửi tín hiệu SIGTERM

kill -9 <PID>       # Gửi tín hiệu SIGKILL

+pkill: Chấm dứt quy trình dựa trên tên hoặc mẫu. pkill firefox

\----------------------------------

DEMO PROJECT :

Sử dụng ngôn ngữ lập trình C để tạo một chương trình cơ bản có sử dụng fork() và exec(). Dưới đây là một ví dụ đơn giản:

- cd /tmp
- nano learning\_process\_example.c
- Code C :

#include <stdio.h>

#include <stdlib.h>

#include <unistd.h>

#include <sys/wait.h>

int main() {

pid\_t pid = fork();  // Tạo một tiến trình con

if (pid == 0) {

// Mã của tiến trình con

printf("This is the child process.\n");

exit(0);

} else if (pid > 0) {

// Mã của tiến trình cha

printf("This is the parent process. Child PID: %d\n", pid);

wait(NULL); // Đợi tiến trình con kết thúc

} else {

// Xử lý lỗi

perror("fork failed");

exit(1);

}

return 0;

}

- Biên Dịch Chương Trình:

gcc -o process\_example learning\_process\_example.c

- Chạy Chương Trình :

./process\_example

