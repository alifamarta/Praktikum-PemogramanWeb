<h1 align="center">Praktikum 5: Javascript</h1>


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
Buat dokumen html lab5_javascript.html
    <html>
    
    <head>
        <title>Mengenal Javascript</title>
    </head>
    
    <body>
        <h1>Pengenalan Javascript</h1>
        <h3>Contoh document.write dan console.log</h3>
        <script>
            document.write('Hello World !');
            console.log('Hello World !');
        </script>
    </body>
    
    </html>/

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/99f2f770-42fb-4c53-97d6-a827d230e39b)

### Javascript Dasar
#### Alert
    <html>
    
    <head>
        <title>alert</title>
    </head>
    
    <body>
        <script language="javascript">
            window.alert("Ini merupakan pesan untuk anda");
        </script>
    </body>
    
    </html>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/3935ccd3-dd6d-4fd3-acb4-092156d374d3)

#### Method
    <html>
    
    <head>
        <title>skrip Javascript</title>
    </head>
    
    <body>
        percobaan memakai Javascript:<br>
        <script lang="Javascript">
            document.write("selamat mencoba javascript<br>");
            document.write("Semoga sukses !");
        </script>
    </body>
    
    </html>
    
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/41d2e113-6357-44c5-87af-2fc4b61ba072)

#### Prompt
    <html>
        <head>
            <title>Pemasukan Data</title>
        </head>
        <body>
            <script lang="javascript">
                let nama = prompt("Siapa nama anda ?", "Masukan nama anda");
                document.write('hai, ' + nama);
            </script>
        </body>
    </html>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/8f065c0e-b3a8-4ac3-b144-e9cda39f4eb2)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/aec649cd-e5ff-401b-803d-a5bf3603206c)

#### Fungsi 
    <html>
    
    <head>
        <title>contoh program javascript</title>
        <script lang="javascript">
            function message() {
                alert("Memanggil javascript lewat body onload")
            }
        </script>
    </head>
    
    <body onload="message()"></body>
    
    </html>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/2ad19d61-a3ad-43e0-af7b-07d650325050)

#### Operasi Aritmatika
    <html>
        <head>
            <title>contoh program javascript</title>
            <script language="javascript">
                function test (a, b){
                    document.write(`<br> perkalian : ${a} * ${b} <br>`);
                    document.write(a*b);
                    document.write(`<br> pembagian : ${a}/${b} <br>`);
                    document.write(a/b);
                    document.write(`<br> penjumlahan : ${a} + ${b} <br>`);
                    document.write(a+b);
                    document.write(`<br> pengurangan : ${a} - ${b} <br>`);
                    document.write(a-b);
                    document.write(`<br> modulus : ${a} % ${b} <br>`)
                    document.write(a%b)
                }
            </script>
        </head>
        <body>
            <input type="button" value="arithmetic" onclick="test(4, 2)">
        </body>
    </html>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/6a13767f-a0bb-43af-a7ef-d78619fdcbdf)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/2cddd81b-4ed7-409a-a1e4-f71a470d3a5b)

#### If Else 
    <html>
    
    <head>
        <title>contoh if-else</title>
    </head>
    
    <body>
        <script lang="javascript">
            let nilai = prompt("nilai (0-100): ", 0);
            let hasil = "";
            if (nilai >= 60) {
                hasil = "lulus";
            } else {
                hasil = "tidak lulus";
            }
            document.write(`hasil: ${hasil}`);
        </script>
    </body>
    
    </html>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/9c7b4967-1832-49ce-bc40-4ae798f72e05)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/f9431f59-a87f-4c2d-8fb3-75801a79089e)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/b2d9f3fc-f04d-4878-a39a-2e39db2d5ba9)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/54873923-da5c-4689-8290-0cc1fea1979f)

#### Switch
    <html>
    
    <head>
        <title>contoh program javascript</title>
        <script lang="javascript">
            function test() {
                let num = window.prompt("Input 1-5")
                switch (num) {
                    case "1":
                        document.write("bilangan satu");
                        break;
                    case "2":
                        document.write("bilangan dua");
                        break;
                    case "3":
                        document.write("bilangan tiga");
                        break;
                    case "4":
                        document.write("bilangan empat");
                        break;
                    case "5":
                        document.write("bilangan lima");
                        break;
                    default:
                        document.write(`bilangan ${num} tidak termasuk`)
                        break;
                }
            }
        </script>
    </head>
    <body>
        <input type="button" value="switch" onclick="test()">
    </body>
    
    </html>


![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/7c5da12e-cfeb-482c-86d7-42be097b7bfc)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/264ca19e-fb06-4ebe-9648-f27f2a739098)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/492f3d43-129c-4f7d-b84f-ce7502ed5d54)

#### Form Input
    <html>
    
    <head>
        <title>Form Input</title>
        <script lang="javascript">
            function test() {
                let val = document.kirim.T1.value
                if (val % 2 === 0) {
                    document.kirim.T2.value = "bilangan genap"
                } else {
                    document.kirim.T2.value = "bilangan ganjil"
                }
            }
        </script>
    </head>
    
    <body>
        <form method="post" name="kirim">
            <p>
                BIL <input type="text" name="T1" size="20" /> MERUPAKAN BIL
                <input type="text" name="T2" size="20" />
            </p>
            <p><input type="button" value="TEBAK" name="B1" onclick="test()" /></p>
        </form>
    </body>
    
    </html>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/cef24e5e-005a-4192-ba9b-8ddb20eee965)

#### Form Button
    <html>
    
    <head>
        <title>Form Input</title>
        <script lang="javascript">
            function test() {
                let val = document.kirim.T1.value
                if (val % 2 === 0) {
                    document.kirim.T2.value = "bilangan genap"
                } else {
                    document.kirim.T2.value = "bilangan ganjil"
                }
            }
        </script>
    </head>
    
    <body>
        <form method="post" name="kirim">
            <p>
                BIL <input type="text" name="T1" size="20" /> MERUPAKAN BIL
                <input type="text" name="T2" size="20" />
            </p>
            <p><input type="button" value="TEBAK" name="B1" onclick="test()" /></p>
        </form>
    </body>
    
    </html>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/122a6d26-bcb8-4d72-9fae-c00eb12d3dc1)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/086938f5-c457-4f57-aafb-5309e5c85403)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/44c83846-be16-46ee-9465-01e4d61d3df4)

### HTML DOM
Pilihan checkbox yang akan menghasilkan perhitungan otomatis

    <html>
    
    <head>
        <title>Daftar Menu</title>
        <script>
            function hitung(ele) {
                let total = document.getElementById("total").value;
                total = total ? parseInt(total) : 0;
                let harga = 0;
    
                if (ele.checked) {
                    harga = ele.value;
                    total += parseInt(harga);
                } else {
                    harga = ele.value;
                    if (total > 0) total -= parseInt(harga);
                }
    
                document.getElementById("total").value = total;
            }
        </script>
    </head>
    
    <body>
        <h1>Daftar Menu Makanan</h1>
        <label><input type="checkbox" value="5000" id="menu1" onclick="hitung(this);" />
            Ayam Goreng Rp 5.0000</label><br />
        <label><input type="checkbox" value="500" id="menu2" onclick="hitung(this);" />
            Tempe Goreng Rp 500</label><br />
        <label><input type="checkbox" value="2500" id="menu3" onclick="hitung(this);" />
            Telur Dadar Rp 2.500</label>
        <hr />
        <strong>Total Bayar: Rp <input type="text" id="total" /></strong>
    </body>
    
    </html>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/459d3831-59bc-41a2-b763-ce82b5fd0fbc)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/c0e7549d-ccee-42f4-9d23-0db945661c2a)
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/b8c0861f-d28c-462b-92e3-9a441be0daf9)

## Tugas
### 1. Buat script untuk melakukan validasi pada isian form.
- <a href="https://github.com/alifamarta/Praktikum-PemogramanWeb/blob/main/Lab5Web/lab5_javascript/tugas.html">HTML</a> & <a href="https://github.com/alifamarta/Praktikum-PemogramanWeb/blob/main/Lab5Web/lab5_javascript/css/style.css">CSS</a>

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/76b99375-9993-46a2-addc-e5bbfaceb796)

