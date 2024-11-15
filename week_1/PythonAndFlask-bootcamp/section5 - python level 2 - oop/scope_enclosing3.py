x="GLOBAL";
def father_func():
  x="ENCLOSING";
  def child_func():
    print(x);
  child_func();
father_func();