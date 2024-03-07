<?php
    $nilai = [80, 78, 72, 84, 92, 88];
    
    // semua nilai
    echo "Nilai saya : ";
    foreach ($nilai as $key => $value) {
        echo "<b> $value , </b>"; 
    }
    echo "<br>Nilai yang paling kecil adalah : " . min($nilai);
    echo "<br>Nilai yang paling besar adalah : " . max($nilai);
    echo "<br>";
    
    // mengurutkan nilai dari yang terkecil
    // $kecil = $nilai;
    asort ($nilai);
    echo "Nilai dari yang terkecil adalah : " ;
    foreach ($nilai as $kecik) {
        echo "$kecik, ";
    }
    echo "<br>";
    
    // mengurutkan dari yang terbesar
    echo "Nilai dari yang terbesar adalah : " ;
    // $besar = $nilai;
    arsort($nilai);
    foreach ($nilai as $besa) {
        echo "$besa, ";
    }
    echo "<br>";
    
    // mencari nilai rata rata
    echo "apabila dibulatkan, rata-rata nilai saya adalah : ";
    echo floor(array_sum($nilai) / count($nilai));
    echo "<br>";
    
    //mencari nilai setelah perbaikan
    ksort($nilai);
    echo "setelah melakukan perbaikan untuk nilai : " . min($nilai);
    $nilai[2] = 75;
    echo " , " . "nilai saya sekarang adalah " . "<b>$nilai[2]</b>";
    echo "<br>";
    echo "jadi nilai saya sekarang adalah : ";
    foreach ($nilai as $value) {
        echo "<b>$value , </b>" ;
    }
    echo"<br>";

    // nilai diurut dari yang terbesar 
    echo "sehingga urutan Nilai dari yang terbesar sekarang adalah : " ;
    $besar2 = $nilai;
    arsort($besar2);
    foreach ($besar2 as $besa) {
        echo "<b>$besa, </b> ";
    }
    echo "<br>";
?>