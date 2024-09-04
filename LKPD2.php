<?php

function hitungKompensasi($jamMulai, $jamPulang)
{
  // Konfigurasi jam kerja dan kompensasi
  $jamKerja = 8;
  $kompensasiPertama = 50000;
  $kompensasiBerikutnya = 25000;

  // Hitung jam kerja yang dijalani
  $jamKerjaDijalani = $jamPulang - $jamMulai;

  // Cek apakah pegawai bekerja melebihi jam kerja
  if ($jamKerjaDijalani > $jamKerja) {
    // Hitung jam kerja yang melebihi
    $jamlebih = $jamKerjaDijalani - $jamKerja;

    // Hitung kompensasi
    $kompensasi = $kompensasiPertama + ($jamlebih - 1) * $kompensasiBerikutnya;

    return $kompensasi;
  } else {
    return 0;
  }
}


$jamMulai = 8; // Pukul 8 pagi
$jamPulang = 22; // Pukul 10 malam

$kompensasi = hitungKompensasi($jamMulai, $jamPulang);

echo "<b>Lama jam kerja: </b>" . $jamPulang - $jamMulai . "<br>";
//number_format adalah sebuah function yang tersedia dalam PHP untuk memformat angka menjadi format nominal
echo "<b>Kompensasi yang diterima:</b> Rp. " . number_format($kompensasi, 0, ',', '.');