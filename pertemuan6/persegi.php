<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>persegi</title>
</head>
<body>

<h1>persegi</h1>
<a href="index.php">Home</a>

<form action="persegiaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="sisi">Masukkan sisi</label></td>
      <td>:</td>
      <td><input type="number" name="sisi" id="sisi" required></td>
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
