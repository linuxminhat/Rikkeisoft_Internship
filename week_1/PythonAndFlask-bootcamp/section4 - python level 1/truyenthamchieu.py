#Trong python, tat ca cac tham so duoc truyen tham chieu 
def changeme(mylist):
  "thay doi list truyen cho ham nay";
  mylist.append([1,2,3,4,5]);
  print("Cac gia tri ben trong ham la ", mylist);
#ham nay se thay doi gia tri cua list truyen vao
  return;
mylist=[10,20,30];
changeme(mylist);
print("Cac gia tri ben ngoai ham la ",mylist);
#Truyen tham chieu : Pass by Reference 
#Khi mot bien duoc truyen tham chieu, tat cac thay doi nao 
#-> voi bien ben trong ham se anh huong truc tiep bien ban dau 
#VI DU 2 : 
def modify_list(my_list):
  my_list.append(10);
  print("Danh sach ben trong ham",my_list);
my_list=[1,2,3];
modify_list(my_list);#Danh sach ben trong ham => 
print("Danh sach sau khi goi ham",my_list);
#LUU Y : CAC DOI TUONG HANH XU SE PHU THUOC VAO LIEU NO CO MUTABLE HAY IMMUTABLE 
#TOM LAI : TRUYEN THAM CHIEU : HAM NHAN THAM CHIEU DEN DOI TUONG GOC, THAY DOI TRONG HAM ANH HUONG NGOAI HAM 
