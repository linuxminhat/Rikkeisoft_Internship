x="GLOBAL VAR";

def enclosing() : 
    x="ENCLOSING VAR";
    def inside():
      print(x);
    inside();
enclosing();