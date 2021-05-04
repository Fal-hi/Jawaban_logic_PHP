<?php 
    $sepuluh = 3 * 10000;
    $lima = 4 * 5000;
    $duapuluh = 5 * 20000;
    $totaluang = $sepuluh + $lima + $duapuluh;
    $mainan = 55000;
    $kembalian = $totaluang - $mainan;

    echo "Jumlah semua uang Setyo sebesar "; echo "Rp" .number_format($totaluang);
    echo "<br>";
    echo "Lalu Setyo membeli mainan seharga "; echo "Rp" . number_format($mainan);
    echo "<br>";
    echo "Jadi total uang Setyo "; echo "Rp" . number_format($totaluang); echo " dikurangi dengan harga mainan ";
    echo "Rp" . number_format($mainan);
    echo "<br>";
    echo "Uang Setyo pun tersisa "; echo "Rp" . number_format($kembalian);
?>
