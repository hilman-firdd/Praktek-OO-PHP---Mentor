<?php

interface Buah {
    const MESSAGE = "BUAH BUAH APA YANG ENAK!";
    public function pesan();
    public function kenalkan();
}

class Mangga implements Buah {
    public $berat;
    const MESSAGE_MANGGA = "INI MESSAGE DARI MANGGA";
    public function __construct($nama, $warna, $berat) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function pesan(){
        echo "{$this->nama} ini beratnya {$this->berat} kg. warnanya {$this->warna}";
        echo '<br>';
    }

    public function surat() {
        echo self::MESSAGE_MANGGA;
    }

    public function kenalkan() : string {
        return "Hallo saya buah {$this->nama}";
    }
}

class Strawberry implements Buah {
    public $rasa;

    function __construct($nama, $rasa) {
        $this->nama = $nama;
        $this->rasa = $rasa;
    }

    public function pesan(){
        echo "{$this->nama} ini rasanya {$this->rasa}";
    }

    public function kenalkan() : string {
        return "Hallo saya buah {$this->nama}";
    }
}

$mangga = new Mangga('Mangga', 'kuning', 50);
$strawbery = new Strawberry('Strawberry', 'asem manis');
// $duren = new Duren('Duren', 'manis');

echo $mangga->pesan();
echo '<br>';
echo $mangga->kenalkan();
echo '<br>';
echo $mangga->surat();
echo '<br>';