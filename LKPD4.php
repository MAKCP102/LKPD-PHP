
  <?php
  //Loop untuk menghitung perkalian 1 terbalik
  for ($angka = 1; $angka <= 2; $angka++) { 
    //Loop untuk menghitung perkalian dari 10 sampai 1
    for ($perkalian = 10; $perkalian >= 1; $perkalian--) {
      // Menampilkan hasil perkalian
      echo "$perkalian x $angka = " . ($angka * $perkalian) . "<br>";
    }
    echo "<br>";
  }
  ?>