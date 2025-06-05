<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
<?php
$jari_jari = 7;
$luas = pi() * pow($jari_jari, 2);
$keliling = 2 * pi() * $jari_jari;
?>
    <a href="index.php">home</a>
    <h1>Lingkaran</h1>
    <h4>Luas = π × r² = <?php echo $luas; ?></h4>
    <h4>Keliling = 2 × π × r = <?php echo $keliling; ?></h4>
    <img src="lingkaran.jpeg" alt="lingkaran.jpeg">
</body>
</html>