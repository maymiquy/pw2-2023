<?php
    require_once "class_lingkaran.php";

    echo 'Nilai PHI : ' . Lingkaran::PHI;

    $lingkar1 = new Lingkaran(50000);
    $lingkar2 = new Lingkaran(100);
    echo '<br><br>';
    echo '<br>Luas Lingkaran 1 : ' . $lingkar1->getLuas();
    echo '<br>Luas Lingkaran 2 : ' . $lingkar2->getLuas();
    echo '<br><br>';
    echo '<br>Keliling Lingkaran 1 : ' . $lingkar1->getKel();
    echo '<br>Keliling Lingkaran 2 : ' . $lingkar2->getKel();


?>