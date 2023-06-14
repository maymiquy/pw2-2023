<?php
require_once 'class_kasus.php';

$baju = new Baju("Kemeja", 250000, "XL", "Biru");
echo "<br>";
$sepatu = new Sepatu("Sneakers", 500000, "42", "Nike");
echo "<br><br><br>";
echo "Info Baju : <br>";
$baju->getInfo();
echo "<br><br>";
echo "Info Sepatu : <br>";
$sepatu->getInfo();

?>
