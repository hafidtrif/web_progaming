<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jajargenjang</title>
</head>
<body>
    <?php
// Ambil data dari form
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$sisi_miring = $_POST['sisi_miring'];
$pilih = $_POST['pilih'];

// Hitung luas dan keliling
$luas = $alas * $tinggi;
$keliling = 2 * ($alas + $sisi_miring);

// Tampilkan hasil
echo '<a href="index.php">Home</a>';
echo '<h1>Hasil Perhitungan Jajargenjang</h1>';

if ($pilih == 'luas') {
    echo "<h4>Luas = alas × tinggi = $luas</h4>";
} elseif ($pilih == 'keliling') {
    echo "<h4>Keliling = 2 × (alas + sisi miring) = $keliling</h4>";
} else {
    echo "<h4>Luas = alas × tinggi = $luas</h4>";
    echo "<h4>Keliling = 2 × (alas + sisi miring) = $keliling</h4>";
}
?>

    <img src="jajargenjang.jpg" alt="jajargenjang.jpg">
</body>
</html>