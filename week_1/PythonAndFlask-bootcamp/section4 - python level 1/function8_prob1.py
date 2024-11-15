# # prob1 : 
# # write a function that returns a boolean 
# (TRUE/FALSE) indicating if the word is "secret"
# is in a string 
def checking_secret(word):
  if(word=="secret"):
    return True;
  else:
    return False;
checking_secret("cac");
print(checking_secret("cac"));
# # prob2 : WRONG CODE ! 
# # create a code maker function.This function 
# # will take in a string name and replace any vowels with letter x 
# def replace_vowels(string_name):
#   for letter in string_name:
#     if(letter=='a' or
#        letter=='u' or
#         letter=='i' or
#          letter=='e' or
#           letter=='o'
#             ):
#       letter="x"; 
# string_name="DangNhatMinh";
# replace_vowels(string_name);
# print(string_name); => SAI LAM SO DANG ! 
