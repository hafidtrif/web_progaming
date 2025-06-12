<!DOCTYPE html>
<html lang="id">
<head>Lingkaran
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

<h1>Lingkaran</h1>
<a href="index.php">Home</a>

<form action="lingkaranaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="jari1">Masukkan_jari1</label></td>
      <td>:</td>
      <td><input type="number" name="jari1" id="jari1" required></td>
    </tr>
    <tr>
      <td><label for="sisi">Pilih</label></td>
      <td>:</td>
      <td>
            <input type="radio" id="html" name="pilih" value="keliling">
            <label for="html">keliling</label><br>
            <input type="radio" id="css" name="pilih" value="luas">
            <label for="css">Luas</label><br>
            <input type="radio" id="javascript" name="pilih" value="semua">
            <label for="javascript">Luas dan Keliling</label>
            </td>
      <tr>
      <td colspan="3" align="center">
        <input type="submit" value="Hitung Luas dan Keliling">
      </td>
    </tr>
  </table>
</form>

</body>
</html>
