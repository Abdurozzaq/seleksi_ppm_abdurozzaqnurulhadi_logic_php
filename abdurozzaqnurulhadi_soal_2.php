<?php

echo "<pre>Setyo mempunyai tiga lembar uang sepuluh ribuan, empat lembar uang lima ribuan
dan lima lembar uang dua puluh ribuan. Jika Ia akan membeli mainan seharga
Rp55.000. Berapa jumlah uang Setyo setelah membeli mainan?</pre>";

echo "<h3>Penyelesaian</h3><br>";

echo "Hitung total uang Setyo: <br>";
$lembarUang10rb = 3;
$lembarUang5rb = 4;
$lembarUang20rb = 5;

$jumlahUang10rb = $lembarUang10rb * 10000;
echo $lembarUang10rb . " lembar uang 10ribuan dikali 10000 = " . $jumlahUang10rb . "<br>";   
$jumlahUang5rb = $lembarUang5rb * 5000;
echo $lembarUang5rb . " lembar uang 5ribuban dikali 5000 = " . $jumlahUang5rb . "<br>";   
$jumlahUang20rb = $lembarUang20rb * 20000;
echo $lembarUang20rb . " lembar uang 20ribuan dikali 20000 = " . $jumlahUang20rb . "<br>";   
$jumlahUangSeluruhnya = $jumlahUang10rb + $jumlahUang20rb + $jumlahUang5rb;
echo "Jumlah total uang Seluruhnya: " . $jumlahUangSeluruhnya. "<br><br>";

echo "Harga Mainan yang ingin dibeli: " . 55000 . " rupiah<br><br>";
$uangKembalian = $jumlahUangSeluruhnya - 55000;
echo "<strong>Jadi uang Setyo setelah membeli mainan adalah: " . $jumlahUangSeluruhnya . " rupiah - 55000 rupiah = " . $uangKembalian . " rupiah </strong>";  