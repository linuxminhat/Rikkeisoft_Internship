"""
Module collection trong Python được định nghĩa là một bộ chứa được sử dụng để lưu trữ các bộ sưu tập dữ liệu,
ví dụ: list, dict, set và tuple,... Nó được giới thiệu để cải thiện các chức năng của bộ chứa bộ sưu tập tích hợp.
"""
#namedtuple()
import collections;
Person = collections.namedtuple("Person",["Hello","Nhat","Minh"]);
test=Person("Hello","Nhat","Minh");
print(test);
#OrderedDict()
import collections;
d1 = collections.OrderedDict();
d1['A']=10;
d1['C']=12;
d1['B']=11;
for k,v in d1.items():
  print(k,v);
#defaultdict():
from collections import defaultdict 
number=defaultdict(int)
number['one']=1;
number['two']=2;
print(number['one']);
#counter():
from collections import Counter
c=Counter();
list=[1,2,3,4,5,6,7,8,9,10];
Counter(list);
Counter({1:5},{2:4});
list=[1,2,3,4,6,1,123,5,43534];
c=Counter(list);
print(c[1]);
# deque():delte => xoa phan tu o 2 dau 
from collections import deque

# Đổi tên biến từ 'list' thành 'my_list' để tránh xung đột
my_list = ["x", "y", "z"]

# Tạo deque từ danh sách
deq = deque(my_list)

# In ra deque
print(deq)