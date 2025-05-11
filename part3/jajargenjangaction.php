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
    ?>
    <a href="index.php">home</a>
    <h1>jajargenjang</h1>
    <h4>Luas = alas x tinggi = <?php echo $luas;?></h4>
    <h4>Keliling = 2 x (sisi alas + sisi miring) = <?php echo $keliling;?></h4>
    <img src="jajargenjang.jpg" alt="jajargenjang.jpg">
</body>
</html>