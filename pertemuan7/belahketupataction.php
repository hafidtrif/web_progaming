<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>belahketupat</title>
</head>
<body>
    <?php
    $diagonal1=$_POST['diagonal1'];
    $diagonal2=$_POST['diagonal2'];
    $sisi=$_POST['sisi'];
    $luas=0.5 * $diagonal1 *$diagonal2;
    $keliling=4*$sisi;
     $pilih=$_POST['pilih'];
    ?>
    <a href="index.php">home</a>
    <h1>belahketupat</h1>
    <?php
        if ($pilih=='keliling') { ?>
            <h4>4 x sisi = <?php echo $keliling;?></h4>
        <?php } elseif ($pilih=='luas') { ?>
            <h4>0.5 x diagonal1 x diagonal2 = <?php echo $luas;?></h4>
        <?php } else { ?>
            <h4>keliling = 4 x sisi= <?php echo $keliling;?></h4>
            <h4>Luas = 0.5 x diagonal1 x diagonal2 = <?php echo $luas;?></h4>
    <?php   }

    ?>
   
    <img src="belahketupat1.jpeg" alt="belahketupat1.jpeg">
</body>
</html>