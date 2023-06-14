<?php 
require_once '../praktik1/dbkoneksi.php';
include_once 'header.php';
?>

<?php 
    // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
    $_id = isset($_GET['id']) ? $_GET['id'] : null;
    if(!empty($_id)){
        // ambil data vendor berdasarkan id
        $sql = "SELECT * FROM kartu WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_id]);
        $row = $st->fetch();
    }else{
        // jika tidak ada parameter id pada URL, maka dianggap input data baru
        // inisialisasi variabel $row sebagai array kosong
        $row = [];
    }
?>
<div class="ms-5 me-5 m-3 text-center"><h1>Kartu</h1></div>
<form method="POST" action="proses_kartu.php">
  <div class="card p-3 m-5">
  <div class="form-group mt-2 row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?php if(isset($row['kode'])) echo $row['kode']; ?>">
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
    <label for="diskon" class="col-4 col-form-label">Diskon</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="diskon" name="diskon" 
        value="<?php if(isset($row['diskon'])) echo $row['diskon']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group mt-2 row">
    <label for="iuran" class="col-4 col-form-label">Iuran</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="iuran" name="iuran" value="<?php if(isset($row['iuran'])) echo $row['iuran']; ?>"
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