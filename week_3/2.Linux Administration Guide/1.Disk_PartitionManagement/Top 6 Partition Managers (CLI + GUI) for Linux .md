Top 6 Partition Managers (CLI + GUI) for Linux

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Tác giả: Aaron Kili - Cập nhật lần cuối: 10 tháng 10, 2023 - Thời gian đọc: 3 phút - Chuyên mục: Công cụ hàng đầu

Bạn đang tìm cách để xử lý phân vùng ổ đĩa hiệu quả trong Linux? Bài viết này sẽ khám phá một số công cụ tốt nhất dành cho người dùng Linux để phân vùng và quản lý đĩa của họ.

Chúng tôi sẽ đề cập đến một loạt giải pháp, bao gồm các tiện ích dòng lệnh và các ứng dụng giao diện người dùng thân thiện (GUI) được thiết kế để đơn giản hóa quy trình quản lý phân vùng đĩa trong môi trường Linux.

Bạn cũng có thể thích:

10 Công cụ giám sát phân vùng đĩa và mức sử dụng trong Linux

3 Công cụ quét đĩa quan trọng trong Linux

8 lệnh Parted để quản lý phân vùng đĩa trong Linux

Cách tạo phân vùng đĩa trong Linux

Tôi thích dòng lệnh hơn GUI (giao diện đồ họa người dùng), vì vậy tôi sẽ bắt đầu bằng cách mô tả các tiện ích dòng lệnh, sau đó là các ứng dụng GUI như sau.

1. Lệnh fdisk

fdisk là một công cụ dòng lệnh đa năng và được sử dụng rộng rãi để tạo và thao tác bảng phân vùng đĩa, hỗ trợ nhiều định dạng bảng phân vùng khác nhau, bao gồm MS-DOS và GPT.

fdisk cung cấp một giao diện dựa trên văn bản, thân thiện với người dùng và có hệ thống menu để hiển thị, tạo, thay đổi kích thước, xóa, sửa đổi, sao chép, và di chuyển các phân vùng trên đĩa.

Để xem danh sách các ổ đĩa và phân vùng có sẵn, bạn có thể sử dụng lệnh sau:

bash

Copy code

$ sudo fdisk -l

fdisk - Liệt kê bảng phân vùng đĩa trong Linux.

Sau đó, chọn đĩa mà bạn muốn quản lý:

bash

Copy code

$ sudo fdisk /dev/sda

fdisk - Quản lý phân vùng đĩa trong Linux.

Khi bạn đã vào fdisk, bạn có thể sử dụng các lệnh sau để thực hiện các tác vụ quản lý phân vùng khác nhau:

p: In bảng phân vùng để xem các phân vùng hiện có.

n: Tạo một phân vùng mới.

d: Xóa một phân vùng.

t: Thay đổi loại phân vùng.

w: Lưu các thay đổi và thoát.

q: Thoát mà không lưu thay đổi.

1. GNU Parted

Parted là một công cụ dòng lệnh phổ biến để quản lý các phân vùng ổ cứng hiệu quả (thêm, xóa, thu nhỏ và mở rộng), hỗ trợ nhiều định dạng bảng phân vùng như MS-DOS, GPT, BSD và nhiều định dạng khác.

Để xem danh sách các ổ đĩa và phân vùng có sẵn, sử dụng lệnh sau:

bash

Copy code

$ sudo parted -l

Parted - Liệt kê các phân vùng đĩa.

Tiếp theo, chọn ổ đĩa bạn muốn quản lý:

bash

Copy code

$ sudo parted /dev/sda

Parted - In bảng phân vùng đĩa.

Khi bạn đã vào parted, bạn có thể sử dụng các lệnh sau để quản lý phân vùng:

print: In bảng phân vùng để xem các phân vùng hiện có.

mkpart: Tạo phân vùng mới.

rm: Xóa phân vùng.

resize: Thay đổi kích thước phân vùng hiện có.

set: Đặt thuộc tính phân vùng.

quit: Thoát parted mà không lưu thay đổi.

Ngoài ra, parted cũng có thể giúp bạn tạo không gian cho việc cài đặt hệ điều hành mới, tổ chức lại việc sử dụng đĩa, và di chuyển dữ liệu sang các ổ cứng mới.

1. GParted

GParted là một trình quản lý phân vùng đĩa đồ họa miễn phí, đa nền tảng và tiên tiến, hoạt động trên các hệ điều hành Linux, Mac OS X, và Windows.

Nó được sử dụng để thay đổi kích thước, sao chép, di chuyển, gán nhãn, kiểm tra, hoặc xóa các phân vùng mà không mất dữ liệu, cho phép bạn mở rộng hoặc thu nhỏ các phân vùng hệ thống gốc, tạo không gian cho các hệ điều hành mới, và cố gắng cứu dữ liệu từ các phân vùng bị mất. GParted có thể thao tác trên các hệ thống tệp bao gồm EXT2/3/4.

GParted - Trình quản lý và chỉnh sửa phân vùng.

1. GNOME Disks (Công cụ đĩa GNOME)

GNOME Disks là một tiện ích hệ thống cốt lõi được sử dụng để quản lý phân vùng đĩa và giám sát S.M.A.R.T. Nó được sử dụng để định dạng và tạo phân vùng trên các ổ đĩa, cũng như gắn kết và tháo gắn các phân vùng. Nó đi kèm với môi trường desktop GNOME nổi tiếng.

Gần đây, GNOME Disks đã có thêm các tính năng cho mục đích sử dụng nâng cao. Phiên bản mới nhất có tính năng thêm và thay đổi kích thước phân vùng, kiểm tra hệ thống tệp xem có hư hỏng không, và sửa chữa chúng.

1. KDE Partition Manager

KDE Partition Manager là một tiện ích đồ họa hữu ích để quản lý các thiết bị đĩa, phân vùng và hệ thống tệp trên máy tính của bạn. Nó đi kèm với môi trường desktop KDE.

Hầu hết các tác vụ chính của nó được thực hiện bởi các chương trình nền. Nó có thể dễ dàng tạo, sao chép, di chuyển, xóa, thay đổi kích thước mà không làm mất dữ liệu, sao lưu và khôi phục các phân vùng. Nó hỗ trợ nhiều hệ thống tệp bao gồm EXT2/3/4, BTRFS, NTFS, FAT16/32, XFS, và nhiều hơn nữa.

KDE Partition Manager.

1. Qtparted

Ngoài ra, bạn cũng có thể sử dụng Qtparted, một bản sao của phần mềm Partition Magic (phần mềm độc quyền dành cho Windows) và là giao diện Qt cho GNU Parted. Lưu ý rằng nó vẫn đang trong quá trình phát triển và bạn có thể gặp phải bất kỳ loại vấn đề nào với phiên bản mới nhất. Trong trường hợp đó, hãy thử sử dụng phiên bản CVS hoặc phiên bản ổn định trước đó.

QTParted - Partition Magic.

Nó có thể không phải là một trong những lựa chọn tốt nhất hiện tại, nhưng bạn có thể thử. Nhiều tính năng mới đang được bổ sung.

Bạn cũng có thể thích đọc các bài viết liên quan sau đây:

1. Công cụ quản lý tình trạng hệ thống tệp EXT2, EXT3 và EXT4 trong Linux.
1. Công cụ quét đĩa hữu ích trong giao diện đồ họa và dòng lệnh.

Cách khôi phục tệp đã xóa hoặc bị mất trong Linux.

Đây là những trình quản lý và trình chỉnh sửa phân vùng tốt nhất có sẵn cho các hệ điều hành Linux. Bạn đang sử dụng công cụ nào? Hãy cho chúng tôi biết qua phần bình luận bên dưới. Cũng cho chúng tôi biết nếu có bất kỳ trình quản lý phân vùng nào khác dành cho Linux mà chúng tôi đã bỏ sót trong danh sách trên.

Nếu có phần nào chưa rõ hoặc bạn muốn tìm hiểu thêm về một công cụ cụ thể, mình sẵn sàng giải thích thêm cho bạn!
