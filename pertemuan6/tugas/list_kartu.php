<?php
// include database connection
require_once '../praktik1/dbkoneksi.php';
include_once 'header.php';
?>

<?php
// select all data from table "produk"
$sql = "SELECT * FROM kartu";
// execute the query
$rs = $dbh->query($sql);
?>

<div class="card p-2 m-4">
    <h1 class="text-center">List Kartu</h1>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Diskon</th>
            <th>Iuran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // initialize counter
        $id = 1;
        // loop through the result set
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $id++ ?></td>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['diskon'] ?></td>
                <td><?= $row['iuran'] ?></td>
                <td>
                    <!-- buttons to view, edit, and delete a product -->
                    <a class="btn btn-primary" href="view_kartu.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="form_kartu.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary" href="delete_kartu.php?id=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            // increment counter
            $id++;
        }
        ?>
    </tbody>
</table>
<a class="btn btn-success" href="form_vendor.php" role="button">Buat Baru Kartu</a>
</div>
