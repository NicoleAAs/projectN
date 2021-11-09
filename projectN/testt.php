<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP algus</title>
</head>
<body>
<a href="../testt.php">Tagasi Ülesanne leht</a>

<?php
echo "<h1>Tere hommikust!</h1>";
$tekst="Täna on esimene php tund.";
echo $tekst;
echo "<br>";
echo"<h2>Matemaatika tehed. Mõistatus.</h2>";
echo"<h3>Arva ära kaks arvu!</h3>";

$arv1=5;
$arv2=10;
//kahe arvude liitmine +
echo "Kui liidamine kokku, vastus on ".($arv1+$arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastus "
    .($arv1/$arv2);
?>
<footer>
    <?php
    echo "Tänane kuupäev ".date("d.m.Y");
    echo "<br>";
    echo " ".date("H: i: s");

    ?>

</footer>
</body>
</html>
