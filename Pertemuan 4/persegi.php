<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulasi Luas Persegi Panjang</title>
</head>
<body>
<h2>Kalkulasi Luas Persegi Panjang</h2>
<form method="post" action="">
    <label>Panjang:</label><br>
    <input type="number" name="panjang" step="any" required><br><br>

    <label>Lebar:</label><br>
    <input type="number" name="lebar" step="any" required><br><br>
    
    <button type="submit" name="hitung">Hitung</button>
</form>
<?php
if(isset($_POST['hitung'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    $luas = $panjang * $lebar;
    echo "<h3>Hasil Perhitungan;</h3>";
    echo "Panjang: $panjang<br>";
    echo "Lebar: $lebar<br>";
    echo "Luas Persegi Panjang: <b>$luas<b>";
}
?>

</body>
</html>