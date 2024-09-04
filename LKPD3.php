<?php
for ($i = 1; $i <= 10; $i++) {
    $result = $i * 5;
    //strpos untuk memeriksa apakah string $result mengandung karakter '0'
    if (!strpos((string)$result, '0')) {
        echo "$i x 5 = $result <br>";
    }
}
?>