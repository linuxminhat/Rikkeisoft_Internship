#Enclosing : Pham vi bao quanh,chua cac bien trong cac ham ngoai vi 
#=> bao quanh ham hien tai ! 
x="THIS IS GLOBAL LEVEL";
def enclosing():
  x="ENCLOSING LEVEL";
  def inside():
    print(x);
  inside();
enclosing();
#QUY TAC LEGB : L => E => G => B 

