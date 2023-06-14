<?php 
/**
* Task 2
* 1. Rapihkan form ini
* 2. Gunakan method POST					
*/
    include_once 'header.php';
?>


<div class="container my-5 mb-5">
    <h1 class="text-center mb-4">Form Nilai</h1>
    <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="data_nilai.php">
        <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama_lengkap" type="text" class="form-control" placeholder="Siapa nama kamu?" name="nama" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="matkul" class="col-4 col-form-label" >Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" required="required" class="form-select" name="matkul">
                        <option value="">----- Pilih Mata Kuliah -----</option>
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="PemWeb">Pemrograman Web</option>
                        <option value="Statistik">Statistika dan Probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="nilai_uts" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." name="nUTS" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="nilai_uas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." name="nUAS" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Praktikum</label>
                <div class="col-8">
                    <input id="nilai_tugas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." name="nTugas" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="offset-4 col-8">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once 'footer.php';
?>