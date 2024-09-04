<?php
function hitung_pecahan_uang($jumlah_uang)
{
    $pecahan_uang = array(
        100000 => 0,
        50000 => 0,
        20000 => 0,
        10000 => 0,
        5000 => 0,
        2000 => 0,
        1000 => 0,
        500 => 0
    );

    foreach ($pecahan_uang as $pecahan => &$jumlah) {
        //Fungsi floor digunakan untuk membulatkan angka.
        $jumlah = floor($jumlah_uang / $pecahan);
        $jumlah_uang %= $pecahan;
    }

    foreach ($pecahan_uang as $pecahan => $jumlah) {
        if ($jumlah > 0) {
            echo "Rp $pecahan : $jumlah lembar" . "<br>";
        }
    }

    if ($jumlah_uang > 0) {
        echo "Sisa Rp  $jumlah_uang tidak dapat dipecah menjadi lembar uang\n";
    }
}

hitung_pecahan_uang(140000);
?>