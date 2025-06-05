<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Segitiga</title>
</head>
<body>

<h1>Segitiga</h1>
<a href="index.php">Home</a>

<form action="segitigaaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="alas">Masukkan alas</label></td>
      <td>:</td>
      <td><input type="number" name="alas" id="alas" required></td>
    </tr>
    <tr>
      <td><label for="tinggi">Masukkan tinggi</label></td>
      <td>:</td>
      <td><input type="number" name="tinggi" id="tinggi" required></td>
    </tr>
     <tr>
      <td><label for="sisi1">Masukkan sisi1</label></td>
      <td>:</td>
      <td><input type="number" name="sisi1" id="sisi1" required></td>
    </tr>
     <tr>
      <td><label for="sisi2">Masukkan sisi2</label></td>
      <td>:</td>
      <td><input type="number" name="sisi2" id="sisi2" required></td>
    </tr>
     <tr>
      <td><label for="sisi3">Masukkan sisi3</label></td>
      <td>:</td>
      <td><input type="number" name="sisi3" id="sisi3" required></td>
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
