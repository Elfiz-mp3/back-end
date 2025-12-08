<!DOCTYPE html>
<html>
<body>

<?php
$souls = [
    ["Ranni", 0, "The Witch"],
    ["Gwyndolin", 2011, "Dark Sun"],
    ["Melina", 0, "Finger Maiden"],
    ["Malenia", 33251 ,"Blade of Miquella"],
    ["Firekeeper", 350, "Ashen Maiden"],
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Name</th>
        <th>Health</th>
        <th>Title</th>
      </tr>";

foreach ($souls as $soul) {
    echo "<tr>";
    echo "<td>{$soul[0]}</td>";
    echo "<td>{$soul[1]}</td>";
    echo "<td>{$soul[2]}</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
