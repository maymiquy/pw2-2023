<?php

require_once 'dbkoneksi.php';
include_once 'header.php';
?>



<?php

$_id = isset($_GET['id']) ? $_GET['id'] : null;

if (!empty($_id)) {

    // edit

    $sql = "SELECT * FROM pelanggan WHERE id=?";

    $st = $dbh->prepare($sql);

    $st->execute([$_id]);

    $row = $st->fetch();

} else {

    // new data

    $row = [];

}

?>



<form method="POST" action="proses_pelanggan.php">

    <div class="form-group m-2 row">

        <label for="kode" class="col-4 col-form-label">Kode</label>

        <div class="col-8">

            <div class="input-group">

                <input id="kode" name="kode" type="text" class="form-control" value="">

            </div>

        </div>

    </div>

    <div class="form-group m-2 row">

        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>

        <div class="col-8">

            <div class="input-group">

                <input id="nama" name="nama" type="text" class="form-control" value="">

            </div>

        </div>

    </div>

    <div class="form-group m-2 row">

        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>

        <div class="col-8">

            <div class="input-group">

                <input id="jk" name="jk" value="p" type="radio" class="form-control">Perempuan

                <input id="jk" name="jk" value="L" type="radio" class="form-control">Laki-Laki

            </div>

        </div>

    </div>

    <div class="form-group m-2 row">

        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>

        <div class="col-8">

            <div class="input-group">

                <input id="tmp_lahir" name="tmp_lahir" value="" type="text" class="form-control">

            </div>

        </div>

    </div>

    <div class="form-group m-2 row">

        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>

        <div class="col-8">

            <div class="input-group">

                <input id="tgl_lahir" name="tgl_lahir" value="" type="date" class="form-control">

            </div>

        </div>

    </div>

    <div class="form-group m-2 row">

        <label for="email" class="col-4 col-form-label">Email</label>

        <div class="col-8">

            <div class="input-group">

                <input id="email" name="email" value="" type="email" class="form-control">

            </div>

        </div>

    </div>

    <div class="form-group m-2 row">

        <label for="jenis" class="col-4 col-form-label">Kartu</label>

        <div class="col-8">

            <?php

            $sqljenis = "SELECT * FROM kartu";

            $rsjenis = $dbh->query($sqljenis);

            ?>

            <select id="kartu_id" name="kartu_id" class="custom-select">

                <?php

                foreach ($rsjenis as $rowjenis) {

                ?>

                    <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>

                <?php

                }

                ?>

                <!--

        <option value="1">Elektronik</option>

        <option value="2">Furniture</option>

        <option value="3">Makanan</option>-->



            </select>

        </div>

    </div>

    <div class="form-group m-2 row">

        <div class="offset-4 col-8">

            <?php

            $button = (empty($_id)) ? "Simpan" : "Update";

            ?>

            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />

            <input type="hidden" name="id" value="<?= $_id ?>" />

        </div>

    </div>

</form>