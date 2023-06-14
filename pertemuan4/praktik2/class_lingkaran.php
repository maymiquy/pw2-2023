<?php
// Nama class biasakan diawali dengan huruf besar
class Lingkaran {
    // Property
    public $jarijari; // property
    const PHI = 3.14; // konstanta

    // Method 1

    // function getLuas() {
    //     return self::PHI * $this->jarijari * $this->jarijari;
    // }

    // function getKeliling() {
    //     return 2 * self::PHI * $this->jarijari;
    // }

    // Method 2
    function __construct($r) {
        $this->jarijari = $r;
    }

    function getLuas(){
        $luas = pow($this->jarijari, 2) * self::PHI;
        return $luas;
    }

    function getKel(){
        $kel = 2 * $this->jarijari * self::PHI;
        return $kel;
    }
}
?>

