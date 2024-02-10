# Cara Cloning Project dan Inistall Local

1. Masuk ke sebuah direcotory anda dan jalankan perintah "git clone https://github.com/danang0202/KSI_ACL.git"
2. Buka terminal dan arahkan ke  directory /KSI_ACL/Appartment/
3. jalankan perintah "composer install"
4. jalankan perintah "cp .env.example .env"
5. jalankan perintah "php artisan key:generate"
6. buat sebuah database diMySql anda, dan sesuaikan .env untuk mengarah ke database anda
7. jalankan printah "php artisan migrate"
8. jalankan perintah "php artisan migrate:fresh --seed"
9. jalankan perintah "php artisan serve"
10. Akses url yang diberikan, jika  berhasil maka anda dapat mengarahkan ke path /register untuk menuju halaman register
