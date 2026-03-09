# LAPORAN PRAKTIKUM JOBSHEET-03

## PRAKTIKUM 1
![](img/1.png)
![](img/2.png)
Error karena password dihapus dari $fillable sementara DB mewajibkan mengisinya. Kesimpulannya, data "Manager 3" tidak akan tersimpan ke dalam tabel m_user karena terbentur aturan keamanan Mass Assignment di Laravel.

## PRAKTIKUM 2
### Praktikum 2.1
![](img/3.png)
Data yang muncul adalah data user yang memiliki user_id = 1 dari tabel m_user. Tabel tersebut akan menampilkan kolom: ID, Username, Nama, dan ID Level Pengguna.

![](img/4.png)
Halaman web akan menampilkan satu baris data pengguna yang memiliki nilai level_id = 1. Berbeda dengan find() yang secara otomatis mencari berdasarkan Primary Key (user_id), metode where() memungkinkan mencari data berdasarkan kolom apa pun yang ada di tabel, dalam hal ini adalah kolom level_id.

![](img/5.png)
Hasil yang muncul di browser akan sama persis dengan penggunaan where('level_id', 1)->first(). Halaman akan menampilkan satu baris data pengguna yang memiliki level_id = 1.

![](img/6.png)
Karena User dengan ID 1 ada, maka browser menampilkan tabel data user tersebut. Namun, kolom user_id dan level_id kosong di halaman view jika script user.blade.php tetap mencoba mengaksesnya. 

![](img/7.png)
Karena User dengan ID 20 tidak ada, amakamaka browser tidak akan menampilkan tabel, melainkan langsung memunculkan halaman 404 Not Found.

### Praktikum 2.2
![](img/8.png)
Browser akan menampilkan satu baris data pengguna (ID, Username, Nama, dan ID Level) dengan ID 1 di dalam tabel sesuai dengan isi file user.blade.php.

![](img/9.png)
Data dengan username 'manager9' tidak ada, maka browser menampilkan halaman error 404 (Not Found).

### Praktikum 2.3
![](img/10.png)
Halaman tidak akan menampilkan tabel atau view user, melainkan  menampilkan halaman hitam khas Laravel dari fungsi dd() (Dump and Die). Di layar tersebut hanya akan muncul sebuah angka (integer) yang menunjukkan jumlah baris data.

![](img/11.png)

### Praktikum 2.4
![](img/12.png)
Halaman browser hanya akan menampilkan tabel berisi data user (ID, Username, Nama, ID Level) karena user dengan username 'manager' sudah ada di database sebelumnya. Fungsi firstOrCreate() hanya akan menjalankan fungsi "first" (mengambil data yang sudah ada) tanpa mencoba membuat data baru.

![](img/13.png)
Karena data dengan username 'manager22' tidak ada, maka membuat tabel berisi data user 'manager22'. Jika di refresh, fungsi firstOrCreate() tidak akan membuat data baru lagi, melainkan hanya mengambil data 'manager22' yang sudah ada dari database.

![](img/14.png)
Halaman browser akan menampilkan tabel data lengkap milik user tersebut. Karena data diambil langsung dari database (bukan objek baru di memori), maka seluruh kolom yang ada pada baris tersebut akan muncul, termasuk ID (user_id) dan ID Level Pengguna (level_id).

![](img/15.png)
![](img/16.png)
Karena data dengan username 'manager33' belum ada, maka browser tetap memunculkan tabel data dengan username 'manager33' tetapi kolom ID akan kosong. Hal ini terjadi karena data tersebut baru ada di memori (RAM) dan belum mendapatkan ID  dari database. Dan data tersebut tidak akan tersimpan di database, karena tidak ada perintah $user->save() setelahnya.

![](img/17.png)
![](img/18.png)
Data dengan username 'mannager33' sudah tersimpan di database, sehingga pada browser muncul ID-nya juga, karena sudah ditambahkan perintah $user->save() setelahnya.

### Praktikum 2.5
![](img/19.png)
Browser menampilkan halaman hitam khas Laravel dari fungdi dd() yang menampilkan nilai false. Laravel menyimpan data 'manager55' ke database. Pada titik ini, data di PHP dan database sama (Clean). Namun, ada perinrah mengubah username manjadi 'manager56', jadi data di PHP berbeda dengan di database (Dirty). Karena ada perbedaan yang belum disimpan, maka isDirty() bernilai true. Denagn perintah $user->save();, Laravel menjalankan perintah update ke database, sehingga data di database sudah berubah menjadi 'manager56'. Karena data di PHP dan di database sudah sama, maka isDirty() bernilai false.

![](img/20.png)
Menampilkan halaman kosong, karena tidak ada perintah return view(...) untuk memanggil file Blade dan tidak ada dd() atau echo untuk melakukan pengecekan logika (wasChanged), tetapi hasilnya tidak dicetak ke layar. Namun meskipun layar kosong, database berhasil diperbarui. User 'manager11' dibuar, lalu namanya langsung diubah menjadi 'manager12'.

### Praktikum 2.6
![](img/21.png)
Halaman akan menampilkan tabel dengan kolom: ID, Username, Nama, ID Level Pengguna, dan Aksi. UserModel::all() membuat setiap baris data yang ada di tabel m_user akan muncul satu per satu karena perintah @foreach. 
Pada kolom Aksi, akan muncul dua link untuk setiap pengguna:
- Ubah: Mengarah ke URL seperti /user/ubah/1.
- Hapus: Mengarah ke URL seperti /user/hapus/1.

![](img/21.png)
![](img/24.png)
Menampilkan seluruh data user, ketika di klik link “+ Tambah User” browser tidak memunculkan apapun karena tidak ada perintah untuk menuju ke link tersebut.

![](img/22.png)
Menampilkan Form Tambah Data User 

![](img/23.png)
![](img/25.png)
Memunculkan Form Ubah Data User ketika mengklik link 'Ubah'. Namun, ketika ingin menyimpan perubahan akan muncul pesan error, karena tidak ada perintah Route::put untuk memproses/menyimpan hasil perubahan di form tersebut ke dalam database.

![](img/21.png)
![](img/26.png)
Data di ID 1 berhasil diubah

![](img/27.png)
Menghapus data pada ID 19

### Praktikum 2.7
![](img/28.png)
Gambar tersebut menunjukkan bahwa fungsi index pada UserController telah berhasil melakukan Eager Loading untuk mengambil 8 data user beserta relasi levelnya. Munculnya objek Collection membuktikan bahwa koneksi ke database, definisi model, dan pengaturan nama tabel (m_level dan m_user) sudah sinkron dan siap untuk ditampilkan ke halaman web.