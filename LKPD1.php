<?php
function cekAngka($kalimat)
{
    // (regex / /\d/)untuk memeriksa apakah kalimat tersebut mengandung angka atau tidak.
    $pola = '/\d/';
    //Fungsi preg_match digunakan untuk memeriksa apakah kalimat tersebut cocok dengan pola regex yang telah ditentukan.
    if (preg_match($pola, $kalimat)) {
        return true;
    } else {
        return false;
    }
}

$kalimat = "Selamat ulang tahun yang ke-17";
if (cekAngka($kalimat)) {
    echo "$kalimat";
} else {
    echo "Kalimat tidak mengandung angka";
}
?>