#Cung cap cac ham de thong ke toan hoc cua du lieu so 
#statistics.mean() : Duoc su dung tinh gia tri trung binh so hoc cac so trong danh sach
import statistics;
datasets=[1,2,34,4,5,235,235];
x=statistics.mean(datasets);
print(x);
#statistics.median():tra ve gia tri giua cua du lieu so trong danh sach
datasets=[4,-5,6];
print(statistics.median_grouped(datasets));
#statistics.stdev():sử dụng để tính độ lệch chuẩn trên một mẫu nhất định có sẵn ở dạng danh sách.
#statistics.median_low():tra ve gia tri trung binh thap
#statistics.median_high():tra ve gia tri trung binh cao 
