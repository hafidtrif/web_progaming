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
      <td><label for="panjang">Masukan panjang</label></td>
      <td>:</td>
      <td><input type="number" name="panjang" id="panjang" required></td>
    </tr>
    <tr>
      <td><label for="lebar">Masukan lebar</label></td>
      <td>:</td>
      <td><input type="number" name="lebar" id="lebar" required></td>
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
