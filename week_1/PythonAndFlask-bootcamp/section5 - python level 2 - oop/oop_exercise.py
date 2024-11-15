class BankAccount():
  def __init__(self,owner,balance):
    self.owner=owner;#Minh
    self.balance=balance;#5 million
  def withdraw(self,withdraw_money):
    if(withdraw_money>self.balance):
      print("Withdrawal failed");
    else:
      print("Your withdraw_money",withdraw_money);
  def deposit(self,deposit_money):
    self.balance+=deposit_money;
    print("your money now",self.balance);
account = BankAccount("Minh", 5000000);
account.withdraw(1000000);
account.deposit(500000);