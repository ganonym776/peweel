# Project Name :

### :sunglasses: Author Name :

> 1. Muhammad Dwi Prasetyo ([prasetyomuhdwi][anggota1])
> 2. Gunawan Prasetyo ([ganonym776][anggota1])
> 3. Hairul Akhyar Maulana (@)
> 4. Anggi Nur Widianingsih ([angginurwidianingsih][anggota1])
> 5. Akbar Aryo Wicaksono ([akbararyo][anggota1])

### Table of contents

- [General info](#general-info)
- [Technologies](#technologies)
- [Setup](#setup)

### General info

> Web E-Commerce Penjualan Barang Bekas

Project ini dibuat untuk memenuhi tugas final project **Pemrograman Web Lanjut**.

### Technologies

> Project is created with:
>
> - PHP v7.4.3 (cli)
> - MySQL v8.0.22
> - Server Apache v2.4.41

### Setup

To run this project locally :

> 1. clone repository ini
> 2. move folder hasil clone ke folder **DOCUMENT_ROOT** apache atau htdocs untuk pengguna XAMPP/MAMP
> 3. masuk ke folder **App/Config**
> 4. copy/duplicate file **example.env.php**
> 5. rename hasil duplicatenya menjadi **env.php**
> 6. buka file dan sesuaikan dengan info database anda
> 7. jalankan program

### Debug

#### _Fatal error: Uncaught Exception: Unable to $\_Get['url']_

ini dikarnakan configurasi **DOCUMENT_ROOT** anda tidak membolehkan Override untuk .htaccess

#### cara mengatasinya :

```
1. Buka file conf XAMPP "httpd.conf" di editor pilihan Anda.
2. Cari "mod_rewrite.so", lalu anda akan menemukan baris ini
  #LoadModule rewrite_module modules/mod_rewrite.so
3. Hapus komentar "#" sehingga menjadi
   **LoadModule rewrite_module modules/mod_rewrite.so**
4. Cari **DocumentRoot "C:\xampp\htdocs"**.
5. Rubah **AllowOverride none** menjadi **AllowOverride All**
6. restart XAMPP anda lalu coba reload browsernya
```

```
HopeYouLikeIt
```

[anggota1]: (https://github.com/prasetyomuhdwi)
[anggota2]: (https://github.com/ganonym776)
[anggota3]: ()
[anggota4]: (https://github.com/angginurwidianingsih/)
[anggota5]: (https://github.com/akbararyo/)
