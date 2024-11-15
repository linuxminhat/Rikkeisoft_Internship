#Kieu du lieu Tuple trong Python la mot collection co thu tu 
#Khong the thay doi 
#Chua du lieu trung lap van duoc 
#Tuple su dung dau ngoac don
fruits=("apple","banana","guava");
print(fruits);
#Cac tuple long nhau 
tuple1=("apple","banana","guava");
tuple2=("kiwi","cherry");
fruits=(tuple1,tuple2);
print(fruits);
#Chi muc am 
print(fruits[-1]);
print(tuple1[0:3]);
#Tuple la bat bien nen ban khong the thay doi gia tri ! 
#Kiem tra xem gia tri ton tai Tuple khong dung in 
fruits=("apple","banana","cherry");
x="banana"in fruits;
print(x);
#Tao Tuple voi duy nhat 1 gia tri thi co dau phay o cuoi 
tuple1=("apple");
print(type(tuple1));
#Xoa phan tu Tuple trong Python : Vi Tuple khong doi, nen ban khong the xoa 1 phan tu 
#Tuy nhien, ban co the xoa hoan toan 
fruits=("apple","banana","cherry");
del fruits;
print(fruits);
