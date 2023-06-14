<?php 
require_once '../praktik1/dbkoneksi.php';
include_once 'header.php';
?>

<?php 
    // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        // ambil data vendor berdasarkan id
        $sql = "SELECT * FROM vendor WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // jika tidak ada parameter id pada URL, maka dianggap input data baru
        // inisialisasi variabel $row sebagai array kosong
        $row = [];
    }
?>
<div class="ms-5 me-5 m-3 text-center"><h1>Registrasi Vendor</h1></div>
<form method="POST" action="proses_vendor.php">
  <div class="card p-3 m-5">
  <div class="form-group mt-2 row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="nomor" name="nomor" type="text" class="form-control"
        value="<?php if(isset($row['nomor'])) echo $row['nomor']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group mt-2 row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?php if(isset($row['nama'])) echo $row['nama']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group mt-2 row">
    <label for="kota" class="col-4 col-form-label">Kota</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="kota" name="kota" 
        value="<?php if(isset($row['kota'])) echo $row['kota']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group mt-2 row">
    <label for="kontak" class="col-4 col-form-label">Kontak</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="kontak" name="kontak" value="<?php if(isset($row['kontak'])) echo $row['kontak']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group mt-2 row">
    <div class="offset-4 col-8">
    <?php
        $button = (empty($_id)) ? "Simpan":"Update"; 
    ?>
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?=$button?>"/>
      <input type="hidden" name="id" value="<?=$_id?>"/>
    </div>
  </div>
  </div>
</form>