#Tham so cua mot Exception trong Python
#Một Exception có thể có một tham số, mà là một giá trị mà cung cấp thông tin bổ sung về vấn đề
try : 
  x=1/0;
except ZeroDivisionError as e:
  print(f"Error: {e}");
"""
GIAI THICH :
try : Chua ma co the gay ra ngoai le 
except : Bat ngoai le va luu vao bien e 
thong diep loi: Day la thong diep mo ta ly do gay ra ngoai le 
=> e chua thong diep loi tu ngoai le ZeroDivisionError
"""
