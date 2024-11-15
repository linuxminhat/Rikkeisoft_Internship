"""
Decoratos allow you to "decorate" a function
"""
# def simple_func():
#   #do simple stuff 
#   #return something 
def hello(name="DangNhatMinh") : 
  print("the hello function has been run");
  def greet():
    return "       this is inside the greet()";
  # print(greet());
  def welcome():
    return "       this is inside welcome()";
  # print(welcome());
  if(name=="DangNhatMinh"):
    return greet;
  else:
    return welcome();

x=hello();
print(x());