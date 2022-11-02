<?php
//Array Numeric
//membuat array yang berisi nama buah-buahan
$buah = array('semangka', 'jeruk', 'apel', 'anggur');
//menampilkan data array dengan indeks ke 2
echo "$buah[2] <br>";
// var_dump($buah);

echo "<br>";

echo "<hr>";

//penamaan isi array
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";

//menampilkan isi array yang bernama jeruk
echo $buah['anggur'];

echo "<hr>";

//array associative
//penamaan isi array variable buah
$buah = array(
    'semangka' => "isinya merah",
    'jeruk' => "rasanya manis",
    'apel' => "warnanya merah",
    'anggur' => "harganya mahal",
);

//menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
echo "<br>";
// var_dump($buah);

echo "<hr>";

// menampilkan array yang berisi nama buah-buahan
$buah = array('semangka', 'jeruk', 'apel', 'anggur');
//count()untuk menghitung isi array.
for ($x = 0; $x < count($buah); $x++) {
    echo $buah[$x] . "<br>";
}


echo "<hr>";

//Perbedaan Array

//array numeric versi php lama
$anggota = array("aziz", "renal", "fahmi");

// var_dump($anggota);

//array numeric versi php baru
$hewan = ["kucing", "panda"];

// //array associative
// $array = [
//     "nama" => 'Aziz',
//     "umur" => '21 Tahun',
//     "jurusan" => 'Teknik Informatika'
// ];
// echo "<br>";
// // var_dump($array);
// echo "$hewan[1] <br>";
// echo $anggota['0'];
