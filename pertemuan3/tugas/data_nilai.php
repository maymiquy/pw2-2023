<?php
include_once 'header.php';
?>

<div class="container">
    <h2>Data Mahasiswa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Rerata</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Miqdam</td>
                <td>Statistika dan Probabilitas</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>A</td>
                <td>Sangat Memuaskan</td>
                <td>Lulus</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rul</td>
                <td>Statistika dan Probabilitas</td>
                <td>78</td>
                <td>81</td>
                <td>80</td>
                <td>79.75</td>
                <td>B</td>
                <td>Memuaskan</td>
                <td>Lulus</td>
            </tr>

            <?php
            /**
             * Task 3
             * 1. Import libfungsi.php
             * 2. Tampilkan data dalam bentuk table
             * 3. Berikan error handling untuk mengatasi ketika form belum disubmit
             * Note: Sesuaikan dengan isi table yang sudah ada						
             */

            require_once 'libfungsi.php';


            if (isset($_POST['submit'])) {
                $number = 3;
                $nama = $_POST['nama'];
                $matkul = $_POST['matkul'];
                $nUTS = $_POST['nUTS'];
                $nUAS = $_POST['nUAS'];
                $nTugas = $_POST['nTugas'];

                if($matkul == "DDP"){
                    $ketMatkul = "Dasar Dasar Pemrograman";
                }elseif($matkul == "PemWeb"){
                    $ketMatkul = "Pemrograman Web 2";
                }elseif($matkul == "Statistik"){
                    $ketMatkul = "Statistik dan Probabilitas";
                }else{
                    $ketMatkul = "Data tidak Valid";
                }

                $nrataAkhir = ($nUAS + $nUTS + $nTugas)/3 ;
                $nrata = round($nrataAkhir, 2);
                $lulus = kelulusan($nrata);
                $grade = grade($nrata);
                $predikat = predikat($nrata);

                ?>
            <tr>
                <td><?= $number++ ?></td>
                <td><?= $nama ?></td>
                <td><?= $ketMatkul ?></td>
                <td><?= $nUTS ?></td>
                <td><?= $nUAS ?></td>
                <td><?= $nTugas ?></td>
                <td><?= $nrata?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
                <td><?= $lulus ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once 'footer.php';
?>