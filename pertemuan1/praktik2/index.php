<?php

// Variable Sistem
// variable built in PHP (variable yang sudah ada di php)
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo "<br>";

// Variable User
// variable yang dibuat user
$name = "Miq";
$age = 22;
$weight = 55;

echo "nama saya adalah " . $name;

 /*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
  define ("SITE_NAME", "Elena");
  const BASE_URL = "https://elena.nurulfikri.ac.id/";

	// Variable konstan tidak bisa dirubah nilainya
	define ("SITE_NAME", "AIS"); // ---> error

  // Menampilkan variable konstanta
  echo "Site name: " . SITE_NAME . "<br/>";
  echo "URL: " . BASE_URL . "<br/>";
?>