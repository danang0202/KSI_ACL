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

# Alur Aplikasi

Role User/Penghuni
1) Memiliki Fitur Dashboard, Profil, dan Request
2) Di fitur request fasilitas terdapat pilihan submenu
   - list request
   - kolam renang request
   - lapangan bulutangkis request 
   - gym request
   - badminton request
3) Namun tidak semua pengguna bisa memiliki request tersebut dan list 
   akses setiap submenu tersebut diatur berdasarkan pemilihan tipe unit
   Amaryllis: Taman
   Bougenville: Taman, Kolam Renang 
   Violet: Taman, Lapangan Bulutangkis
   Rose: Taman, Lapangan Bulutangkis, Kolam Renang
   Clover: Kolam Renang, Lapangan Bulutangkis, Gym
   Orchid: Taman, Gym, Lapangan Basket
   Penentuan list hak akses ini ditentukan pada saat pendaftaran akun
4) Jika user tidak memiliki hak akses ke salah satu submenu request kecuali 
   list request, maka akan dapat pesan "anda tidak memiliki hak akses pada
   fasilitas tersebut silahkan hubungi admin jika perlu"

Admin
1) Memiliki fitur Dashboard, Request, AccessControl
2) Admin dapat memberi persetujuan dan penolakan daftar list request user
   untuk menggunakan fasilitas (dummy tidak perlu berfungsi)
3) Admin dapat memonitor hak akses user
