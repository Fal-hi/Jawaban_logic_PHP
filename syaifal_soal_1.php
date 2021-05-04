<?php 
    $bolpoin = 1750;
    $uangrian = 5 * 5000;
    $lusin = 12;
    $jumlahtotal = $lusin * $bolpoin;
    $kembalian = $uangrian - $jumlahtotal;

    echo "Harga Bolpoin"; echo " Rp".number_format($bolpoin);
    echo "<br>";
    echo "Lalu Rian membeli 1 lusin bolpoin, 1 Lusin = 12 Buah";
    echo "<br>";
    echo "Uang Rian berjumlah"; echo " Rp".number_format($uangrian);
    echo "<br>";
    echo "Jadi $lusin X Harga 1 Bolpoin"; echo " = Rp" .number_format($jumlahtotal);
    echo "<br>";
    echo "Jadi Kembaliannya adalah"; echo " Rp" . number_format($uangrian); echo " - Rp" . number_format($jumlahtotal);
    echo " = Rp" . number_format($kembalian);
