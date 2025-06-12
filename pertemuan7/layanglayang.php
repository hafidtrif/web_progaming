<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-Layang</title>
</head>
<body>

<h1>Layang-Layang</h1>
<a href="index.php">Home</a>

<form action="layanglayangaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="d1">Masukkan Diagonal 1</label></td>
      <td>:</td>
      <td><input type="number" name="diagonal1" id="d1" required></td>
    </tr>
    <tr>
      <td><label for="d2">Masukkan Diagonal 2</label></td>
      <td>:</td>
      <td><input type="number" name="diagonal2" id="d2" required></td>
    </tr>
    <tr>
      <td><label for="sisi1">Masukkan Sisi Pendek</label></td>
      <td>:</td>
      <td><input type="number" name="sisi1" id="sisi1" required></td>
    </tr>
    <tr>
      <td><label for="sisi2">Masukkan Sisi Panjang</label></td>
      <td>:</td>
      <td><input type="number" name="sisi2" id="sisi2" required></td>
    </tr>
    <tr>
       <td><label for="pilih">Pilih</label></td>
      <td>:</td>
      <td>
            <input type="radio" id="keliling" name="pilih" value="keliling">
            <label for="keliling">Keliling</label><br>
            <input type="radio" id="luas" name="pilih" value="luas">
            <label for="luas">Luas</label><br>
            <input type="radio" id="semua" name="pilih" value="semua">
            <label for="semua">Luas dan Keliling</label>
            </td>
    </tr>
      <td colspan="3" align="center">
        <input type="submit" value="Hitung Luas dan Keliling">
      </td>
    </tr>
  </table>
</form>

</body>
</html>
