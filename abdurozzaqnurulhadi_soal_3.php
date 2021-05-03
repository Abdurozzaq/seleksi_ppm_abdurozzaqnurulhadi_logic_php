<?php

echo "<pre>Pak rian memiliki 100 cabang toko kelontong, pada setiap harinya pak rian pasti
mengeluarkan Rp 10.000 biaya pengeluaran untuk toko kelontong ke 1. dan biaya
pengeluaran untuk toko kelontong ke 68 adalah sebesar Rp. 30.100 . maka
berapakah biaya pengeluaran untuk toko kelontong ke 81 ?</pre>";

echo "<h3>Penyelesaian</h3>";

// Diketahui
$banyakCabang = 100;
$biayaToko1 = 10000;
$biayaToko68 = 30100;

echo "Diketahui: <br>";
echo "Banyak Cabang = " . $banyakCabang . "<br>";
echo "Biaya Toko 1 = " . $biayaToko1 . "<br>";
echo "Biaya Toko 68 = " . $biayaToko68 . "<br><br>";

echo "Penyelesaian: <br>";
echo "Mencari Selisih Tiap Toko: <br>";
$selisih68Dan1 = $biayaToko68 - $biayaToko1;
$selisihUrutanToko = 68 - 1;
$bedaTiapToko = $selisih68Dan1 / $selisihUrutanToko;
echo "Selisih/Beda Tiap Toko Adalah: " . $bedaTiapToko . "<br><br>";

echo "Looping untuk mencari biaya toko ke 81 dengan acuan Selisih/Beda Tiap Toko<br>";

$biayaToko81 = $biayaToko68;
for ($i = 69; $i <= 81; $i++) {
    $biayaToko81 = $biayaToko81 + 300;
}
echo "Selesai Looping... <br>";
echo "<strong>JADI: Biaya Pengeluaran Untuk Toko Kelontong ke 81 Adalah " . "$biayaToko81 </strong>";


// echo "Menggunakan RUMUS Matematika Barisan Aritmatika<br>";
// echo "Mencari Biaya Toko Ke 81: <br>";
// echo "RUMUS: 81 = 10000 + (81-1) * 300<br>";
// $nmin1 = 81 - 1;
// $biayaToko81 = $biayaToko1 + $nmin1 * $bedaTiapToko;
// echo "<strong>JADI: Biaya Pengeluaran Untuk Toko Kelontong ke 81 Adalah " . "$biayaToko81 </strong>";


