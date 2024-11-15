class Book():
  def __init__(self,title,author,pages):
    self.title=title;
    self.author=author;
    self.pages=pages;
  def __repr__(self):
    return f'{self.title} by {self.author}, {self.pages} pages';
  def __len__(self):
    return self.pages;
mybook=Book("Python","Minh",1000);
print(mybook);
print(len(mybook));
#repr : lay chuoi dai dien chinh thuc cua doi tuong 
