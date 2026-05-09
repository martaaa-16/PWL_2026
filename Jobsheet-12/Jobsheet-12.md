# LAPORAN PRAKTIKUM JOBSHEET-12

## Pertemuan 12 – Implementasi Toggle Column pada Table Filament
### B. Menambahkan Kolom Baru
![](img/1.png)

### C. Mengaktifkan Toggle Column
![](img/2.png)

### D. Menyembunyikan Kolom Secara Default
![](img/3.png)

### F. Menerapkan Toggle pada Semua Kolom
![](img/4.png)

### J. Analisis & Diskusi
1. Mengapa toggle column penting pada admin panel?
2. Apa perbedaan toggleable() biasa dengan isToggledHiddenByDefault?
3. Mengapa preferensi kolom tetap tersimpan?
4. Kapan sebaiknya kolom disembunyikan secara default?

### Jawab:
1. Karena digunakan untuk menjaga kerapian dan efisiensi kerja admin. Jika sebuah tabel memiliki terlalu banyak kolom, tampilan akan menjadi penuh, sesak, dan sulit dibaca. Dengan toggle column, admin dapat menyembunyikan kolom yang tidak diperlukan untuk sementara waktu dan hanya menampilkan informasi yang relevan dengan tugas mereka saat itu.

2. Perbedaan toggleable() biasa dengan isToggledHiddenByDefault:
- toggleable(): Memberikan kemampuan kepada kolom agar bisa dimunculkan atau disembunyikan secara manual oleh pengguna melalui menu toggle. Secara default, kolom ini akan langsung tampil saat halaman dibuka pertama kali.  
- isToggledHiddenByDefault: true: Digunakan bersamaan dengan toggleable(). Perbedaannya, kolom tersebut akan langsung tersembunyi (tidak tampil) saat halaman pertama kali dimuat. Admin harus mengaktifkannya secara manual lewat menu jika ingin melihat isinya.

3. Preferensi tersebut tersimpan karena Filament memanfaatkan sistem session atau penyimpanan lokal pada browser pengguna. Hal ini memungkinkan sistem untuk mengingat pengaturan kolom yang sudah dipilih oleh admin, sehingga ketika admin berpindah halaman atau melakukan refresh, tampilan tabel tetap konsisten sesuai dengan keinginan terakhir mereka.

4. Kolom sebaiknya disembunyikan secara default (isToggledHiddenByDefault: true) dalam kondisi berikut:
- Data Sekunder: Kolom berisi informasi yang jarang dilihat atau hanya sesekali dibutuhkan (misalnya: ID produk yang panjang atau metadata teknis seperti Tags).  
- Keterbatasan Layar: Ketika jumlah kolom sangat banyak sehingga menyebabkan tabel meluap secara horizontal (overflow).  
- Fokus Data: Untuk membantu admin fokus pada data utama yang paling sering digunakan sehari-hari.