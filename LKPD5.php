<?php
    $array1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $array2 = [77, 99, 55, 81, 45, 90, 91, 98];

    //Menggunakan fungsi array_intersect untuk mengembalikan array yang berisi elemen-elemen yang sama dari dua atau lebih array.
    $sama = array_intersect($array1, $array2);

    //Fungsi array_diff untuk mengembalikan array yang berisi elemen-elemen yang tidak sama dari dua atau lebih array.
    //Fungsi array_merge untuk menggabungkan dua atau lebih array menjadi satu array.
    $beda = array_merge(array_diff($array1, $array2), array_diff($array2, $array1));

    //Fungsi implode untuk mengubah array menjadi string
    $hasilSama = implode(', ', $sama);
    $hasilBeda = implode(', ', $beda);
    
    echo "<b>Bilangan yang ada di kedua variabel </b>: $hasilSama" . "<br>";
    echo "<b>Bilangan yang tidak ada di kedua variabel </b>: $hasilBeda";
?>