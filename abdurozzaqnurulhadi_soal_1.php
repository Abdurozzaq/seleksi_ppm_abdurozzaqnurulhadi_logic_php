<?php
echo "<pre>Rian pergi ke toko alat tulis untuk membeli bolpoin. Harga 1 buah bolpoin Rp 1.750.
Jika Rian membeli 1 lusin bolpoin dan Ia membayar 5 lembar uang lima ribuan.
Berapa uang kembalian yang Rian terima?</pre><br>";
$hargaSatu = "1750";
$uangRianLembar = 5;
$uangRianSatuan = 5000;
$jumlahBeliLusin = 1;

echo "Harga Bolpoin Satuannya: " . $hargaSatu . " Rupiah <br>";
echo "Rian Punya Uang " . $uangRianSatuan . "an " . $uangRianLembar . " Lembar <br> <br>";

echo "Hitung jumlah balpoin yang dibeli rian: <br>";
echo $jumlahBeliLusin . " Lusin " . "dikali " . "12 ";
$jumlahBeliPcs = $jumlahBeliLusin * 12;
echo "Sama dengan: " . $jumlahBeliPcs . "pcs <br><br>";

echo "Hitung harga bolpoin yang ingin dibeli: <br>";
echo $jumlahBeliPcs . " dikali " . $hargaSatu . "<br>";
$hargaTotal = $jumlahBeliPcs * $hargaSatu;
echo "Sama Dengan: " . $hargaTotal . "<br><br>";

echo "Hitung uang yang dimiliki Rian: <br>";
echo $uangRianLembar . " dikali " . $uangRianSatuan . "<br>";
$totalUangRian = $uangRianSatuan * $uangRianLembar;
echo "Sama Dengan: " . $totalUangRian . "<br><br>";

echo "Hitung uang kembalian Rian:<br>";
echo $totalUangRian . " dikurangi " . $hargaTotal . "<br>";
$kembalian = $totalUangRian - $hargaTotal;
echo "Sama Dengan: " . $kembalian . "<br><br>";

echo "<strong>Jadi Uang Kembalian Rian Adalah: " . $kembalian . "</strong>"; 


