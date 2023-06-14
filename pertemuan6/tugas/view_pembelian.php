<?php 
require_once '../praktik1/dbkoneksi.php';
include_once 'header.php';

// Mendapatkan nilai id dari parameter GET
$_id = $_GET['id'];

// Membuat query SQL untuk mengambil data pembelian dengan id tertentu
$sql = "SELECT * FROM pembelian WHERE id=?";
$st = $dbh->prepare($sql);

// Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
$st->execute([$_id]);

// Mengambil hasil query dan menyimpannya ke dalam variabel $row
$row = $st->fetch();
?>

<!-- Menampilkan data pembelian dalam bentuk tabel -->
<div class="card m-5 p-1">
    <h1>Pembelian</h1>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?= $row['id'] ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><?= $row['tanggal'] ?></td>
            </tr>
            <tr>
                <td>Nomer</td>
                <td><?= $row['nomor'] ?></td>
            </tr>
            <tr>
                <td>Produk ID</td>
                <td><?= $row['produk_id'] ?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><?= $row['jumlah'] ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><?= $row['harga'] ?></td>
            </tr>
            <tr>
                <td>Vendor ID</td>
                <td><?= $row['vendor_id'] ?></td>
            </tr>
        </tbody>
    </table>
</div>
