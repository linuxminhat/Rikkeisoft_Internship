#scope 
x='outside';
def report():
  x='inside'
  return x;
print(report());
print(x);
#LEGB RULE : 
#LOCAL 
#ENCLOSING
#GLOBAL 
#BUILT IN : ex : len() function 

