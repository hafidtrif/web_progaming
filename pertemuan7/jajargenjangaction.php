<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jajargenjang</title>
</head>
<body>
    <?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisi_miring=$_POST['sisi_miring'];
    $luas=$alas*$tinggi;
    $keliling=2*($alas+$sisi_miring);
    $pilih = $_POST['pilih'];
    ?>
    <a href="index.php">home</a>
    <h1>jajargenjang</h1>
    <?php_check_syntax
    if ($pilih=='keliling') { ?>
            <h4>4 x sisi = <?php echo $keliling;?></h4>
        <?php } elseif ($pilih=='luas') { ?>
            <h4>0.5 x diagonal1 x diagonal2 = <?php echo $luas;?></h4>
        <?php } else { ?>
            <h4>keliling = 4 x sisi= <?php echo $keliling;?></h4>
            <h4>Luas = 0.5 x diagonal1 x diagonal2 = <?php echo $luas;?></h4>
    <?php   }

    ?>
    <img src="jajargenjang.jpg" alt="jajargenjang.jpg">
</body>
</html>