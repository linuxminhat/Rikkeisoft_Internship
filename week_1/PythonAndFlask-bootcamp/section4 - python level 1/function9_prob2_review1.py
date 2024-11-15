def maker_function(string_name):
  for letter in string_name:
    if(letter in "uieoaUIEOA"):
      string_name = string_name.replace(letter, 'x');
  return string_name;
string_name=maker_function("DangNhatMinh");
print(string_name);
