<?php
$usia = array(12, 15, 17, 20, 25, 30, 35, 40, 45, 50);
$anak_anak = 0;
$dewasa = 0;

foreach ($usia as $u) {
    if ($u < 17) {
        $anak_anak++;
    } else {
        $dewasa++;
    }
}

echo "Jumlah anak-anak: $anak_anak" . "<br>";
echo "Jumlah dewasa: $dewasa" . "<br>";
?>