<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
</head>
<body>
<h2>
<form method="post" action="">
    <label>Nama:</label>
    <input type="text" name="nama" required><br><br>

    <label>Jurusan:</label>
    <input type="text" name="jurusan" required><br><br>

    <label>Umur:</label>
    <input type="text" name="umur" required><br><br>

    <button type="submit" name="submit">Kirim</button>
</form>
</h2>
<?php 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $umur = $_POST['umur'];

    echo "<h3>Data dari Biodata</h3>";
    echo "Nama: $nama<br>";
    echo "Jurusan: $jurusan<br>";
    echo "Umur: $umur<br>";
}
?>

</body>
</html>