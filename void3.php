<?php 
    // membuat fungsi
    function perkenalan($nama, $salam){
        echo $salam.",";
        echo " Perkenalkan, nama saya ".$nama."<br>";
        echo " Senang berkenalan dengan anda<br>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Usro", "Hai");

    echo "<hr/>";

    $saya = "Bedu";
    $ucapanSalam = "Selamat Pagi";

    // memenaggilnya lagi
    perkenalan($saya, $ucapanSalam);
?>