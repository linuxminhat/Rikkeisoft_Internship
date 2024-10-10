Command line instructions

You can also upload existing files from your computer using the instructions below.

- Git global setup

git config --global user.name "Đặng Nhật Minh"

git config --global user.email "minhdn3\_tts@rikkeisoft.com"

- Create a new repository

git clone https://git.rikkei.org/devops/internship.git

cd internship

git switch --create main

touch README.md

git add README.md

git commit -m "add README"

- Push an existing folder

cd existing\_folder

git init --initial-branch=main

git remote add origin https://git.rikkei.org/devops/internship.git

git add .

git commit -m "Initial commit"

- Push an existing Git repository

cd existing\_repo

git remote rename origin old-   origin

git remote add origin https://git.rikkei.org/devops/internship.git

minhdn3\_tts / minhdn3\_tts

config credential error : read about this

tyfrvrETTL5oXJC6RSse

tyfrvrETTL5oXJC6RSse

git clone https://minhdn3\_tts:tyfrvrETTL5oXJC6RSse@git.rikkei.org/devops/internship.git

- Push code :

git push --set-upstream origin week1-week2

\--------------------------------------------------------------------------------------------------

- When you check code and commit again : (RÚT KINH NGHIỆM)

Lỗi [rejected] với thông báo fetch first:

Thông báo này có nghĩa là nhánh week1-week2 trên remote repository đã có thay đổi, và Git yêu cầu bạn phải fetch và merge trước khi có thể push.

\+ Chạy lệnh git fetch để lấy các thay đổi mới nhất từ repository:

git fetch origin week1-week2

\+ Sau đó, hợp nhất nhánh từ remote vào nhánh local của bạn

git merge origin/week1-week2

\+ Cuối cùng, sau khi hợp nhất thành công, thử lại lệnh git push

git push origin week1-week2

=> giải quyết xung đột !

\--------------------------------------------------------------------------------------------------


