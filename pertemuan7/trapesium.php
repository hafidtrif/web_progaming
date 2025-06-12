<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trapesium</title>
</head>
<body>

<h1>Trapesium</h1>
<a href="index.php">Home</a>

<form action="trapesiumaction.php" method="post">
  <table cellpadding="5">
    <tr>
      <td><label for="sisi_atas">Masukkan sisi_atas</label></td>
      <td>:</td>
      <td><input type="number" name="sisi_atas" id="sisi_atas" required></td>
    </tr>
    <tr>
      <td><label for="sisi_bawah">Masukkan_bawah</label></td>
      <td>:</td>
      <td><input type="number" name="sisi_bawah" id="sisi_bawah" required></td>
    </tr>
     <tr>
      <td><label for="tinggi">Masukkan tinggi</label></td>
      <td>:</td>
      <td><input type="number" name="tinggi" id="tinggi" required></td>
    </tr>
     <tr>
      <td><label for="sisi_kiri">Masukkan_kiri</label></td>
      <td>:</td>
      <td><input type="number" name="sisi_kiri" id="sisi_kiri" required></td>
    </tr>
     <tr>
      <td><label for="sisi_kanan">Masukkan_kanan</label></td>
      <td>:</td>
      <td><input type="number" name="sisi_kanan" id="sisi_kanan" required></td>
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
    </tr>
      <td colspan="3" align="center">
        <input type="submit" value="Hitung Luas dan Keliling">
      </td>
    </tr>
  </table>
</form>

</body>
</html>
