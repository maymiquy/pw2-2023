<?php 
// Include file koneksi database
require_once '../praktik1/dbkoneksi.php';

// Ambil data dari form
$_tanggal = $_POST['tanggal'];
$_nomor = $_POST['nomor'];
$_produkID = $_POST['produk_id'];
$_jumlah = $_POST['jumlah'];
$_harga = $_POST['harga'];
$_vendorID = $_POST['vendor_id'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_tanggal;
$ar_data[]=$_nomor;
$ar_data[]=$_produkID;
$ar_data[]=$_jumlah;
$ar_data[]=$_harga;
$ar_data[]=$_vendorID;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO pembelian (tanggal,nomor,produk_id,jumlah,harga,vendor_id) VALUES (?,?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE pembelian SET tanggal=?,nomor=?,produk_id=?,jumlah=?,harga=?,vendor_id=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar pembelian
header('location:list_pembelian.php');
?>
