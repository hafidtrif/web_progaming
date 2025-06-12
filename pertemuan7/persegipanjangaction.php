<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegipanjang</title>
</head>
<body>
    <?php
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];
    $luas=$panjang*$lebar;
    $keliling=2*($panjang+$lebar);
     $pilih=$_POST['pilih'];
    ?>
<a href="index.php">home</a>
    <h1>persegipanjang</h1>
     <?php
        if ($pilih=='keliling') { ?>
            <h4>panjang + lebar = <?php echo $keliling;?></h4>
        <?php } elseif ($pilih=='luas') { ?>
            <h4>Luas = panjang x lebar = <?php echo $luas;?></h4>
        <?php } else { ?>
            <h4>2 x panjang + lebar= <?php echo $keliling;?></h4>
            <h4>Luas = panjang x lebar = <?php echo $luas;?></h4>
    <?php   }

    ?>
   
    <img src="persegipanjang.jpeg" alt="persegipanjang.jpeg">
</body>
</html>