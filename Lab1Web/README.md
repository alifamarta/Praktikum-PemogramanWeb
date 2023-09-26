<h1><p align="center">Praktikum 1: HTML Dasar</h1>
<table>
  <tr>
    <th colspan="2">DATA MAHASISWA</th>
  </tr>
  <tr>
    <td>Nama</td>
    <td>Alif Nur Fathlii Amarta</td>
  </tr>
  <tr>
    <td>NIM</td>
    <td>312210326</td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>TI.22.A3</td>
  </tr>
</table>

### Membuat Paragraf
```
<!-- paragraf pertama -->
<p>
  Kami sedang belajar HTML dasar, pada matakuliah Pemograman Web di
  prodi Teknik Informatika Universitas Pelita Bangsa
  Pelajaran pertama yang kami dapat adalah membuat tampilan web sederhana
  dalam mengenal tag-tag dasar HTML.
</p>

<!-- paragraf kedua -->
<p>
  Ini adalah paragraf yang terdiri dari beberapa kalimat yang saling
  mendukung sehingga terbentuk menjadi kesatuan. Paragraf dengan menggunakan
  tag dasar HTML.
</p>
```
![Screenshot 2023-09-26 154039](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/b893815f-ee0d-4193-8c33-80edecc18c14)


atur atribut paragraf
```
<p align="center">
  Ini adalah paragraf yang terdiri dari beberapa kalimat yang saling
  mendukung sehingga terbentuk menjadi kesatuan. Paragraf dengan menggunakan
  tag dasar HTML.
</p>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/8851e999-3dfb-45cc-b61c-e54ebdc08935)

### Menambahkan Judul 
```
<!-- paragraf pertama -->
<h1>Belajar Dasar HTML</h1>

 <!-- paragraf kedua -->
<h2>Paragraf pada HTML</h2>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/0bc537ee-2181-4c67-93c6-212e765669c0)

### Memformat Teks
```
<!-- paragraf pertama -->
<h1>Belajar Dasar HTML</h1>
<p>
  Kami sedang belajar HTML dasar, pada matakuliah <b>Pemograman Web</b> di
  prodi <i>Teknik Informatika</i> <mark>Universitas Pelita Bangsa</mark>.
  Pelajaran pertama yang kami dapat adalah membuat tampilan web sederhana
  dalam mengenal tag-tag dasar HTML.
</p>

<!-- paragraf kedua -->
<h2>Paragraf pada HTML</h2>
<p align="center">
  Ini adalah paragraf yang terdiri dari beberapa kalimat yang saling
  mendukung sehingga terbentuk menjadi kesatuan. Paragraf dengan menggunakan
  tag dasar HTML.
</p>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/8efe9eec-9e87-4f69-9510-9db3a5f51f4d)

### Menyisipkan Gambar
```
<h3>Menyisipkan gambar</h3>
<img src="Clarkson.jpg" width="480" />
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/3098e175-e733-4439-a5e7-e5ed2d6763f9)

### Menambahkan Hyperlink
```
<nav>
<a href="lab1_tag_dasar.html"><b>DASAR HTML</b></a>
</nav>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/ea08b251-c07b-4246-8446-da4e043d9571)

#### Menjawab Pertanyaan

<b>1. Lakukan perubahan pada kode sesuai dengan keinginan anda, amati perubahannya adakah
error ketika terjadi kesalahan penulisan tag? </b> <br>
Tidak ada error dan HTML akan berjalan seperti normal. 
<br>

<b>2. Apa perbedaan dari tag ```< p >``` dengan tag ```< br >``` , berikan penjelasannya! </b> <br>
```<br>``` digunakan untuk menggerakan teks ke barisan baru sedangkan ```<p>``` digunakan untuk membuat paragraf baru, ```<br>``` bisa digunakan untuk menambah barisan baru kedalam sebuah teks.
<br>

<b>3. Apa perbedaan atribut ```title``` dan ```alt``` pada tag ```<img>```, berikan penjelasannya! </b> <br>
```alt``` adalah untuk menyediakan tag alt gambar untuk menggambarkan gambar ke crawler mesin pencari dan pembaca layar untuk aksesibilitas web yang lebih baik. ```title``` adalah untuk memberikan penjelasan tentang tag alt gambar dan URL gambar dalam atribut ```src```.
<br>

<b>4. Untuk mengatur ukuran gambar, digunakan atribut width dan height. Agar tampilan gambar
proporsional sebaiknya kedua atribut tersebut diisi semua atau tidak? Berikan penjelasannya! </b> <br>
Hanya dengan menggunakan ```width``` foto akan menjadi lebih presisi tetapi ```height``` bisa mengatur foto semaunya 
<br>

<b>5. Pada link tambahkan atribut target dengan nilai atribut bervariasi ( ```_blank```, ```_self```, ```_top```, ```_parent``` ), apa yang terjadi pada masing-masing nilai antribut tersebut? </b> <br>
- ```_blank```: Membuka dokumen yang dituju di jendela atau tab baru. 
- ```_self```: Membuka dokumen yang dituju di jendela atau frame yang sama dengan elemen yang diklik. Ini adalah nilai default jika atribut target tidak ditentukan. 
- ```_parent```: Membuka dokumen yang dituju di frame <i>parent</i> dari elemen yang diklik. Jika elemen tersebut tidak ada dalam frame, perilakunya sama seperti _self. 
- ```_top```: Membuka dokumen yang dituju di jendela penuh, menggantikan semua frame, termasuk frame luar. Jika elemen tersebut tidak ada dalam frame, perilakunya sama seperti _self. 
