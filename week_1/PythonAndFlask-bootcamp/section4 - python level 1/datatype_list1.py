#Cac thao tac co ban tren List trong python 
#Thay doi gia tri item 
fruits=["apple","banana","guava"];
fruits[1]="*orange*";#Gan gia tri o index =1 la *orange*
print(fruits);
#Duyet phan tu cua mot list 
fruits=["apple","banana","guava"];
for x in fruits : 
  print(x);
#Kiem tra su ton tai cua mot item trong list : 
fruits=["apple","banana","guava"];
x = "banana" in fruits;
if(x==True):
  print("Ton tai");
else:
  print("Khong ton tai ");
#Do dai cua mot list trong Python ta dung len()
print(len(fruits));
#Them mot phan tu moi vao list vao cuoi danh sach 
fruits.append("dog");
print(fruits);
#Them mot phan tu moi vao list nhung su dung chi muc 
fruits.insert(2,"doggy");
print(fruits);
#Xoa phan tu khoi list bang remove 
fruits.remove("doggy");
print(fruits);
#Xoa phan tu khoi list bang pop(): Luu y pop() se xoa phan tu cuoi cung 
fruits.pop();
print(fruits);
#Xoa phan tu bang lenh del : Se xoa chi muc 
del fruits[0];
print(fruits);
#Xoa phan tu bang lenh clear : Se xoa het phan tu 
# fruits.clear();
# print(fruits);
fruits2=fruits;
print(fruits2);
fruits.clear();
print(fruits2);
#list2 sẽ chỉ là một tham chiếu đến list1 và những thay đổi trong list1 cũng sẽ tự động được thực hiện trong list2.
#De copy list trong Python ta se su dung phuong thuc copy()
fruits=["apple","banana","guavva"];
list1Copy=fruits;
list2Copy=fruits.copy();
fruits.append("kiwi");
#Noi 2 list trong Python 
#Cach 1 : Dung toan tu + 
list1=["a","b","c"];
list2=[1,2,3,4];
list3=list1+list2;
print(list3);
#Hoac duyet tung phan tu va noi vao danh sach thu nhat 
for item in list2 : 
  list1.append(item);
print(list1);
#Constructor List(): Su dung de tao ra mot danh sach moi 
fruits=list(("banana","guava","orange"));
print(fruits);