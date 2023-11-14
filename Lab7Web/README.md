<h1 align="center">Praktikum 7: PHP Dasar</h1>

<br>

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

## Praktikum 

### Install XAMPP
Pertama tama unduh terlebih dahulu XAMPP dari <a href="https://www.apachefriends.org/download.html">```apachefriends.org```</a> lalu install ke dalam direktori

### Menjalankan Web Server
Jalankan web server dari menu XAMPP control 

![Screenshot 2023-11-14 203731](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/a465e421-604d-412f-b587-c245e6731a76)

Ujicoba server sudah bekerja dengan cara <a href="http://127.0.0.1">```http://127.0.0.1```</a> atau <a href="http://127.0.0.1">```http://localhost```</a>

Jika berhasil akan tampil 

![](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/d3b770fd-e61c-4dd7-8aef-382e74539ae6)

### Memulai PHP
Buat folder lab7_php_dasar pada root directory web server ((direktori yang diinstal disini saya memakai C:) C:\xampp\htdocs)

![Screenshot 2023-11-14 203844](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/c8d0b77c-5c36-4f22-897b-a0b7cdf35630)

### PHP Dasar 
Buat file dengan nama php_dasar.php pada direktori nya kemudian tambahkan kode

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body>
            <h1>Belajar PHP dasar</h1>
            <?php
                echo "hello world";
            ?>
        </body>
    </html>

lalu liat hasilnya dengan URL <a href="http://localhost/lab7_php_dasar/php_dasar.php">```http://localhost/lab7_php_dasar/php_dasar.php```</a>

![Screenshot 2023-11-13 101214](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/a3e383a4-62af-4071-872d-716c7bc145d9)

#### Variable PHP
Tambahkan Variable dalam program

        <?php 
        $nim = "540178323";
        $nama = 'Ujang';
        echo "NIM : ". $nim. "<br>";
        echo "Nama: $nama";
        ?>

hasilnya

![Screenshot 2023-11-13 101320](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/36cf3dc3-f91e-43ab-a4ae-727ce19cbcc5)

#### Predefine Variable dengan $_GET

    <?php 
    echo "Selamat Datang ". $_GET['nama'];
    ?>

Akses dengan cara <a href="http://localhost/lab7_php_dasar/latihan2.php?nama=Thomas">```http://localhost/lab7_php_dasar/latihan2.php?nama=Thomas```</a>

![Screenshot (69)](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/90538b48-b578-4b0f-a445-cef40a0b19f9)

##### Membuat Form Input

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h2>Form Input</h2>
            <form method="post">
                <label>Nama : </label>
                <input type="text" name="nama">
                <input type="submit" value="Kirim">
            </form>
    
            <?php 
            echo "Welcome ". $_POST['nama'];
            ?>
        </body>
    </html>

![Web capture_13-11-2023_102739_localhost](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/1c1d7515-6a71-4d65-813b-b376153a7930)
