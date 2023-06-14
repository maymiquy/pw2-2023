<?php 
require_once '../praktik1/dbkoneksi.php';
include_once 'header.php'
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM kartu WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<div class="card m-5 p-1">
    <h1>View Kartu</h1>
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><?=$row['kode']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td><?=$row['diskon']?></td>
        </tr>
        <tr>
            <td>Iuran</td>
            <td><?=$row['iuran']?></td>
        </tr>
    </tbody>
</table>

</div>
