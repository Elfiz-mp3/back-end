<?php
$souls = [
    "wife" => "Ranni the Witch",
    "he/them" => "Dark Sun Gwyndolin",
    "maiden" => "Melina",
    "boss" => "Malenia, Blade of Miquella",
    "maiden2" => "Fire Keeper",
];

echo "Wife: " . $souls["wife"] . "<br>";
echo "Yes: " . $souls["he/them"] . "<br>";
echo "Elden Maiden: " . $souls["maiden"] . "<br>";
echo "Rot Goddess: " . $souls["boss"] . "<br>";
echo "DS3 Maiden: " . $souls["maiden2"] . "<br>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Souls Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
echo "<table>";
echo "<tr>
        <th>Kategori</th>
        <th>Karakter</th>
      </tr>";

foreach ($souls as $kategori => $nama) {
    echo "<tr>";
    echo "<td>$kategori</td>";
    echo "<td>$nama</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
