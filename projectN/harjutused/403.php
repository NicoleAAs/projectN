<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
<a href="../testt.php">Tagasi Ülesanne leht</a>
<h1>Ülesanne 403</h1>
<?php

$varv=array('Gold', 'DarkGoldenRod', 'DarkCyan', 'Coral', 'Chocolate', 'BurlyWood', 'BlanchedAlmond', 'LightCoral',
    'LavenderBlush', 'Lavender', 'MediumOrchid', 'IndianRed', 'Salmon', 'RosyBrown', 'Plum');
// tsükliga kuvame värvid massiivist
for($i = 0; $i <15; $i++){
    echo "<span style='color: $varv[$i]' >$varv[$i]</span><br>";
}

?>
</body>
</html>
