"""
Trong Python, decorator là một hàm được sử dụng để thay đổi hành vi của một hàm hoặc phương thức khác mà không cần thay đổi mã nguồn của hàm/method đó.
Nó là một thiết kế phổ biến trong lập trình Python để thêm chức năng vào hàm một cách dễ dàng và linh hoạt.

"""
"""
1/Decorator là một hàm nhận một hàm khác làm tham số đầu vào
2/Decorator trả về một hàm khác
3/Sử dụng cú pháp @decorator_name
"""
#This is design for decorator ! 
def my_decorator(func):
  def wrapper():
    print("Thuc hien hanh dong truoc khi chay ham !");
    # func();#Goi ham goc 
    print("Thuc hien hanh dong sau khi chay ham ! ");
    func();#Goi ham goc 
  return wrapper;#Tra ve ket qua tham chieu 
@my_decorator
def say_hello():
  print("xinchao!");
say_hello();
