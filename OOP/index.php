<?php


class Student {
    //properties
    // access modifier
    // public bisa diakses siapapun 
    // protected tidak bisa diakses 
    // private tidak bisa akses
    protected $name;
    private $kelas;

    function __construct($name = 'default nama', $kelas = 'default kelas') {
        $this->name = $name;
        $this->kelas = $kelas;
    }

    public function nama_lengkap() {
        return $this->name. ' itu nama gua....!!';
    }

    public function kelas_privasi() {
        return $this->kelas. ' itu adalah kelas gua....!';
    }
    // //getter
    function get_name() {
        return $this->name. ' '. $this->kelas;
    }
}

$rofi = new Student('rofi', 'xii');
$rafli = new Student('rafli', 'xii');
$najwah = new Student('najwah', 'xii');
$azzam = new Student('azzam', 'xii');

echo $rofi->kelas_privasi();
echo "<br>";
echo $rofi->kelas;