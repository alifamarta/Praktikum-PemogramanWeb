<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Latihan 4</title>
  </head>

  <body>
    <h1>Operator</h1>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);

    echo "Gaji sebelum pajak = Rp $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp"
    ?>

    <h1>Kondisi if</h1>
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

    <h1>Kondisi Switch</h1>
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
    
    <h1>Perulangan For</h1>
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

    <h1>Perulangan while</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i = 1;
    while ($i <= 10) {
      echo "Perulangan ke:". $i. "<br />";
      $i++;
    }
    ?>

    <h1>Perulangan do while</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $a = 1;
    do {
      echo "Perulangan ke: ". $a."<br />";
      $a++;
    } while ($a <= 10);
    ?>
  </body>
</html>
