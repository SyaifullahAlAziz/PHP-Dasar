<?php

//Perbedaan Array

//array numeric versi php lama
$anggota = array("aziz", "renal", "fahmi");

//array numeric versi php baru
$hewan = ["kucing", "panda", "beruang", "kelinci"];

//array associative
//penamaan isi array 1 per satu
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";

//Dalam satu array
$array = [
    "nama" => 'Aziz',
    "umur" => '21 Tahun',
    "jurusan" => 'Teknik Informatika'
];

// echo "<br>";
// echo "$hewan[1] <br>";
// echo $anggota['0'];

// menampilkan array yang berisi nama buah-buahan
$buah = array('semangka', 'jeruk', 'apel', 'anggur');
// count()untuk menghitung isi array.
for ($x = 0; $x < count($buah); $x++) {
    echo $buah[$x] . "<br>";
}


echo "<hr>";
