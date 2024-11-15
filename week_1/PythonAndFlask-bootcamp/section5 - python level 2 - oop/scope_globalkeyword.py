x="global";
def outside():
  global x;
  x="local";
  def inside():
    print(x);
  inside();
outside();
print(x);