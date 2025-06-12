<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi</title>
</head>
<body>
    <?php
    $sisi=$_POST['sisi'];
    $luas=$sisi*$sisi;
    $keliling=4*$sisi;
    $pilih=$_POST['pilih'];
    ?> 
 <a href="index.php">home</a>
    <h1>persegi</h1>
    <?php
        if ($pilih=='keliling') { ?>
            <h4>keliling 4 x sisi = <?php echo $keliling;?></h4>
        <?php } elseif ($pilih=='luas') { ?>
            <h4>Luas = sisi x sisi = <?php echo $luas;?></h4>
        <?php } else { ?>
            <h4>keliling 4 x sisi = <?php echo $keliling;?></h4>
            <h4>Luas = sisi x sisi = <?php echo $luas;?></h4>
    <?php   }

    ?>
   
    <img src="persegi.jpg" alt="ilang">
</body>
</html>