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
$pilih = $_POST['pilih'];
?>
<a href="index.php">home</a>
    <h1>lingkaran</h1>
    <?php
        if ($pilih=='keliling') { ?>
             <h4>Keliling = 2 × π × r = <?php echo $keliling; ?></h4>
        <?php } elseif ($pilih=='luas') { ?>
            <h4>Luas = π × r² = <?php echo $luas; ?></h4>
        <?php } else { ?>
             <h4>Keliling = 2 × π × r = <?php echo $keliling; ?></h4>
             <h4>Luas = π × r² = <?php echo $luas; ?></h4>
    <?php   }

    ?>
    <img src="lingkaran.jpeg" alt="lingkaran.jpeg">
</body>
</html>