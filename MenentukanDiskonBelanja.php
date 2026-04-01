<?php

// total belanja
$total_belanja = 150000;

// percabangan untuk menentukan diskon
if($total_belanja >= 100000){

    // jika belanja lebih dari 100000 mendapat diskon
    $diskon = $total_belanja * 0.10;
    echo "Total belanja: $total_belanja <br>";
    echo "Diskon 10%: $diskon";

}else{

    // jika kurang dari 100000 tidak mendapat diskon
    echo "Total belanja: $total_belanja <br>";
    echo "Tidak mendapatkan diskon";

}

?>