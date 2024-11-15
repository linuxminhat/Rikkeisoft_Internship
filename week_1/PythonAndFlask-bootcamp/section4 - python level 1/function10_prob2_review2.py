def maker_function(string_name):
  final_string=[];
  for letter in string_name:
    if letter in "aueioAUEIO":
      final_string.append("x");
    else:
      final_string.append(letter);
  return ''.join(final_string);
new_string=maker_function("DangNhatMinh");
print(new_string);
