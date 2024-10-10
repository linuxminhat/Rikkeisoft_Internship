Logical partition

\------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Logical partition (phân vùng logic) là một loại phân vùng nằm bên trong một phân vùng mở rộng (extended partition) trên ổ đĩa cứng. Phân vùng logic cho phép bạn vượt qua giới hạn số lượng phân vùng chính (primary partitions) mà một ổ đĩa có thể có. Cụ thể, một ổ đĩa chỉ có thể có tối đa 4 phân vùng chính, nhưng nếu bạn cần nhiều hơn 4 phân vùng, bạn có thể tạo một phân vùng mở rộng, rồi tạo nhiều phân vùng logic bên trong phân vùng mở rộng đó.

Đặc điểm của logical partition:

Nằm trong phân vùng mở rộng: Logical partition không thể tồn tại độc lập, nó phải được tạo bên trong phân vùng mở rộng.

Vượt giới hạn số lượng phân vùng: Giúp vượt qua giới hạn 4 phân vùng chính của ổ đĩa MBR (Master Boot Record).

Dùng cho dữ liệu và hệ điều hành: Phân vùng logic thường được sử dụng cho các phân vùng dữ liệu hoặc để chứa hệ điều hành bổ sung.

Ví dụ:

Một ổ đĩa có thể có 3 phân vùng chính và 1 phân vùng mở rộng. Bên trong phân vùng mở rộng đó, bạn có thể tạo 5 phân vùng logic để lưu trữ thêm dữ liệu hoặc cài đặt hệ điều hành khác.

Việc sử dụng phân vùng logic giúp tăng khả năng phân chia và quản lý dung lượng lưu trữ mà không bị giới hạn bởi 4 phân vùng chính của MBR.
