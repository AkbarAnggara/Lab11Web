# Lab11Web

Nama  : Bangkit Akbar Anggara<br>
NIM   : 312010148<br>
Kelas : TI.20.B.1<br>

### Tugas
Berikut adalah tugas untuk praktikum 11 pertemuan 12<br>
![Screenshot_1.png](Pic/Screenshot_1.png)<br>

### Pengerjaan
1. Buka xampp control lalu kalian klik start dan klik config lalu pilih PHP(php.ini)<br>
![Screenshot_3.png](Pic/Screenshot_3.png)<br>
2. Lalu kalian hapus tanda (;) pada bagian extension=intl seperti berikut<br>
![Screenshot_2.png](Pic/Screenshot_2.png)<br>
3. Jika sudah kalian bisa download CodeIgniter4 atau kalian bisa click disamping [Click Here](https://codeigniter.com/download)<br>
4. Setelah kalian download, selanjutnya kalian extract dan rename menjadi ci4 seperti dibawah ini<br>
![Screenshot_21.png](Pic/Screenshot_21.png)<br>
5. Setelah kalian extract pindahkan kedalam folder htdocs > lab11_ci, setelah itu kalian buka localhost/lab11ci/ci4/public<br>
![Screenshot_4.png](Pic/Screenshot_4.png)<br>
6. Kalian buka CMD dengan cara buka kembali xampp control lalu pilih bagian Shell, selanjutnya kalian tulis seperti dibawah ini<br>
![Screenshot_5.png](Pic/Screenshot_5.png)<br>
7. Selanjutnya kalian tulis php shark maka akan muncul seperti dibawah ini<br>
![Screenshot_6.png](Pic/Screenshot_6.png)<br>
8. Selanjutnya kita akan mengaktifkan fitur debugging untuk mengatahui pesan error, jika belum aktif maka tampilannya akan seperti dibawah ini<br>
![Screenshot_8.png](Pic/Screenshot_8.png)<br>
9. Untuk mengaktifkannya kalian buka env, lalu kalian hapus (#) pada CI_ENVIRONMENT dan ubah juga menjadi development seperti berikut<br>
![Screenshot_7.png](Pic/Screenshot_7.png)<br>
10. Lalu coba kita hapus tanda (;) pada Home.php maka akan memunculkan info terjadi kesalahan pada bagian tertentu seperti dibawah ini<br>
![Screenshot_9.png](Pic/Screenshot_9.png)<br>
11. Setelah semua selesai, disini saya akan membuat router baru seperti berikut di File Routes terletak pada file app/config/Routes.php<br>
![Screenshot_10.png](Pic/Screenshot_10.png)<br>
12. Lalu kita cek lagi apakah router sudah benar pada Shell di xampp control tadi dengan tulis php spark routes, jika sudah maka tampilannya akan menjadi seperti berikut<br>
![Screenshot_11.png](Pic/Screenshot_11.png)<br>
13. Lalu kita cek about di web page, maka tampilannya akan seperti berikut<br>
![Screenshot_12.png](Pic/Screenshot_12.png)<br>
14. Selanjutnya kita akan membuat controller dengan membuat file baru dengan nama page.php pada folder Controllers<br>
![Screenshot_14.png](Pic/Screenshot_14.png)<br>
Berikut tampilannya<br>
![Screenshot_13.png](Pic/Screenshot_13.png)<br>
15. Selanjutnya kita akan membuat auto routing disini kalian bisa menambahkan syntax dibawah ini pada folder config > Routes.php<br>
![Screenshot_22.png](Pic/Screenshot_22.png)<br>
Dan juga syntax berikut pada folder Controllers > page.php<br>
![Screenshot_17.png](Pic/Screenshot_17.png)<br>
Maka tampilannya akan menjadi berikut ini<br>
![Screenshot_15.png](Pic/Screenshot_15.png)<br>
16. Selanjutnya kita buat tampilan web lebih menarik, masuk ke folder Views dan buat about.php dengan syntax berikut<br>
![Screenshot_24.png](Pic/Screenshot_24.png)<br>
Setelah itu rubah bagian about di page.php pada folder Controllers seperti dibawah ini<br>
![Screenshot_25.png](Pic/Screenshot_25.png)<br>
Berikut adalah tampilannya<br>
![Screenshot_16.png](Pic/Screenshot_16.png)<br>
17. Selanjutnya kita akan membuat layout CSS, buat folder baru template pada folder Views<br>
18. Lalu buat file baru header.php atau kalian bisa klik disamping [Click Here](lab11_ci/ci4/app/Views/template/header.php)<br>
19. Selanjut kalian juga buat file baru footer.php atau kalian bisa klik disamping [Click Here](lab11_ci/ci4/app/Views/template/footer.php)<br>
20. Selanjutnya kita edit pada bagian about.php menjadi seperti berikut<br>
![Screenshot_23.png](Pic/Screenshot_23.png)<br>
Maka tampilan akhirnya akan menjadi berikut<br>
![Screenshot_19.png](Pic/Screenshot_19.png)<br>

### Jawaban Pertanyaan & Tugas
Berikut adalah tampilan pada semua link navigasi header<br>
1. About<br>
![Screenshot_19.png](Pic/Screenshot_19.png)<br>
2. Article<br>
![Screenshot_20.png](Pic/Screenshot_20.png)<br>
3. Contact<br>
![Screenshot_18.png](Pic/Screenshot_18.png)<br>

Sekian dari saya<br>
Terimakasih banyak sudah membaca<br>

#### By: Bangkit Akbar Anggara - 312010148 - TI.20.B.1
