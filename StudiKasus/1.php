<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nilai = 78;
    ?>

    <p>nilai <?php echo $nilai ?> dinyatakan <span style="color: <?php echo $nilai > 75 ? 'green' : 'red'?>;"> <?php echo $nilai >= 75 ? "KOMPETEN" : "TIDAK KOMPETEN" ?> </span></p>
</body>
</html>