<?php 
    // membuat fungsi
    function perkenalan($nama, $salam){
        echo $salam.",";
        echo " Perkenalkan, nama saya ".$nama."<br>";
        echo " Senang berkenalan dengan anda<br>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("jarwo", "Hai");

    echo "<hr/>";

    $saya = "Bambang";
    $ucapanSalam = "Selamat Pagi";

    // memenaggilnya lagi
    perkenalan($saya, $ucapanSalam);
?>