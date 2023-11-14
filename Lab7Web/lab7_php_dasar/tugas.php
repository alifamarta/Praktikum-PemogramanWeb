<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>

    <!-- CSS -->
    <style>
        body {
            background: bisque;
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }

        .form {
            margin: auto;
            margin-top: 5em;
            padding: 10px;
            width: 400px;
            background: #fff;
            box-shadow: 0 0 10px #ccc;
            border-radius: 10px;
        }

        form input[type="text"],
        input[type="date"],
        select {
            padding: 18px;
            width: 400px;
            background: #e9e9e9;
            border: none;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        input[type="submit"] {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            padding: 12px 20px 12px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover{
            background-color: #424242;
        }

        .result {
            padding: 10px;
            width: 400px;
            background: #fff;
            box-shadow: 0 0 10px #ccc;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="form">
        <h1>FORM</h1>
        <form method="post">
            <div>
                <label for="nama"><h4>Nama</h4></label>
                <input type="text" name="nama" placeholder="Nama">
            </div>
            <br>
            <div>
                <label for="tglLahir"><h4>Tanggal Lahir</h4></label>
                <input type="date" name="tglLahir" placeholder="Tanggal Lahir">
            </div>
            <br>
            <div>
                <label for="pekerjaan"><h4>Pekerjaan</h4></label>
                <select name="pekerjaan">
                    <option selected disabled>Pilih Pekerjaan</option>
                    <option value="Fullstack Developer">Fullstack Developer</option>
                    <option value="Front-End Developer">Front-End Developer</option>
                    <option value="Back-End Developer">Back-End Developer</option>
                    <option value="Web Designer">Web Designer</option>
                    <option value="none">Belum Bekerja</option>
                </select>
            </div>
            <br>
            <input type="submit" value="Kirim">
        </form>
    </div>
    <div class="result">
        <!-- PHP -->
        <?php
            echo 'Nama Anda '. $_POST['nama']. "<br><br>";
            
            $date = $_POST['tglLahir'];
            
            $birthdate = new DateTime($date);
            $now = new DateTime();
            
            $usia = $now->diff($birthdate)->y;
            echo "Anda lahir pada tanggal $date dan berusia $usia <br><br>";

            $job = $_POST['pekerjaan'];

            if ($job == "Fullstack Developer") {
                echo "Anda bekerja sebagai $job dengaan gaji Rp 8.500.000";
            } elseif ($job == "Front-End Developer") {
                echo "Anda bekerja sebagai $job dengan gaji Rp 7.900.000";
            } elseif ($job == "Back-End Developer") {
                echo "Anda bekerja sebagai $job dengan gaji Rp 8.000.000";
            } elseif ($job == "Web Designer") {
                echo "Anda bekerja sebagai $job dengan gaji Rp 7.000.000";
            } else {
                echo "Anda tidak memiliki pekerjaan";
            }
        ?>
    </div>
</body>

</html>