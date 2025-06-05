<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
<?php
$jari =$_POST['jari1'];
$phi= 3.14;
$luas=$phi*$jari*$jari;
$keliling =2*$phi*$jari;
?>
    <a href="index.php">home</a>
    <h1>Lingkaran</h1>
    <h4>Luas = π × r² = <?php echo $luas; ?></h4>
    <h4>Keliling = 2 × π × r = <?php echo $keliling; ?></h4>
    <img src="lingkaran.jpeg" alt="lingkaran.jpeg">
</body>
</html>