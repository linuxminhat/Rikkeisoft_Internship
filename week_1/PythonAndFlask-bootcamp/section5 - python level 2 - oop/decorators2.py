def new_decorator(func):
  def wrap_func():
    print("Some code before executing func()");
    func();
    print("Code here,after executing func()");
  return wrap_func;
def func_needs_decorator():
  print("func_needs_decorator() is running");
func_needs_decorator=new_decorator(func_needs_decorator);
