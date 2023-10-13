<h1 align="center">Praktikum 3: Membuat List, Table dan Form </h1>

<table align="center">
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

Buat nama file lab3_list.html
```
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
  </head>
  <body>
    <header>
      <h1>Membuat List</h1>
    </header>
  </body>
</html>
```

### Membuat Order List 
Tambahkan kode <i>ordered list</i>
```
<section id="order-list">
      <h2>Ordered List</h2>
      <ol>
        <li>Pemograman Web</li>
        <li>Sistem Informasi</li>
        <li>Basis Data</li>
      </ol>
</section>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/a9759c4c-5b11-46c9-ac01-d84a0edf4269)

### Membuat Unoreder List
Lalu tambahkan kode <i>unorder list</i>
```
<section id="unorder-list">
      <h2>Unordered List</h2>
      <ul type="circle">
        <li>Struktur Data</li>
        <li>Algoritma &amp; Pemograman</li>
        <li>Jaringan Komputer</li>
      </ul>
</section>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/62c7b833-db3c-4a52-9821-52e15c262d22)

### Membuat Description List 
Tambahkan kode <i>Description List</i>
```
<section id="desc-list">
      <h2>Description List</h2>
      <dl>
        <dt>Fakultas Teknik</dt>
        <dd>Teknik Industri</dd>
        <dd>Teknik Informatika</dd>
        <dd>Teknik Lingkungan</dd>
        <dt>Fakultas Ekonomi dan Bisnis</dt>
        <dd>Akuntansi</dd>
        <dd>Manajemen</dd>
        <dd>Bisnis Digital</dd>
      </dl>
</section>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/5e1f7de2-7060-4219-99d5-21b2d0c5b8cc)

### Membuat tabel
buat file baru bernama lab3_tabel.html
```
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum 3</title>
</head>
<body>
  <header>
    <h1>Membuat Tabel</h1>
  </header>
</body>
</html>
```

Tambahkan kode untuk membuat table sederhana
```
<table border="1">
  <thead>
    <tr>
      <th>No.</th>
      <th>Fakultas</th>
      <th>Program Studi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>Teknik</td>
      <td>Teknik Informatika</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Teknik</td>
      <td>Teknik Industri</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Teknik</td>
      <td>Teknik Lingkungan</td>
    </tr>
  </tbody>
</table>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/5330bf8b-9282-41b2-aca1-212d40293145)

### Mengatur Margin dan Padding
Untuk menambahkan Margin dan Padding, tambahkan atribut Margin dan Padding pada tag table

```
<table border="1" cellpadding="4" cellspacing="0">
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/22964418-22cb-45c2-aaff-6dcb8f3f3b46)

### Menggabungkan Cell
Untuk menggabungkan cell bisa menggunakan rowspan untuk menggabukan barisan dan colspan untuk menggabungkan kolom

```
<table border="1" cellpadding="4" cellspacing="0">
  <thead>
    <tr>
      <th>No.</th>
      <th>Fakultas</th>
      <th>Program Studi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td rowspan="3">Teknik</td>
      <td>Teknik Informatika</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Teknik Industri</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Teknik Lingkungan</td>
    </tr>
  </tbody>
</table
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/23cea828-e7d0-435b-8e97-85e712c9ccec)

### Membuat Form
buat file baru bernama lab3_form.html
```
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum 3</title>
</head>
<body>
  <header>
    <h1>Membuat Form</h1>
  </header>
</body>
</html>
```

Tambahkan kode untuk membuat form sederhana
```
<form action="proses.php" method="post">
    <fieldset>
      <legend>Data Pelanggan</legend>
      <p>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" />
      </p>
      <p>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" cols="20" rows="3"></textarea>
      </p>
      <p>
        <label>Jeniss Kelamin</label>
        <input type="radio" name="kelamin" id="jk_l" value="L" /><label for="jk_l">Laki-Laki</label>
        <input type="radio" name="kelamin" id="jk_p" value="P" /><label for="jk_p">Perempuan</label>
      </p>
      <p>
        <input type="submit" value="Login" />
      </p>
    </fieldset>
  </form>
</body>
```

Tambahkan style pada form
```
<style>
    form p>label {
      display: inline-block;
      width: 100px;
    }

    form input[type="text"],
    form textarea {
      border: 2px solid #197a43;
    }

    form input[type="submit"] {
      border: 1px solid #197a43;
      background-color: #197a43;
      color: #fff;
      font-weight: bold;
      padding: 5px 15px;
    }
</style>
```

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/2502081a-5b41-4f4e-ba86-190b3f83579f)

### Tugas
1. Buatlah form yang menampilkan dropdown menu dan listbox dengan multiple selection.
   - <a href="https://github.com/alifamarta/Praktikum-PemogramanWeb/blob/main/Lab3Web/html/lab3_tugas.html">source code</a>
   
   ![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/853a0afb-abeb-4ab3-9604-f6eb90283bb3)
