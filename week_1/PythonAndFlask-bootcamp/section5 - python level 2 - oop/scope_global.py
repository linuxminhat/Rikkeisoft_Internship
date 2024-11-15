x="THIS IS GLOBAL LEVEL WILL BE PRINTED ! ";
def checking():
  def checking_indside():
    x="THIS IS ENCLOSING LEVEL WILL BE PRINTED IF NOT COMMENT !"
    print(x);
checking();