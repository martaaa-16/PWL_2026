# LAPORAN PRAKTIKUM JOBSHEET-12

## Pertemuan 12 – Implementasi Toggle Column pada Table Filament
### B. Menambahkan Kolom Baru
![](img/1.png)

### C. Menambahkan Replicate (Copy) Action
![](img/2.png)

### E. Membuat Custom Action (Ubah Status Publish)
![](img/3.png)

### J. Analisis & Diskusi
1. Mengapa action di tabel lebih efisien dibanding halaman edit?
2. Apa perbedaan predefined action dan custom action?
3. Bagaimana cara menambahkan validasi dalam custom action?
4. Kapan kita menggunakan Replicate?

### Jawab:
1. Memungkinkan admin melakukan perubahan cepat (toggle, hapus, salin, dsb.) langsung dari daftar tanpa membuka halaman edit, sehingga mengurangi waktu loading dan langkah kerja untuk perubahan kecil.

2. Perbedaan predefined action dan custom action:
- Predefined action: Aksi bawaan Filament seperti Edit, Delete, Replicate — tinggal pakai ::make() tanpa menulis logika dasar.
- Custom action: Aksi yang dibuat sendiri ketika butuh perilaku khusus (form input, validasi, atau logika tambahan)—kita mendefinisikan form() dan action() sendiri.

3. Cara menambahkan validasi dalam custom action:
- Gunakan ->form([...]) pada action untuk mendefinisikan input (misal: TextInput, Checkbox).
- Tambahkan aturan validasi pada komponen form (misal: ->required(), ->email(), ->min(3)).
- Di ->action(function ($record, $data) { ... }) logika hanya dijalankan jika validasi lulus; untuk aturan kustom, gunakan ->validate() atau lakukan pengecekan manual sebelum update.

4. Gunakan ketika ingin menyalin entri yang ada menjadi entri baru dengan cepat (misalnya membuat posting atau produk baru yang mirip). Cocok untuk duplikasi data yang menghemat pengisian ulang field yang sama.