<?php 
// Include file koneksi database
require_once '../praktik1/dbkoneksi.php';

// Ambil data dari form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_diskon = $_POST['diskon'];
$_iuran = $_POST['iuran'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_kode;
$ar_data[]=$_nama;
$ar_data[]=$_diskon;
$ar_data[]=$_iuran;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Cek apakah kode kartu yang akan disimpan sudah ada di dalam database atau belum
    $sql_check = "SELECT kode FROM kartu WHERE kode = ?";
    $st_check = $dbh->prepare($sql_check);
    $st_check->execute([$_kode]);

    // Jika kode kartu sudah ada di dalam database, tampilkan pesan error
    if($st_check->rowCount() > 0) {
        echo "Kode kartu sudah ada di dalam database!";
        exit;
    }

    // Jika kode kartu belum ada di dalam database, buat SQL INSERT
    $sql = "INSERT INTO kartu (kode,nama,diskon,iuran) VALUES (?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE vendor SET kode=?,nama=?,diskon=?,iuran=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar vendor
header('location:list_kartu.php');
?>
