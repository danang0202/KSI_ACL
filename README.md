# Cara Cloning Project dan Inistall Local

1. Masuk ke sebuah direcotory anda dan jalankan perintah "git clone https://github.com/danang0202/KSI_ACL.git"
2. Buka terminal dan arahkan ke  directory /KSI_ACL/Appartment/
3. jalankan perintah "composer install"
4. jalankan perintah "php artisan key:generate"
5. buat sebuah database diMySql anda, dan sesuaikan .env untuk mengarah ke database anda
6. jalankan printah "php artisan migrate"
7. jalankan perintah "php artisan db:Seed CallSeeder"
8. jalankan perintah "php artisan serve"
9. Akses url yang diberikan, jika  berhasil maka anda dapat mengarahkan ke path /register untuk menuju halaman register
