## Yêu cầu môi trường
- Xammpp : 8.0
- Cài đặt composer
## Chạy project
- Tạo file .env (coppy nội dung .env.example)
  - DB_DATABASE : tên database
  - DB_USERNAME= tài khoản php myadmin
  - DB_PASSWORD= mật khẩu
- Chạy lệnh:
  - Composer update hoặc Composer install
  - php artisan migrate (tạo database : nếu hỏi muốn tạo mới hay không thì chọn yes)
  - php artisan key:generate (tạo key)
  - php artisan db:seed ( insert dữ liệu mẫu)
  - php artisan serve (chạy serve)
