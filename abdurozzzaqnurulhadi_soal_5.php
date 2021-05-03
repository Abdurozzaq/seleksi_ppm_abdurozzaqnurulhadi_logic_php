<?php

echo "<pre>Buatlah sebuah aplikasi penampil list menu makanan statis yang mana jika
dijalankan akan menampilkan hasil sebagai berikut :
Makanan
    1. Menu Makanan ke 1
    2. Menu Makanan ke 2
    3. Menu Makanan ke 3
Minuman
    1. Menu Minuman ke 1
    2. Menu Minuman ke 2
    3. Menu Minuman ke 3
Parsel
    1. Menu Parsel ke 1
    2. Menu Parsel ke 2
    3. Menu Parsel ke 3
</pre>";

echo "<h3>Penyelesaian</h3><br>";

echo "Membuat/Memasukan Data ke Array <br><br>";
$data = array(
    "Makanan" => [
        "Menu Makanan ke 1",
        "Menu Makanan ke 2",
        "Menu Makanan ke 3"
    ],
    "Minuman" => [
        "Menu Minuman ke 1",
        "Menu Minuman ke 2",
        "Menu Minuman ke 3"
    ],
    "Parsel" => [
        "Menu Parsel ke 1",
        "Menu Parsel ke 2",
        "Menu Parsel ke 3"
    ],
);

echo " Selesai Lanjut Mendisplay: <br><br>";

foreach ($data as $key => $value) {
    echo $key . "<br>";
    echo "&nbsp 1. " . $value[0] . "<br>";
    echo "&nbsp 2. " . $value[1] . "<br>";
    echo "&nbsp 3. " . $value[2] . "<br>";
};
