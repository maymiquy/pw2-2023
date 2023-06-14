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
<div class="ms-5 me-5 m-3 text-center"><h1>Registrasi Pembelian</h1></div>
<form method="POST" action="proses_pembelian.php">
  <div class="card p-3 m-5">
  <div class="form-group mt-2 row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="tanggal" name="tanggal" type="text" class="form-control"
        value="<?php if(isset($row['tanggal'])) echo $row['tanggal']; ?>">
      </div>
    </div>
  </div>
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
    <label for="produk_id" class="col-4 col-form-label">Produk ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="produk_id" name="produk_id" type="text" class="form-control" 
        value="<?php if(isset($row['produk_id'])) echo $row['produk_id']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group mt-2 row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="jumlah" name="jumlah" 
        value="<?php if(isset($row['jumlah'])) echo $row['jumlah']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group mt-2 row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="harga" name="harga" value="<?php if(isset($row['harga'])) echo $row['harga']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group mt-2 row">
    <label for="vendor_id" class="col-4 col-form-label">Vendor ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="vendor_id" name="vendor_id" value="<?php if(isset($row['vendor_id'])) echo $row['vendor_id']; ?>"
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