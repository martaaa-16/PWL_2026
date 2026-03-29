# LAPORAN PRAKTIKUM JOBSHEET-05

## PRAKTIKUM 1-INSTALL FILAMENT
![](img/1.png)

## PRAKTIKUM 2-MEMBUAT CRUD RESOURCE DENGAN FILAMENT V4
![](img/1.png)

## E. ANALISIS & DISKUSI
1. Apa kelebihan Filament dibanding membuat admin panel manual?
2. Mengapa Filament menggunakan Livewire?
3. Apa perbedaan SQLite dan MySQL dalam development?
4. Apa fungsi Panel Builder?

# Jawab:
1. Filament menggunakan Tailwind CSS yang tampilannya sudah modern. Fitur CRUD yang biasanya dibuat manual dengan waktu yang lama bisa selesai dalam hitungan menit melalui perintah terminal di Filament. Selain itu, fitur standar seperti Search, Filter, Pagination, Notification, dan Dark Mode sudah tersedia langsung tanpa perlu koding dari nol.
2. Karena Livewire memungkinkan Filament membuat antarmuka yang dinamis dan reaktiv (seperti React/Vue) tapi tetap menggunakan bahasa PHP. Livewire juga memudahkan developer Laravel karena tidak perlu berpindah-pindah antara bahasa PHP dan framework JavaScript yang kompleks.
3. 
    | Fitur | SQLite | MySQL |
    |------|------------|------------|
    | **Bentuk** | Berupa satu file tunggal dalam folder proyek | Sebuah layanan (service) server yang harus diinstal |
    | **Konfigurasi** | Nol. Langsung pakai (cocok untuk pemula/belajar) | Butuh setup username, password, dan port |
    | **Performa** | Sangat cepat untuk aplikasi kecil/personal | Sangat kuat untuk traffic tinggi dan data masif |
    | **Portabilitas** | Mudah dipindah-pindah (cukup copy filenya) | Harus di-export dan import lewat SQL dump
    
    Singkatnya: SQLite untuk mencoba ide atau belajar karena praktis.  MySQL (atau PostgreSQL) jika berencana merilis aplikasi ke publik (Production).
4. Panel Builder adalah jantung dari Filament. Fungsinya adalah sebagai kerangka kerja (framework) untuk membangun dashboard. Panel Builder menyediakan struktur untuk mengatur navigasi, resource, halaman kustom, dan tema untuk setiap panel tersebut secara terpisah namun tetap dalam satu basis kode.