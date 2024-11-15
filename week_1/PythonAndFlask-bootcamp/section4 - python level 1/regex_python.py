"""
LY THUYET : 
Bieu thuc chinh quy(Regular Expressions) hay Regex trong Python
-> co the duoc dinh nghia la chuoi cac ki tu duoc su dung de 
-> tim kiem mot mau trong chuoi
Module Regex cung cap ho tro de su dung regex trong Python
Module Regex ban ra mot ngoai le neu co loi xay ra khi dung 
-> bieu thuc chinh quy

"""
import re  
text  = "Xin chào Bạn! Bạn đang học bài Regex trong Python." 
matches = re.findall("Bạn", text) ;
print(matches);