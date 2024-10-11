FROM baseimage
# Lenh nay duoc dung de chi dinh cac image co so 
# Tìm thêm ở trên dockerhub 
ADD source dest
#source : Duong dan den tep hoac thu muc ma muon them vao image Docker 
#dest = destination : Vi tri dich trong image Docker 
#Vay su khac nhau giua ADD va COPY
#COPY: Chỉ dùng để sao chép tệp hoặc thư mục cục bộ vào image. Không thể tải xuống từ URL hay giải nén các tệp nén.
#ADD: Hỗ trợ thêm các chức năng nâng cao như tải xuống từ URL và giải nén các tệp .tar.
RUN wget 
RUN curl
#Chay de build image  
#Lenh RUN trong Dockerfile duoc su dung de thuc thi mot lenh cu the trong qua trinh xay dung image Docker
#Cach hoat dong : 
#Khi su dung RUN, Docker se thuc thi lenh nay trong image co so va tao ra lop moi tren image
#LUU Y : Minh tung viet lenh RUN nhu the nay roi : RUN ["apt-get", "install", "-y", "nginx"]
COPY source dest 
#Khac voi ADD thi khong ho tro cac file tren URL 
CMD 
#Chay khi container da chay tren image da build 
CMD ["npm", "start"]
CMD ["dotnet", "run"]
CMD npm start 
CMD start start start nó sẽ là paramenter của Entrypoint 
#Luu y : Neu trong dockerfile co nhieu CMD thi no chi lay thang cuoi cung 
#No co the bi ghi de neu tao 1 container voi 1 lenh shell 
ENTRYPOINT ["npm","start"]
ENTRYPOINT npm start 

WORKDIR /app 
#Chi dinh thu muc ma no se lam viec 

USER daemon 
#Chi ra user nao dang lam viec 
#Vi du co nhung file tuyet mat thi can chi dinh user nao chay no 
ENV key=value
#ADD metadata vao trong Docker
ENV userName=joingame
ARG  key=value
EXPOSE port 
#Chi ra cai port can dung la gi
