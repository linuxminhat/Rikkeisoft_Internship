def my_decorator(function):
  def wrapper():
    print("Hello, my name is");
    function();
    print("Today is a good day !")
  return wrapper;#Tra ve ket qua tham chieu 

#Ham goc 
@my_decorator
def say_hello():
  print("Hello, how are you?");
say_hello();