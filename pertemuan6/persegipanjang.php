<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Persegi panjang</title>
</head>
<body>

<h1>Persegi panjang</h1>
<a href="index.php">Home</a>

<form action="persegipanjangaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="panjang">Masukkan panjang</label></td>
      <td>:</td>
      <td><input type="number" name="panjang" id="panjang" required></td>
    </tr>
    <tr>
      <td><label for="lebar">Masukkan lebar</label></td>
      <td>:</td>
      <td><input type="number" name="lebar" id="lebar" required></td>
    </tr>
    <tr>
      <td colspan="3" align="center">
        <input type="submit" value="Hitung Luas dan Keliling">
      </td>
    </tr>
  </table>
</form>

</body>
</html>
