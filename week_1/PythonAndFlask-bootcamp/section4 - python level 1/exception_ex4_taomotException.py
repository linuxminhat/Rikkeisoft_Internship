#Nem tuong minh mot Exception trong Python boi su dung lenh raise
#Cu phap : raise [Exception[,args]]
try : 
  a=10;
  print(a);
  raise NameError("Hello");
except NameError as e : 
  print("Exception xuat hien ! ");
  print(e);
"""
GIAI THICH : 
Khi raise duoc goi, Python se dung thuc thi doan ma hien tai va 
-> chuyen sang khoi except de xu ly ngoai le do !
Cau lenh nay co the duoc su dung de nem ngoai le moi 
-> hoac de tai nem mot ngoai le da xay ra 

"""