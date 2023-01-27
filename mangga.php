<?php
namespace Mangga;

require_once "main.php";
use main\Buah as Buah;

class Mangga extends Buah {
    public $berat;
    public $website;
    public function __construct($nama, $warna, $berat) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
        $this->website = parent::pesanMethod();
    }

    public function pesan(){
        echo "{$this->nama} ini beratnya {$this->berat} kg. warnanya {$this->warna}";
        echo '<br>';
    }

    public function namaWeb()
    {
        return $this->website;
    }

    public function nilai(){
        return self::$value;
    }

    public static $nilaiFunction = "nilainya";

}