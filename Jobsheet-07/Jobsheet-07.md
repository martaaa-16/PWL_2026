# LAPORAN PRAKTIKUM JOBSHEET-07

## Pertemuan 7 – Implementasi Wizard Form (Multi Step Form) di Filament
### B. Struktur Database Product
Buat file migrate product dan lakukan migrate ke database
![](img/1.png)

Buat File Model
![](img/2.png)

### C. Membuat Resource Product
Menu Products muncul
![](img/3.png)

### D. Implementasi Wizard Form
Muncul Menu 1, yaitu Product Info
![](img/4.png)

Muncul Menu 2, yaitu Pricing & Stock
![](img/5.png)

Muncul Menu 3, yaitu Media & Status
![](img/6.png)

### E. Menambahkan Tombol Submit
![](img/7.png)

### F. Menghilangkan Default Button
![](img/9.png)

### G. Tampilan Wizard Form
![](img/8.png)

### I. Menampilkan Data pada Table
![](img/10.png)
![](img/11.png)

### L. Analisis & Diskusi
1. Mengapa Wizard Form lebih baik untuk form panjang?
2. Kapan kita menggunakan skippable()?
3. Apa kelebihan multi step dibanding single form panjang?
4. Apakah wizard cocok untuk semua jenis form?

### Jawab:
1. Karena membagi beban kognitif pengguna. Dibandingkan melihat satu halaman penuh dengan puluhan kolom yang membosankan, Wizard Form memecah tugas menjadi potongan-potongan kecil yang terasa lebih ringan dan mudah diselesaikan.
2. Gunakan saat urutan pengisian data bersifat opsional. Dengan skippable(), pengguna bisa langsung melompat ke langkah (step) mana pun tanpa harus mengisi langkah sebelumnya secara berurutan. Ini cocok untuk form profil pengguna yang tidak semua datanya wajib diisi saat itu juga.
3. Kelebihan multi step dibanding single form panjang
- Fokus: Pengguna hanya fokus pada satu kategori data dalam satu waktu.
- Organisasi: Data terkelompok secara logis (misal: Info Produk -> Harga -> Media).
- Progres: Ada indikator visual yang menunjukkan sejauh mana pengguna sudah melangkah, sehingga mereka tidak merasa terjebak dalam form yang "tak berujung".
4. Tidak. Wizard cocok untuk form kompleks (pendaftaran asuransi, input produk detail, checkout belanja).
Wizard tidak cocok untuk form sederhana (login, kontak kami, atau survei 2-3 pertanyaan). Menggunakan Wizard pada form pendek justru akan menambah klik yang tidak perlu dan memperlambat pengguna.

## Pertemuan 8 – Implementasi Info List (View Page) di Filament
### D. Membuat Section – Product Info
### E. Section – Pricing & Stock 
### F. Section – Media & Status
### L. Analisis & Diskusi
1. Mengapa View Page tidak cocok menggunakan form input?
2. Apa perbedaan TextColumn dan TextEntry?
3. Kapan kita menggunakan badge?
4. Apa keuntungan menggunakan IconEntry untuk boolean?

### Jawab:


## Pertemuan 9 – Implementasi Tabs pada Info List di Filament
