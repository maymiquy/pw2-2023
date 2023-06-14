<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $buah = array(
    array("id" => 1, "nama" => "Anggur", "warna" => "ungu", "stok" => 100, "harga" => 15000, "deskripsi" => "Buah segar yang berukuran seperti kelereng"),
    array("id" => 2, "nama" => "Jeruk", "warna" => "Oranye", "stok" => 500, "harga" => 10000, "deskripsi" => "Jeruk mempunyai rasa asam"),
    array("id" => 3, "nama" => "Semangka", "warna" => "Hijau", "stok" => 20, "harga" => 20000, "deskripsi" => "Besar mengandung banyak mineral dan mempunyai daging buah berwarna merah")
  );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover table-dark">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          foreach ($buah as $b) {
            echo "<tr>";
            echo "<td>" . $b["id"] . "</td>";
            echo "<td>" . $b["nama"] . "</td>";
            echo "<td>" . $b["warna"] . "</td>";
            echo "<td>" . $b["stok"] . "</td>";
            echo "<td>" . $b["harga"] . "</td>";
            echo "<td>" . $b["deskripsi"] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
