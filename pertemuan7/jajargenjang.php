<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>

<h1>Jajar Genjang</h1>
<a href="index.php">Home</a>

<form action="jajargenjangaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="alas">Masukkan Alas</label></td>
      <td>:</td>
      <td><input type="number" name="alas" id="alas" required></td>
    </tr>
    <tr>
      <td><label for="tinggi">Masukkan Tinggi</label></td>
      <td>:</td>
      <td><input type="number" name="tinggi" id="tinggi" required></td>
    </tr>
    <tr>
      <td><label for="sisi_miring">Masukkan Sisi Miring</label></td>
      <td>:</td>
      <td><input type="number" name="sisi_miring" id="sisi_miring" required></td>
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
