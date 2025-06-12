<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layanglayang</title>
</head>
<body>
    <?php
    $diagonal1=$_POST['diagonal1'];
    $diagonal2=$_POST['diagonal2'];
    $sisi1=$_POST['sisi1'];
    $sisi2=$_POST['sisi2'];
    $luas=0.5*$diagonal1*$diagonal2;
    $keliling=2*($sisi1+$sisi2);
    $pilih = $_POST['pilih'];
    ?>
    <a href="index.php">home</a>
    <h1>layanglayang</h1>
    <?php
        if ($pilih=='keliling') { ?>
            <h4>Keliling= 2 x (sisi 1 + sisi 2)= <?php echo $keliling;?></h4>
        <?php } elseif ($pilih=='luas') { ?>
           <h4>Luas = 1/2 x diagonal 1 x diagonal 2 = <?php echo $luas;?></h4>
        <?php } else { ?>
            <h4>Keliling= 2 x (sisi 1 + sisi 2)= <?php echo $keliling;?></h4>
            <h4>Luas = 1/2 x diagonal 1 x diagonal 2 = <?php echo $luas;?></h4>
    <?php   }

    ?>
    <img src="layang layang.jpg" alt="layang layang.jpg">
</body>
</html>