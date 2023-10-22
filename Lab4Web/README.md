<h1 align="center">Praktikum 4: CSS Layout</h1>

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

## Buat Box Element
Pertama buat dokumen HTML bernama ```lab4_box.html```.
```
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Box Element</title>
</head>
<body>
  <header>
  <h1>Box Element</h1>
  </header>
</body>
</html>
```

lalu tambahkan tag div.
```
<section>
  <div class="float">
    <div class="div1">div 1</div>
    <div class="div2">div 2</div>
    <div class="div3">div 3</div>
  </div>
</section>
```

### CSS Float Property
Selanjutnya tambahkan deklarasi CSS pada head untuk membuat float element.

    <style>
      div {
        float: left;
        padding: 10px;
      }

      .div1 {
        background: red;
      }

      .div2 {
        background: yellow;
      }

      .div3 {
        background: green;
      }
    </style>
Hasilnya

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/d1d7b384-4f01-41fb-b664-49db5142f580)

### Mengatur Clearfix Element
Clearfix digunakan untuk mengatur element setelah float element. Property clear digunakan untuk mengaturnya.
<br>
Tambahkan element div lainnya setelah div3.

    <section>
      <div class="float">
        <div class="div1">div 1</div>
        <div class="div2">div 2</div>
        <div class="div3">div 3</div>
        <div class="div4">div 4</div>
      </div>

kemudian atur property clear pada CSS

      .div4 {
        background-color: aqua;
        clear: left;
        float: none;
      }
      
Hasilnya

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/5c39f805-b4b8-43b6-b27a-bb4ecd1d93c4)

## Membuat Layout Sederhana
buat folder baru dengan nama lab4_layout kemudian buat file baru didalamnya dengan nama home.html dan style.css .

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Layout Sederhana</title>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <div id="container">
      
      </div>
    </body>
    </html>

Kemudian buat kerangka layout dengan semantics element seperti berikut.

    <header>
      <h1>Layout Sederhana</h1>
    </header>
    <nav>
      <a href="home.html" class="active">Home</a>
      <a href="artikel.html">Artikel</a>
      <a href="about.html">About</a>
      <a href="kontak.html">Kontak</a>
    </nav>
    <section id="hero"></section>
    <section id="wrapper">
      <section id="main"></section>
      <aside id="sidebar"></aside>
    </section>
    <footer>
      <p>&copy; 2021 - Universitas Pelita Bangsa</p>
    </footer>

Hasilnya.

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/5e12cf82-9599-421d-8f90-6060e0009966)

Kemudian tambahkan kode CSS untuk membuat layout.

    /* import google font */
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400");
    
    /* Reset CSS */
    * {
      margin: 0;
      padding: 0;
    }
    
    body {
      line-height: 1;
      font-size: 100%;
      font-family: "Open Sans", sans-serif;
      color: #5a5a5a;
    }
    
    #container {
      width: 980px;
      margin: 0 auto;
      box-shadow: 0 0 1em #ccc;
    }
    
    /* header */
    header {
      padding: 20px;
    }
    
    header h1 {
      margin: 20px 10px;
      color: #b5b5b5;
    }

Hasilnya.

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/128f5e99-435b-419d-bca5-17f36c174c08)

### Membuat Navigasi
Kemudian selanjutnya mengatur navigasi.

    /* navigasi */
    nav {
      display: block;
      background-color: #1f5faa;
    }
    
    nav a {
      padding: 15px 30px;
      display: inline-block;
      color: #fff;
      font-size: 14px;
      text-decoration: none;
      font-weight: bold;
    }
    
    nav a.active,
    nav a:hover {
      background-color: #2b83ea;
    }

Hasilnya.
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/b2186b75-2ed3-499c-b533-49a8f74219fb)

### Membuat Hero Panel
Selanjutnya membuat hero panel. Tambahkan kode HTML dan CSS.

    <section id="hero">
      <h1>Hello World!</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
        lorem elit, iaculis innisl volutpat, malesuada tincidunt arcu. Proin
        in leo fringilla, vestibulum mi porta, faucibus felis. Integer
        pharetra est nunc, nec pretium nunc pretium ac.
      </p>
      <a href="home.html" class="btn-large">Learn more &raquo;</a>
    </section>
    
<br>

    /* Hero Panel */
    #hero {
      background-color: #e4e4e5;
      padding: 50px 20px;
      margin-bottom: 20px;
    }
    
    #hero h1 {
      margin-bottom: 20px;
      font-size: 35px;
    }
    
    #hero p {
      margin-bottom: 20px;
      font-size: 18px;
      line-height: 25px;
    }

Hasilnya
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/713e0311-05a6-420e-af40-dd1da1e92e2a)

### Mengatur Layout Main dan Sidebar
Untuk mengatur main content dan sidebar gunakan CSS float.

    /* main content */
    #wrapper {
      margin: 0;
    }
    
    #main {
      float: left;
      width: 640px;
      padding: 20px;
    }
    
    /* sidebar area */
    #sidebar {
      float: left;
      width: 260px;
      padding: 20px;
    }

### Membuat Sidebar Widget
Tambahkan element lain dalam sidebar.

      <aside id="sidebar">
        <div class="widget-box">
          <h3 class="title">Widget Header</h3>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>

        <div class="widget-box">
          <h3 class="title">Text</h3>
          <p>Als dieser schwarze Vater auf sein Handy schaute, sah dieser schwarze Vater, wie der Spieler nach China
            reiste, dann wollte dieser schwarze Vater nicht übertroffen werden und machte ein Foto vor den
            Zwillingsgebäuden, dieser Spieler wollte auch nicht sein übertroffen und er ging zum Burj Khalifa und machte
            dort ein Foto. Auch dieser Schwarze wollte nicht übertroffen werden, er machte auch Fotos in Paris und
            schließlich trafen sich die beiden</p>
        </div>
      </aside>

Kemudian tambahkan CSS.

    /* widget */
    .widget-box {
      border: 1px solid #eee;
      margin-bottom: 20px;
    }
    
    .widget-box .title {
      padding: 10px 16px;
      background-color: #428bca;
      color: #fff;
    }
    
    .widget-box ul {
      list-style-type: none;
    }
    
    .widget-box li {
      border-bottom: 1px solid #eee;
    }
    
    .widget-box li a {
      padding: 10px 16px;
      color: #333;
      display: block;
      text-decoration: none;
    }
    
    .widget-box li:hover a {
      background-color: #eee;
    }
    
    .widget-box p {
      padding: 15px;
      line-height: 25px;
    }

Hasilnya.
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/dc1a3bf6-7d1d-4985-8829-cee80479ce7b)

### Mengatur Footer
Atur Tampilan footer dengan CSS.

    /* footer */
    footer {
      clear: both;
      background-color: #1d1d1d;
      padding: 20px;
      color: #eee;
    }
    
Hasilnya.
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/c77e9f5c-30d9-418c-83ac-79c90c99024d)

### Menambahkan Element lainnya pada Main Content 
    <section id="wrapper">
      <section id="main">
        <div class="row">
          <div class="box">
            <img src="https://dummyimage.com/120/db7d25/fff.png" class="image-circle">
            <h3>Heading</h3>
            <p>Ich brauche mehr Kugeln, brauche mehr Waffen</p>
            <a href="#">View detail</a>
          </div>
          <div class="box">
            <img src="https://dummyimage.com/120/3e73e6/fff.png" class="image-circle">
            <h3>Heading</h3>
            <p>Wir können nicht erwarten, dass Gott die ganze Arbeit erledigt</p>
            <a href="#">View detail</a>
          </div>
          <div class="box">
            <img src="https://dummyimage.com/120/71e6d4/fff.png" class="image-circle">
            <h3>Heading</h3>
            <p>Ayer me levanté remojando un limón. damas y caballeros sin red de seguridad me gustaría hacer una
              voltereta</p>
            <a href="#">View detail</a>
          </div>
        </div>
    </section>
    
<br>

    /* box */
    .box {
      display: block;
      float: left;
      width: 33.333333%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      padding: 0 10px;
      text-align: center;
    }
    
    .box h3 {
      margin: 15px 0;
    }
    
    .box p {
      line-height: 20px;
      font-size: 14px;
      margin-bottom: 15px;
    }
    
    .box img {
      border: 0;
      vertical-align: middle;
    }
    
    .image-circle {
      height: 120px;
      width: 120px;
      border-radius: 50%;
    }
    
    .row {
      margin: 0 -10px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: content-box;
    }
    
    .row:after,
    .row:before,
    .entry:after,
    .entry:before {
      content: '';
      display: table;
    }
    
    .row:after,
    .entry:after {
      clear: both;
    }    

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/8bf51252-819b-41a5-8285-5541c94a9bbe)
