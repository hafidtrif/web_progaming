<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segitiga</title>
</head>
<body>
    <?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisi1=$_POST['sisi1'];
    $sisi2=$_POST['sisi2'];
    $sisi3=$_POST['sisi3'];
    $luas=0.5 * $alas * $tinggi;
    $keliling=$sisi1 + $sisi2 + $sisi3;
    ?>
<a href="index.php">home</a>
    <h1>segitiga</h1>
    <h4>Luas =  1/2 x alas x tinggi = <?php echo $luas;?></h4>
    <h4>Keliling = alas x tinggi x tinggi = <?php echo $keliling;?></h4>
    <img src="segitiga.jpeg" alt="segitiga.jpeg">
</body>
</html>