<?php

// variabel hari
$hari = "Minggu";

// percabangan untuk menentukan hari kerja atau libur
if($hari == "Sabtu" || $hari == "Minggu"){

    // jika hari Sabtu atau Minggu
    echo "$hari adalah hari libur";

}else{

    // selain itu berarti hari kerja
    echo "$hari adalah hari kerja";

}

?>