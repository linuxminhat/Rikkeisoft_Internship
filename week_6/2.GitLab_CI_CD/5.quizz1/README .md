1. **YAML là "A data serialization used by GitLab CI"**:  
Data serialization là ngôn ngữ tuần tự hóa dữ liệu.  
=> Điều này có nghĩa YAML được thiết kế lưu trữ và truyền tải dữ liệu dễ đọc cho con người và dễ xử lý cho máy tính.  

**NOTE**: YAML **không phải** là "Markup Language".  

**FUN FACT**: YAML ban đầu là "Yet Another Markup Language", sau đó được đổi tên thành: "YAML Ain't Markup Language".  
2. Nếu không được chỉ định, một job trong Gitlab CI được gán giai đoạn test 
=> Trong gitlab ci, các giai đoạn mặc định trong pipleline được mô tả là : build, test, deploy 
=> Khi không chỉ định giai đoạn trong job bằng từ khóa stage, GITLAB CI được gán job đó vào giai đoạn test 
Ví dụ :
job_name:
  script:
    - echo "Đây là một job"
Không có stage nào chỉ định nên gán vào giai đoạn test
