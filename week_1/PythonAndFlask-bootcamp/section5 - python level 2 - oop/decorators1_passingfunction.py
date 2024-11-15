def hello():
  return "Hi DangNhatMinh!";
def other(func):
  print("Some other code !");
  #Assume that func passed in is a function ! 
  print(func());
other(hello);
 