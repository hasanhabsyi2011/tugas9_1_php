<?php
function deret_fibonacci($jumlah)
{
  // siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;

  //simpan string angka awal
  $hasil = "$angka_sebelumnya $angka_sekarang";

  for ($i=0; $i<$jumlah; $i++)
  {
      // hitung angka fibonacci
      $output = $angka_sekarang + $angka_sebelumnya;
      // hasilnya ditambahkan ke string $hasil
      $hasil = $hasil." $output";

      //siapkan angka untuk perhitungan berikutnya
      $angka_sebelumnya = $angka_sekarang;
      $angka_sekarang = $output;
  }
  return $hasil;
}

echo deret_fibonacci(20);


?>
