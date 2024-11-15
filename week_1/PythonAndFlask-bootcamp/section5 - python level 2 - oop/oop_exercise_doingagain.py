class BankAccount():
  #let me write it byself 
  def __init__(self,account_user,account_number):
    self.account_user=account_user;
    self.account_number=account_number;
  def withdraw(self,withdraw_money):
    if withdraw_money>self.account_number:
      print("insufficient balance");
    else:
      self.account_number=self.account_number-withdraw_money;
      print("withdraw successfully ! The money you withdraw is : ",withdraw_money);
  def deposit(self,deposit_money):
    self.account_number=self.account_number+deposit_money;
    print("deposit successfully !");
my_bank = BankAccount("DangNhatMinh",5);
my_bank.withdraw(3);

