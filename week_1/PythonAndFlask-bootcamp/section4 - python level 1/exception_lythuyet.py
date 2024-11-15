"""
Exception là gì?
Ngoại lệ có thể là bất kỳ điều kiện bất thường nào trong chương trình mà phá vỡ luồng thực thi chương trình đó. Bất cứ khi nào một ngoại lệ xuất hiện, mà không được xử lý, thì chương trình ngừng thực thi và vì thế code không được thực thi.

Python đã định nghĩa sẵn rất nhiều ngoại lệ, mà đã được trình bày trong chương Standard Exception. Trong chương này chúng ta sẽ tìm hiểu cách xử lý ngoại lệ cũng như cách tạo các Custom Exception như thế nào.
"""
"""
CU PHAP : 
try:
   Ban thuc hien cac hoat dong cua minh tai day;
   Va day la phan code co the tao exception;
   ......................
except ExceptionI:
   Neu co ExceptionI, thi thuc thi khoi code nay
except ExceptionII:
   Neu co ExceptionII, thi thuc thi khoi code nay
   ......................
else:
   Neu khong co exception nao thi thuc thi khoi code nay 

"""
"""
MENH DE EXCEPT MA KHONG XAC DINH EXCEPTION TRONG PYTHON : 
Lenh Except cung co the duoc su dung ma khong xac dinh exception nao

"""
"""
MENH DE EXCEPT VOI NHIEU EXCEPTION TRONG PYTHON :
CU PHAP : 
try:
   Ban thuc hien cac hoat dong cua minh tai day;
   Va day la phan code co the tao exception;
   ......................
except(Exception1[, Exception2[,...ExceptionN]]]):
   Neu co bat ky exeption nao trong danh sach, 
   thi thuc thi khoi code nay
   ......................
else:
   Neu khong co exception nao, thi thuc thi khoi code nay 
"""
"""
KHOI TRY-FINALLY TRONG PYTHON :
Trong truong hop neu bat ky code nao ma nguoi dung muon thuc thi
-> du cho co xuat hien exception hay khong thi khoi code deu 
-> co the duoc dat trong khoi finally 
try:
   Ban thuc hien cac hoat dong cua minh tai day;
   Va day la phan code co the tao exception;
   ......................
   Do co exeption nen khoi nay bi bo qua
finally:
   Khoi nay nen duoc thuc thi
   ......................
"""
