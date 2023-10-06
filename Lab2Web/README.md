# <p align="center"> Praktikum 2: CSS Dasar</p>

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

### Membuat HTML
```
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSS Dasar</title>
  </head>
  <body>
    <header>
      <h1>CSS Internal dan <i>Inline CSS</i></h1>
    </header>
    <nav>
    <a href="lab2_css_dasar.html">CSS Dasar</a>
    <a href="lab2_css_eksternal.html">CSS Eksternal</a>
    <a href="lab1_tag_dasar.html">HTML Dasar</a>
    </nav>
    <!-- CSS ID Selector -->
      <div id="intro">
        <h1>Hello World</h1>
        <p>
          Kami sedang belajar HTML dan CSS dasar, pada mata kuliah <b>Pemrograman
          Web</b> di <i>Universitas Pelita Bangsa</i>. Pelajaran pertama yang kami dapat
          adalah membuat tampilan web sederhana dalam rangka mengenal tag-tag dasar HTML
          dan CSS.</p>
    <!-- CSS Class Selector -->
    <a class="button btn-primary" href="#intro">Informasi selengkapnya.</a>
    </div>
  </body>
</html>
```

hasilnya:

![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/47bac036-c8c6-408d-a67b-cbd390adeb30)

### Mendeklarasikan CSS Internal

```
<style>
      body {
        font-family: sans-serif;
      }
      header {
        min-height: 80px;
        border-bottom: 1px solid #77ccef;
      }
      h1 {
        font-size: 24px;
        color: #0f189f;
        text-align: center;
        padding: 20px 10px;
      }
      h1 i {
        color: #131212;
      }
</style>
```

hasilnya
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/c4fceddf-b4f9-4393-8199-780c29e05dae)

### Menambah Inline CSS
```
<p style="text-align: center; color: #ccd8e4"> 
```

hasilnya
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/7469cf7b-10c7-4883-998c-f021f3fb041d)

### Membuat CSS Eksternal
```
nav {
  background: #64ccc5;
  color: #fff;
  padding: 10px;
}
nav a {
  color: #fff;
  text-decoration: none;
  padding: 10px 20px;
}
nav .active,
nav a:hover {
  background: #176b87;
}
```

hasilnya
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/5c9dc1da-8201-46b4-9566-59cd145ce1f8)


### Menambahkan CSS Selector
```
/* ID Selector */
#intro {
  background: #053b50;
  border: 1px solid #64ccc5;
  min-height: 100px;
  padding: 10px;
}
#intro h1 {
  text-align: left;
  border: 0;
  color: #fff;
}

/* Class selector */
.button {
  padding: 15px 20px;
  background: #bebcbd;
  color: #fff;
  display: inline-block;
  margin: 10px;
  text-decoration: none;
}
.btn-primary {
  background: #176b87;
}

```

hasilnya 
![image](https://github.com/alifamarta/Praktikum-PemogramanWeb/assets/115516820/c232310a-74ad-49bf-a439-b51ada0bb85b)
