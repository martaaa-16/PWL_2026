# LAPORAN PRAKTIKUM JOBSHEET-06

## Praktikum 4 - Implementasi Form Elements & Resource Post di Filament
Membuat Resource Post
![](img/1.png)
![](img/2.png)

Menu Posts muncul
![](img/3.png)
![](img/4.png)

Menambahkan Text Input (Title & Slug)
![](img/5.png)

Menambahkan Select (Relasi Category)
![](img/6.png)

Menambahkan Color Picker
![](img/7.png)

Menambahkan Markdown/Rich Editor (Body)
![](img/8.png)

Alternatif: RichEditor::make('body'),
![](img/9.png)

Menambahkan File Upload (Image)
![](img/10.png)
![](img/11.png)

Menambahkan Tags Input
![](img/12.png)

Menambahkan Checkbox (Published)
![](img/13.png)

Menambahkan Data Picker (Published At)
![](img/14.png)

Contoh Implementasi Form
![](img/15.png)
![](img/18.png)

Data belum muncul
![](img/16.png)

Memunculkan data
![](img/17.png)

Jika gambar blm muncul maka lakukan 'php artisan storage:link' dan pastikan tulisan image pada PostForm dan PostTable sama
![](img/19.png)

### I. Analisis & Diskusi
1. Mengapa kita perlu storage:link?
2. Apa fungsi $casts untuk field JSON?
3. Mengapa kita menggunakan category.name bukan category_id?
4. Apa perbedaan RichEditor dan MarkdownEditor?

### Jawab:
1. Laravel menyimpan file upload di folder storage/app/public/ yang tidak bisa diakses langsung oleh browser karena berada di luar folder public/. Perintah ini membuat symbolic link (pintasan) dari folder public/storage ke storage/app/public. Tujuannya agar file yang ada di dalam folder storage bisa diakses secara publik melalui URL, sehingga gambar dapat tampil di halaman web atau tabel Filament.
2. Agar Filament (dan Laravel) dapat memperlakukan data tersebut sebagai array PHP biasa. Tanpa casting, data JSON akan terbaca sebagai string mentah, sehingga komponen, seperti TagsInput tidak akan bisa mengolah datanya dengan benar. Jadi, $casts adalah penerjemah otomatis antara format database (JSON string) dan format PHP (array), sehingga kita tidak perlu convert manual setiap kali baca/simpan data.
3. Karena category_id hanya menyimpan angka (foreign key), misalnya 1, 2, 3 — yang sulit dipahami oleh pengguna. Dengan category.name, Filament mengakses relasi belongsTo pada model Post untuk menampilkan nama category yang sebenarnya, misalnya "Laravel" atau "PHP".
4. Keduanya adalah komponen untuk menginput teks panjang, namun memiliki format penyimpanan yang berbeda:
- MarkdownEditor: Menyimpan data dalam format Markdown (menggunakan simbol seperti ** tebal **, # Heading). Ini lebih ringan dan sering digunakan jika data tersebut akan dikonversi lagi oleh parser Markdown di sisi front-end.
- RichEditor: Menyimpan data dalam format HTML (menggunakan tag seperti ![](img/20.png)). Ini lebih umum digunakan jika kamu ingin hasil inputan langsung tampil persis seperti yang diketik (WYSIWYG) tanpa perlu konversi tambahan.

## Praktikum 5 - Custom Layout Form dengan Section & Group di Filament
Membuat 3 field dalam satu baris
![](img/21.png)

Atau jika membuat layout yang berbeda lagi
![](img/22.png)

Membuat Section "Post Details"
![](img/23.png)

Membuat Section Terpisah (Section Image Upload & Section Meta Data)
![](img/24.png)

Contoh layout lain
![](img/25.png)

Menggunakan Group untuk Layout Horizontal
![](img/26.png)

Modifikasi layoutnya dengan mengatur columnnya
![](img/27.png)

### I. Analisis & Diskusi
1. Mengapa layout form penting dalam aplikasi admin?
2. Apa perbedaan Section dan Group?
3. Kapan kita menggunakan columnSpanFull()?
4. Apa keuntungan sistem grid 12 kolom?

### Jawab:
1. Layout form yang baik sangat penting karena:
- Kemudahan penggunaan: Admin yang mengisi form setiap hari akan jauh lebih produktif jika field-field yang berkaitan dikelompokkan bersama. Misalnya, field title dan slug diletakkan berdampingan karena keduanya saling berkaitan.
- Mengurangi kesalahan: Ketika form tertata rapi dengan Section dan label yang jelas, admin lebih kecil kemungkinannya melewatkan field penting atau mengisi field yang salah.
- Tampilan profesional: Aplikasi admin yang rapi mencerminkan kualitas sistem secara keseluruhan, meningkatkan kepercayaan pengguna terhadap aplikasi.
2. |  | Section | Group |
    |------|------------|------------|
    | **Tampilan visual** | Ada box, judul, border | Tidak ada tampilan visual |
    | **Fitur tambahan** | Bisa tambah deskripsi & icon | Tidak ada deskripsi/icon |
    | **Fungsi utama** | Mengelompokkan field secara visual | Mengatur layout/proporsi kolom |
    | **Contoh penggunaan** | "Post Details", "Image Upload" | Membagi layout kiri-kanan
    
    Singkatnya: Section untuk pengelompokan yang terlihat pengguna, Group untuk mengatur tata letak di balik layar.
3. columnSpanFull() digunakan ketika sebuah field perlu memenuhi seluruh lebar form, tidak peduli berapa kolom yang digunakan.
Contoh penggunaan yang tepat:
- MarkdownEditor / RichEditor — editor teks butuh ruang lebar agar nyaman digunakan
- FileUpload — area upload butuh ruang yang cukup
- Field yang berisi informasi panjang seperti textarea
4. Sistem grid 12 kolom (seperti Tailwind/Bootstrap) memberikan fleksibilitas tinggi dalam pembagian layout:
- Mudah dibagi rata: 12 bisa dibagi dengan 1, 2, 3, 4, 6, dan 12 sehingga hampir semua proporsi bisa dibuat
- Proporsi fleksibel: bisa membuat layout 2/3 + 1/3, atau 1/2 + 1/2, atau 1/4 + 3/4, semuanya menggunakan angka bulat
- Konsisten: semua elemen mengikuti sistem yang sama sehingga tampilan tetap rapi di berbagai ukuran layar

## Praktikum 6 - Implementasi Form Validation pada Filament
Cara menambahkan validasi menggunakan method required()
![](img/28.png)
Hasil:
• Tanda (*) merah muncul
• Jika kosong → muncul pesan error otomatis

Cara menambahkan validasi menggunakan method rule()
![](img/29.png)
Hasil:
• Muncul pesan error berwarna merah otomatis

Cara menambahkan validasi menggunakan method rule() (Multiple Validation)
![](img/30.png)

Validasi Unique
![](img/31.png)

Mengganti Pesan Error (Custom Message)
![](img/32.png)

### K. Analisis & Diskusi
1. Mengapa validasi penting pada admin panel?
2. Apa perbedaan validasi client-side dan server-side?
3. Mengapa unique otomatis bekerja saat edit data?
4. Kapan kita perlu menggunakan rules array dibanding string?

### Jawab:
