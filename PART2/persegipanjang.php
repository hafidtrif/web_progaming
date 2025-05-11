<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegipanjang</title>
</head>
<body>
    <?php
    $panjang=19;
    $lebar=10;
    $luas=$panjang*$lebar;
    $keliling=2*($panjang+$lebar);
    ?>
    <a href="index.php">home</a>
    <h1>persegipanjang</h1>
    <h4>Luas = panjang x lebar  = <?php echo $luas;?></h4>
    <h4>Keliling 2 x (panjang + lebar) = <?php echo $keliling;?></h4>
    <img src="persegipanjang.jpeg" alt="persegipanjang.jpeg">
</body>
</html>