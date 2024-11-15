mylist=[1,2,3,4];
mylist.append(5);
#Check type of mylist
print(type(mylist));
#La doi tuong cua lop class list trong Python
class Sampe():
  pass;
  #do nothing 
x=Sampe();
print(type(x));
class Dog():
  def __init__(self,breed):
    self.breed=breed;
x=Dog('lab');
print(x.breed);