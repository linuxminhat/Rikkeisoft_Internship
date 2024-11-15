"""
Để tạo lớp con (subclass) từ lớp cha (parent class), bạn chỉ cần truyền tên lớp cha vào trong dấu ngoặc khi định nghĩa lớp con.
"""
class Animal():
  def __init__(self,name,color,animal_size):
    self.name = name;
    self.color=color;
    self.animal_size=animal_size;
my_animal=Animal("QuangNhut","Yellow","70kg");
print(my_animal.name);
print(my_animal.color);
class Dog(Animal):
  def __init__(self):
    print("Dog Created");
my_animal_dog=Dog();
