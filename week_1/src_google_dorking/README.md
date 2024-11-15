### Template: JINJA2

### Backend: Python/Flask

- **IDE tốt nhất để chạy**: PyCharm Pro.

  Cách chạy: Import thư mục vào => Chạy biến môi trường Flask (có sẵn)

- **IDE khác**: Visual Studio Code

### 1/ Cài đặt Python

### 2/ Thiết lập môi trường ảo (virtual environment)

    Tạo môi trường ảo bằng lệnh: 
    ```
    python -m venv venv
    ```

    Kích hoạt môi trường ảo: 
    - **Windows**: 
    ```
    venv\Scripts\activate
    ```

### 3/ Cài đặt Flask và Jinja2

### 4/ Cài đặt Flask bằng lệnh:

    ```
    pip install Flask
    ```

    Để kiểm tra xem Flask và Jinja2 đã được cài đặt chưa, sử dụng lệnh:

    ```
    pip show Flask Jinja2
    ```

### COMMENT
- **NOTE**: Saving file `.env` in `.gitignore`
- **Cây thư mục**:  
- **Thiết lập môi trường trong file `.env`**:  
```bash
pip install python-dotenv
