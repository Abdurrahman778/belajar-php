<?php 
if (@$_POST["bilangan_pertama"] != "" && @$_POST["bilangan_pangkat"] != "") {
    $hasilPangkat = $_POST['bilangan_pertama'] ** $_POST['bilangan_pangkat'];
} else {
    echo "<p style = 'text-align: center; color : red;'>DATA HARUS DIISI</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--1. pastikan menggunakan tag form dan ada atribute method action 
        2. input harus ada atribute name dan type
        3. button type submit / input yang type submit      
-->
    <form action="" style="display : flex; justify-content: center;" method="POST">
        <table border = "1">
            <tr>
                <td><label for="bilangan1">Bilangan Pertama :</label></td>
                <td><input type="number" name="bilangan_pertama" id="bilangan"></td>
            </tr>
            <tr>
                <td><label for="bilangan2">bilangan pangkat :</label></td>
                <td><input type="number" name="bilangan_pangkat" id="pangkat"> </td>
            </tr>
            <tr>
                <td colspan="2"><button type="sumbit">HITUNG</button></td>
            </tr>
        </table>
    </form>

    <p style="text-align: center;">
        <?php
            if (isset($hasilPangkat) && @$_POST['bilangan_pertama'] != "" && @$_POST ['bilangan_pangkat'] != "") {
                echo "<b>hasil pangkat : </b>" . 
                $_POST['bilangan_pertama'] . " pangkat " . $_POST['bilangan_pangkat'] . " = " . $hasilPangkat . "<b>";
            }
        ?>
    </p>
</body>
</html>