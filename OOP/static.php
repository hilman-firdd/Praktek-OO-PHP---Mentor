<?php

Class Binatang {
    const MESSAGE = "https://smkpersis02.sch.id";
    
    public static $value = 55.5;

    public static function pesanMethod(){
        return self::MESSAGE;
    }
}

class domba extends Binatang {
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

echo Domba::$nilaiFunction;
$mangga = new Domba('Mangga', 'kuning', 50);

echo $mangga->pesan();
echo '<br>';
echo $mangga->namaWeb();
echo '<br>';
echo $mangga->nilai();
