<?php
$siswa = [
    [
        'nama' => 'andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

//foreach untuk mengiterasi array
foreach ($siswa as $student) {
    $jumlah_nilai = array_sum($student['nilai']); //array_sum untuk menghitung jumlah semua nilai dalam sebuah array.
    $rata_rata = $jumlah_nilai / count($student['nilai']); //count untuk menghitung jumlah elemen dalam sebuah array 
    echo "Rata-rata nilai " . $student['nama'] . " adalah " . $rata_rata . "<br>";
}
?>