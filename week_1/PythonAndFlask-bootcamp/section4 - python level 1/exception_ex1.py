try : 
  fh=open("testfile","r");
except IOError:
  print("Error:Khong tim thay file !");
else:
  print("Thanh cong ghi noi dung vao file")