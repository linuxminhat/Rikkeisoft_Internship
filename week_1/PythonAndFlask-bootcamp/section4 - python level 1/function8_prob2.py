#prob2 : 
#create a code maker function 
#this function will take in a string name and replace any vowels 
#with the letter x 
#----------------
def maker_function(string_name):
  for letter in string_name:
    if letter in 'aeiouAEIOU':
      string_name = string_name.replace(letter, 'x');
  
  return string_name;
string_name = maker_function("DangNhatMinh");
print(string_name);