<?php
    for ($kali=1; $kali <= 3 ; $kali++) { 
        echo "ini adalah perkalian $kali <br>";
        for ($i=1; $i <= 10 ; $i++) {
            $hasil = $kali * $i; 
            echo "$kali x $i = $hasil <br>";
        }
    }
?>