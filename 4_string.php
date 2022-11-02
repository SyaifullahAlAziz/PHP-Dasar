<?php

//menghitung jumlah karakter
$kalimat = "Belajar Pemrograman PHP";
echo strlen($kalimat);

echo "<br>";

//menghitung jumlah kata pada string
$kalimat = "Belajar pemrograman PHP";
echo str_word_count($kalimat);

echo "<br>";

//membalik string   
$kalimat = "Belajar pemograman PHP";
echo strrev($kalimat);

echo "<br>";

// memfilter dan mengganti string dengan str replace
// str_replace("yang ingin diganti", "penganti", "isi string");

$kalimat = "Belajar Pemograman PHP";
echo str_replace("Belajar", "Membaca", $kalimat);
