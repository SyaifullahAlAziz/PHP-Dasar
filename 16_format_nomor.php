<?php

//number_format(angka,angka_di_belakang_koma,pemisah_desimal,pemisah_ribuan);

echo "<h2>Penggunaan Fungsi number_format() di PHP <br></h2>";

$angka = "20000000";

echo number_format($angka);
// hasilnya : 20,000,000

echo "<br>";

echo number_format($angka, 2);
// hasilnya : 20,000,000.00

echo "<br>";

echo number_format($angka, 2, ",", ".");
// hasilnya : 20.000.000,00

echo "<br>";

echo "Rp." . number_format($angka) . ",-";
// hasilnya : Rp. 20,000,000 ,-
