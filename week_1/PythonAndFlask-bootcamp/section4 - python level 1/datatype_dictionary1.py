#LUU Y : KEY DA TRUYEN CHO ITEM PHAI LA GIA TRI DUY NHAT 
#VALUE CO THE LA BAT KI GIA TRI NAO 
dictCar={"brand":"Honda","price":5};
print(dictCar);
#TRUY CAP CAC ITEM CUA DICTIONARY TRONG PYTHON 
dictBike={"brand":"wave","price":20,"admin":"DangNhatMinh"};
print(dictBike["brand"]);
print(dictBike["price"]);
print(dictBike["admin"]);
print(dictBike.get("model"));
#Thay doi gia tri cua mot Dictionary trong Python bang tu khoa 
dictCar["brand"]="AB";
print(dictCar["brand"]);
#Duyet cac item cua Dictionary trong Python bang for 
for x in dictCar:
  print(x);
#Kiem tra neu key ton tai hay chua, ta dung tu khoa in 
if "model" in dictCar:
  print("Key 'model' found");
else:
#Do dai ta dung len()
  print(len(dictCar));
#Xoa item cua Dictionary 
#Xoa ham pop() : xoa item duoc chi dinh
dictCar.pop("brand");
print(dictCar);
#Xoa item cua Dictionary bang ham popitem()
dictCar.popitem();
print(dictCar);#TRONG KHONG ! 
#Clear : xoa toan bo item trong Dictionary 
#De copy trong Python ta dung ham copy()
dictCar={"brand":"Honda","price":5};
dictCar1=dictCar;
dictCar2=dictCar.copy();
dictCar["Color"]="yellow";
print(dictCar1);#Co them color vao 
print(dictCar2);#Khong co them color vao 
#Dictionary long nhau 
my_family={"child1":{"name":"DangNhatMinh","age":"20"}};
print(my_family);