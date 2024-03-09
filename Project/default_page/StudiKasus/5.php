<?php
    $nilai = [80, 78, 72, 84, 92, 88];
    
    // semua nilai
    echo "Nilai saya : ";
    echo implode(", " , $nilai);
    echo "<br>Nilai yang paling kecil adalah : " . min($nilai);
    echo "<br>Nilai yang paling besar adalah : " . max($nilai) . "<br>";
    
    // mengurutkan nilai dari yang terkecil
    asort ($nilai);
    echo "Nilai dari yang terkecil adalah : " ;
    echo implode(", ", $nilai) . "<br>"; 
    
    // mengurutkan dari yang terbesar
    echo "Nilai dari yang terbesar adalah : " ;
    arsort($nilai);
    echo implode (", " , $nilai) . "<br>";
    
    // mencari nilai rata rata
    echo "apabila dibulatkan, rata-rata nilai saya adalah : ";
    echo floor(array_sum($nilai) / count($nilai)) . "<br>";
    
    //mencari nilai setelah perbaikan
    ksort($nilai);
    echo "setelah melakukan perbaikan untuk nilai : " . min($nilai);
    $nilai[2] = 75;
    echo " , " . "nilai saya sekarang adalah " . "<b>$nilai[2]</b>" . "<br>";
    echo "jadi nilai saya sekarang adalah : ";
    echo implode(", ", $nilai) . "<br>";

    // nilai diurut dari yang terbesar 
    echo "sehingga urutan Nilai dari yang terbesar sekarang adalah : " ;
    $besar2 = $nilai;
    arsort($besar2);
    echo implode(", ", $nilai) . "<br>";
?>