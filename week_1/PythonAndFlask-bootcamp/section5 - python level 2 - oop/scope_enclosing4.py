x="OUTSIDE";
def father_func():
  x="INSIDE";
  def child_func():
    print(x);
  # child_func(); : ham se khong thuc thi neu khong duoc goi 
father_func();