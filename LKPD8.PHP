<?php
function angka($data, $cari) {
    $hasil = 0;
    //looping untuk array
    foreach ($data as $value) {
      if ($value == $cari) {
        $hasil++;
      }
    }
    return $hasil;  
  }
  
  $data = [80, 90, 75, 100, 85, 100, 66];
  $cari = 100;
  
  //in_array untuk mengecek apakah nilai $cari ada dalam array $data.
  if (in_array($cari, $data)) {
    echo "Jumlah angka $cari = " . angka($data, $cari);
  } else {
    echo "Angka $cari tidak ditemukan";
  }
?>