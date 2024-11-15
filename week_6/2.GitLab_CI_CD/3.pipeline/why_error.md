stages:
    - build
    - test

build the car: 
  stage: build
  script:
    - mkdir build
    - cd build
    - touch car.txt
    - echo "chassis" >> car.txt
    - echo "engine" >> car.txt
    - echo "wheel" >> car.txt
  

test the car:
  stage: test
  script:
    - test -f build/car.txt
    - cd build 
    - grep "chassis" car.txt
    - grep "engine" car.txt
    - grep "wheel" car.txt
=> Trong đoạn mã trên này bị lỗi, quá trình test không tìm thấy file car.txt 
=> Nguyên nhân : Trong GITLAB CI thì các bước sẽ chạy một quá trình riêng biệt độc lập nhau, điều này nghĩa là thư mục "build" đã tạo bước 1 không thể cd vào được
=> Gỉai quyết : Tạo ra một "artifact" để lưu trữ 
