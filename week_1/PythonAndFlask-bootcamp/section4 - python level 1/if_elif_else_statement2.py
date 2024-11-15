username="admin";
permission=False;
if username=="admin" and permission:
  print("Hello, admin!");
elif username=="admin" and permission==False:
  print("Only admin access");
else:
  print("No access!");