#Kieu du lieu Set trong Python cung khong chua gia tri trung lap
setFruits={"apple","cherry","banana"};
print(setFruits);
#Khong the truy cap cac phan tu trong Set bang cach lap chi muc 
#Vi Set khong luu tru cac phan tu theo thu tu nhap ban dau
#Dung vong lap for de duyet qua mot Set 
x = "apple" in setFruits;
print(x);
#De them mot item vao mot Set, ta dung ham add()
setFruits.add("kiwiw");
print(setFruits);
#De them nhieu item vao mot set, ta dung ham update()
setFruits.update({"cc","sd","sdsa"});
print(setFruits);
#Do dai cua mot Set cung duoc dung la len
#LUU Y LON : SET TRONG PYTHON KHONG DUOC LUU TRU CO THU TU 
set1={"a","b","c"};
set2={"d","e","f"};
# set3=set1+set2;
# print(set3);=> ERROR 
set1.update(set2);
print(set1);