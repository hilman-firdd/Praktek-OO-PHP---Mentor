<?php
namespace Strawberry;

include_once "main.php";
use main\Buah as Buah;

class Strawberry extends Buah {
    public $berat;
    public function __construct($nama, $warna, $berat) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function pesan(){
        echo "{$this->nama} ini beratnya {$this->berat} kg. warnanya {$this->warna}";
        echo '<br>';
    }

}