<!DOCTYPE html>
<head>
    <title>Mencetak bilangan ganjil genap</title>
</head>
<body>
    <?php 
        $bilangan = 1;

        do {
            // cetak bilangan ganjil
            echo "bilangan Ganjil: $bilangan<br>";
            
            // increment untuk bilangan genap
            $bilangan++;

            // cetak bilangan genap
            echo "bilangan Genap : $bilangan<br>";

            // increment untuk bilangan ganjil berikutnya
            $bilangan++;
        } while ($bilangan <= 30);
    ?>
</body>
</html>