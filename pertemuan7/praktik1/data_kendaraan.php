<?php
require_once 'class_kendaraan.php';

    $motor = new Motor("Motor","Bensin",2);
    $submartine = new Submarine("Kapal Selam","Biogas",700);
    
    echo "Info Motor : <br>";
    $motor->getInfo();
    echo "<br><br>";
    echo "Info Kapal Selam : <br>";
    $submartine->getInfo();

?>