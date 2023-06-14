<?php

class Kasus {
    protected $nama;
    protected $harga;

    function __construct($nama, $harga) {
        echo $this->nama = $nama;
        echo $this->harga = $harga;
    }

    protected function getInfo() {
        echo "Nama Barang : " . $this->nama . "<br>";
        echo "Harga : " . $this->harga . " IDR<br>";
    }

}

class Baju extends Kasus {
    public $ukuran;
    public $warna;

    public function __construct($nama, $harga, $ukuran, $warna) {
        parent::__construct($nama, $harga);
        $this->ukuran = $ukuran;
        $this->warna = $warna;
    }

    public function getInfo(){
        parent::getInfo();
        echo "Ukuran : " . $this->ukuran . "<br>";
        echo "Warna : " . $this->warna . "<br>";
    }
}

class Sepatu extends Kasus {
    public $ukuran;
    public $merk;

    public function __construct($nama, $harga, $ukuran, $merk) {
        parent::__construct($nama, $harga);
        $this->ukuran = $ukuran;
        $this->merk = $merk;
    }

    public function getInfo() {
        parent::getInfo();
        echo "Ukuran : " . $this->ukuran . "<br>";
        echo "Merk : " . $this->merk . "<br>";
    }
}

?>
