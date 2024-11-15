#list trong python la mutable 
#list trong python KHONG sap xep theo thu tu tang dan
my_list=[1,3,253,1, ];
my_list2=[1,3,253,1,'2',"DangNhatMinh"];
# print(list);
# print(list[0]);
my_list.sort();#Phuong thuc sort yeu cau cung co kieu du lieu !
print(my_list);
print(len(my_list));
print(my_list[0:2:1]);
print(my_list[0:3:1]);
print(my_list[0:4:1]);
my_list.append(2810);
print(my_list);
my_list.append(2810);
print(my_list);
#Phuon thuc append trong python tra ve gia tri none ! 
print(my_list.append(2910));
my_list.insert(0,301);
print(my_list);
print(my_list.insert(0,301))
print(my_list.pop(0));
print(my_list.pop());
my_list1=[0,1,2];
my_list2=[3,4,5];
my_list3=[6,7,8];
mega_list=[my_list1,my_list2,my_list3];
print(mega_list[2][1]);
"""
[
  [0, 1, 2],  # my_list1
  [3, 4, 5],  # my_list2
  [6, 7, 8]   # my_list3
]=> MANG 2 CHIEU 
"""