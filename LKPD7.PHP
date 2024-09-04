<?php
function bandingkan_nama($nama1, $nama2) {
    //strlen() untuk menghitung jumlah karakter dalam setiap nama.
    $jumlah_karakter_nama1 = strlen($nama1);
    $jumlah_karakter_nama2 = strlen($nama2);

    echo "Jumlah karakter nama '$nama1' adalah $jumlah_karakter_nama1"."<br>";
    echo "Jumlah karakter nama '$nama2' adalah $jumlah_karakter_nama2\n"."<br>";

    if ($jumlah_karakter_nama1 > $jumlah_karakter_nama2) {
        $selisih = $jumlah_karakter_nama1 - $jumlah_karakter_nama2;
        echo "Nama '$nama1' memiliki jumlah karakter lebih banyak dengan selisih $selisih karakter\n";
    } elseif ($jumlah_karakter_nama2 > $jumlah_karakter_nama1) {
        $selisih = $jumlah_karakter_nama2 - $jumlah_karakter_nama1;
        echo "Nama '$nama2' memiliki jumlah karakter lebih banyak dengan selisih $selisih karakter\n";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama\n";
    }
}

bandingkan_nama("John Cena", "Jane Doe");
?>