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

![](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/03c0cf1c-5a51-47ab-a36e-669d728c08e7)

#### Operator 

    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);

    echo "Gaji sebelum pajak = Rp $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp"
    ?>

![](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/0b327823-fa62-4c42-90b4-1efb9b87482a)

#### Kondisi if 

    <?php 
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
      echo "Minggu";
    } elseif ($nama_hari == "Monday") {
      echo "Senin";
    } else {
      echo "Selasa";
    }
    ?>

![](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/8332a7eb-0e5a-4694-a848-4eb443704405)

#### Kondisi switch

    <?php
    switch ($nama_hari) {
      case 'Sunday':
        echo 'Minggu';
        break;
      case 'Monday':
        echo 'Senin';
        break;
      case 'Tuesday':
          echo 'Selasa';
        break;
      default:
        echo 'Sabtu';
        break;
    }
    ?>

![](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/39e14821-d3c4-463d-91be-a5fd99fd1a26)

#### Pengulangan for

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i < 10; $i++) { 
      echo "Perulangan ke: ". $i. '<br />';
    }

    echo '<br>';

    echo "Perulangan menurun dari 10 ke 1 <br />";
    for ($i=10; $i >= 1; $i--) { 
      echo "Perulangan ke: ". $i. "<br />";
    }
    ?>

![](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/d4427988-ecf3-4a29-98ff-5c4051eed4fc)

#### Pengulangan while

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i = 1;
    while ($i <= 10) {
      echo "Perulangan ke:". $i. "<br />";
      $i++;
    }
    ?>

![Web capture_14-11-2023_215050_localhost](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/efc1ce52-1806-4249-8020-095b19bb6ae3)


#### Pengulangan do while

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $a = 1;
    do {
      echo "Perulangan ke: ". $a."<br />";
      $a++;
    } while ($a <= 10);
    ?>

![](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/edaaa4df-13f5-43fa-908a-2ae9b3cdb012)

#### Tugas 
Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

- <a href="https://github.com/alifamarta/Praktikum-PemogramanWeb/blob/main/Lab7Web/lab7_php_dasar/tugas.php">PHP</a>

![](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/a7a1586d-0d67-4256-b34e-c7cc1e16cc27)
