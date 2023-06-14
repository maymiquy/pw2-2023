<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Hasil Nilai Siswa</title>
</head>

<body class="pt-5">
    <h1 class="text-center">Hasil</h1>
<fieldset class="mt-5 mx-auto border shadow-xl">
<?php
if (isset($_POST['proses'])){
	// Buat variable untuk menangkap dan menyimpan data yang dikirim
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama_lengkap'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
  
    // Tampilkan data dari variable
    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
    echo '<hr/>';
    echo '<br/>Rata-rata : ' . $total_nilai;
	echo '<hr/>';
}
?>
</fieldset>


</body>

</html>