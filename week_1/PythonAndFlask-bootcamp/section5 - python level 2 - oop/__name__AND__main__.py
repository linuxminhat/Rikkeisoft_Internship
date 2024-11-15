"""
Trong Python, __name__ và "__main__" thường được sử dụng trong điều kiện if __name__ == "__main__": để kiểm tra xem một module có được chạy trực tiếp hay không. 
Đây là cách mà Python phân biệt giữa khi một module được chạy như một script chính và khi nó được import từ một module khác.

"""
"""
__name__:
__name__ là một biến đặc biệt trong Python. Nó lưu trữ tên của module hiện tại.

Khi một module được chạy trực tiếp (tức là từ command line hoặc IDE), __name__ sẽ được gán giá trị "__main__".

Khi một module được import vào một module khác, __name__ sẽ chứa tên của module đó (tức là tên file của module mà không có phần mở rộng .py).

"""
"""
"__main__":
"__main__" là một chuỗi ký tự đặc biệt trong Python. Nó được sử dụng trong điều kiện if __name__ == "__main__": để kiểm tra xem module có được chạy trực tiếp không.

Khi một module được chạy trực tiếp, điều kiện if __name__ == "__main__": sẽ trở thành True, và mã trong khối điều kiện này sẽ được thực thi.

Khi module đó được import vào một module khác, điều kiện if __name__ == "__main__": sẽ trở thành False, và mã trong khối điều kiện này sẽ không được thực thi.

"""

