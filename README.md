<p align="center">
   <img src="public/assets/img/Icon.png" alt="MengHeal Logo">
</p>

# INF206-2022-DY2-MengHeal
MengHeal menyediakan sarana untuk konsultasi mengenai permasalahan kesehatan mental pada remaja kisaran usia 12 sampai 18 tahun.
## About
Repositori ini berisi mengenai project matakuliah Rekayasa Perangkat Lunak, dengan nama project MengHeal. Project ini mengambil tema mengenai Mental Health dikalangan remaja.
## How to run
1. Clone repositori ini terlebih dahulu di dalam folder htdocs jika memakai XAMPP. Jika memakai Laragon, clone di dalam folder www. 
   ```
   $ git clone https://github.com/Amar-Suhendra/INF206-2022-DY2-MengHeal.git
   ```
2. Masuk ke dalam folder yang telah diclone.
   ````
   $ cd INF206-2022-DY2-MengHeal
   ````
3. Jalankan Composer Install.
   ```
   $ composer install
   ```
4. Hidupkan key generate.
   ```
   $ php artisan key:generate
   ```
5. Copy file **.env.example** dan save as menjadi **.env**.
6. Di dalam file **.env** ubahlah value dari:  
   note: tanpa tanda kutip
   ```
   DB_DATABASE = MengHeal
   BROADCAST_DRIVER= pusher

   PUSHER_APP_ID= "your pusher id"
   PUSHER_APP_KEY= "your pusher key"
   PUSHER_APP_SECRET= "your pusher secret"
   PUSHER_APP_CLUSTER= "your pusher cluster"
   ```
7. Sebelum Melakukan migrasi, Buatlah terlebih dahulu database MengHeal dengan menggunakan aplikasi RDBMS yang anda punya dengan query berikut:
   ````
   create database MengHeal;
   ````
8. Untuk Mengisi tabel beserta data-datanya (Migrasi database) jalankan perintah berikut:
   ````
   $ php artisan migrate:fresh --seed
   ```` 
9.  Jika memakai Laragon, cukup **Start All**. Jika memakai Xampp hidupkan server aplikasinya dengan cara sebagai berikut:
   ````
   $ php artisan serve
   ````

## Team Member
### Author
* Amar Suhendra (2008107010091)
### Collaborator
* Muhammad Rudy Hidayat (2008107010002)
* M. Ikhsan Fikri (2008107010020)
* Muhammad Rizky Hidayah Akbar (2008107010034)
* Ainal Fajri Malahayati (2008107010053)

## Version History
* V.1.0  
  * First Release
## License
Semua yang terdapat didalam repositori ini hanya digunakan untuk sarana pembelajaran dan tidak untuk diperjual belikan.