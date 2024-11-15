# Python coi các lệnh trích dẫn đơn và kép là như nhau. 
# Ví dụ: 'Hello' tương đương với "Hello".
#STRING 
string1 = "hello world ! ";
print(string1);
#SOME FUNCTION 
#strip():loai bo bat ky khoang trang tu dau hoac cuoi cung 
a="   hello world ! "
print(a.strip());
#lower():chuyen chu thuong
b="HELLO WORLD ! "
print(b.lower());
print(a.upper());
#replace() : thay the mot chuoi thanh chuoi khac 
a="hello world ";
print(a.replace("l","m"));
#split(): chia chuoi thanh chuoi con nho hon 
a="hello world Dang Nhat Minh";
print(a.split());
#Kiem tra su ton tai cua chuoi 
string1 = "hoc lap trinh Python "
x="Python";
print(x.islower());
print(x in string1);