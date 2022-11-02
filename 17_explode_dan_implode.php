<?php

//Memecahkan string dengan Fungsi Explode

$kalimat = "belajar pemograman php";

//memisahkan string menjadi array
$data = explode(" ", $kalimat);

//string menjadi array

print_r($data);

echo "<br>";
echo "<br>";

echo " Data 1 =" . $data[0];
echo "<br>";
echo " Data 2 =" . $data[1];
echo "<br>";
echo " Data 3 =" . $data[2];
echo "<br>";
echo " Data 4 =" . $data[3];
echo "<br>";
echo " Data 5 =" . $data[4];
echo "<br>";

echo "<hr>";

//Menggabungkan String Dengan Impolde   

$kalimat = "belajar pemograman di malas ngoding";

//memisahkan string menjadi array
$data = explode(" ", $kalimat);


echo "<br>";
echo "<br>";
echo "<h3>menggabungkan string dengan implode</h3>";
echo "<br>";

//menggabungkan string kembali dengan fungsi implode()
echo implode(" ", $data);
