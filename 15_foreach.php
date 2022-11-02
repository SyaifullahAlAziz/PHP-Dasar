<?php
//For
echo "<h1>BELAJAR PHP</h1>";

$data = array("Aziz", "Fahmi", "Renaldy");

for ($x = 0; $x < count($data); $x++) {
    echo $data[$x] . "<br>";
}

echo "<hr>";

echo "<h1>BELAJAR PHP</h1>";

echo "<br>";

//Foreach
$data = array("Aziz", "Fahmi", "Renaldy");

foreach ($data as $d) {
    echo $d . "<br>";
}
