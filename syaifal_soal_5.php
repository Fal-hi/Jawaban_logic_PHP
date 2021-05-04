<?php
$makanan = "Makanan";
$minuman = "Minuman";
$parsel = "Parsel";

$list = array($makanan, $minuman, $parsel);
sort($list);

echo "Makanan<br>";
$hasil = count($list);
for ($i = 1; $i <= $hasil; $i++) {
    echo "  $i. ";
    echo "Menu $list[0] ke $i<br>";
}

echo "Minuman<br>";
for ($i = 1; $i <= $hasil; $i++) {
    echo "  $i. ";
    echo "Menu $list[1] ke $i<br>";
}

echo "Parsel<br>";
$hasil = count($list);
for ($i = 1; $i <= $hasil; $i++) {
    echo "  $i. ";
    echo "Menu $list[2] ke $i<br>";
}

// echo "Makanan";
// echo "  $i. ";
// echo "Menu $makanan ke $i<br>";
// echo "  $i. ";
// echo "Menu $minuman ke $i<br>";
// echo "  $i. ";
// echo "Menu $parsel    ke $i<br>";