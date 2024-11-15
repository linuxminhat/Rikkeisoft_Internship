# Mô tả GitLab Architecture

GitLab Server => GitLab Runner  
||  
vv  
GitLab Runner  

----

### 1. GitLab Server

Nơi tất cả mã nguồn và database được lưu trữ. Bao gồm:

- **Git Repository**: Nơi mã nguồn được lưu trữ, hoạt động như một git thông thường.
- **CI/CD Pipeline Management**: GitLab Server chịu trách nhiệm quản lý và điều khiển các pipeline CI/CD. Khi bạn đẩy (push) mã nguồn mới vào kho lưu trữ.
- **User Interface (UI)**: Giao diện web.

----

### 2. GitLab Runner

GitLab Runner là thành phần thực thi các job trong pipeline CI/CD.  
Khi một job được kích hoạt, GitLab Server sẽ gửi các job đến GitLab Runner để nó thực hiện.

----

### 3. Mối quan hệ giữa GitLab Server và GitLab Runner

Tương tự như trong mô hình Client-Server.  
GitLab Server đóng vai trò là trung tâm quản lý, còn GitLab Runner là tác nhân thực thi tác vụ.  

- Khi có yêu cầu từ phía người dùng, GitLab Server xử lý yêu cầu và gửi đến GitLab Runner.
- GitLab Runner thực hiện yêu cầu và trả về GitLab Server.

#### Minh họa tổng quan về kiến trúc GitLab:

