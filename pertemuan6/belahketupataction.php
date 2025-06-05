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
    ?>
    <a href="index.php">home</a>
    <h1>belahketupat</h1>
    <h4>Luas = 1/2 x diagonal 1 x diagonal 2 = <?php echo $luas;?></h4>
    <h4>Keliling = 4 x sisi  = <?php echo $keliling;?></h4>
    <img src="belahketupat1.jpeg" alt="belahketupat1.jpeg">
</body>
</html>