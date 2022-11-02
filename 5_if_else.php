<?php

// if(kondisi){
//     jika kondisi dipenuhi
// }else{
// jika kondisi tidak dipenuhi
// } 

//mengenal kondisi If-Else

$teman = "aziz";
if ($teman == "aziz") {
    echo "dia adalah teman saya";
} else {
    echo "dia bukan teman saya";
}

echo "<hr>";

//mengenal kondisi If-Else Bercabang

$teman = "aziz";
if ($teman == "fahmi") {
    echo "fahmi adalah teman saya";
} elseif ($teman == "aziz") {
    echo "aziz adalah teman saya";
} else {
    echo "saya tidak punya teman";
}
