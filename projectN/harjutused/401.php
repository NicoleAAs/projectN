<?php
//andmed massiivis
$date=[
    "nimi"=> "Nicole Aasaküla",
    "aadress"=>"Keemikute 12, Maardu",
    "pilt"=>"kot.jpg",
    "koduleht"=>"https://aasakyla19.thkit.ee/"
];
?>
<h1>Ülesanne 401/ var1 </h1>
<p> <b>
        <?=$data["nimi"]?>

    </b> </p>

<p><i>
        <?=$data["aadress"]?>
    </i>
</p>

<img src="<?=$data["pilt"]?>" alt="pildike">
<a href="<?=$data["koduleht"]?>" target="_blank">Aasaküla Nicole</a>

//massiv array fuktsiooniga
<h1>Ülesanne 401/var 2 -array()</h1>
<?php
$array=array("Nicole Aasaküla", "Keemikute 12, Maardu", "kot.jpg", "https://aasakyla19.thkit.ee/");
echo "<b>Nimi: ".$array[0]."</b><br>";
echo "<i>Aadress:". $array[1]."</i><br>";
echo "<img src='$array[2]' alt='pildike'>";

?>
