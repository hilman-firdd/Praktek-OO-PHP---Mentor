<?php

include "mangga.php";
include "strawberry.php";
use Mangga\Mangga as Mangga;
use Strawberry\Strawberry as Strawberry;

// echo Mangga::$nilaiFunction;
$mangga = new Mangga('Mangga', 'kuning', 50);
$strawberry = new Strawberry('Strawberry', 'merah', 50);

echo $mangga->pesan();
echo '<br>';
echo $mangga->namaWeb();
echo '<br>';
echo $mangga->nilai();
echo '<br>';
echo '---------------INI DARI CLASS YANG BEDA-----------';
echo '<br>';

echo $strawberry->pesan();