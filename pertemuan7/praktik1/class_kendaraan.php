<?php 

    class Kendaraan {
        protected $jenis;
        protected $bahanbakar;

        function __construct($jenis, $bahanbakar) {
            echo $this->jenis = $jenis;
            echo $this->bahanbakar =$bahanbakar;
        }

        protected function getInfo() {
            echo "Jenis Kendaraan : " . $this->jenis . "<br>";
            echo "Bahan Bakar : " . $this->bahanbakar . "<br>";
        }

    }

    class Motor extends Kendaraan {
        public $roda;

        public function __construct($jenis,$bahanbakar,$roda) {
            parent::__construct($jenis, $bahanbakar);
            $this->roda = $roda;
        }

        public function getInfo(){
            parent::getInfo();
            echo "Jumlah Roda : " . $this->roda . "<br>";
        }
    }

    class Submarine extends Kendaraan{
        public $maks_kedalaman;

        public function __construct($jenis,$bahanbakar,$max_depth) {
            parent::__construct($jenis,$bahanbakar);
            $this->maks_kedalaman = $max_depth;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Kedalaman Maks : " . $this->maks_kedalaman . "meter<br>";
        }
    }

?>