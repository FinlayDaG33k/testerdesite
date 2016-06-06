<!DOCTYPE html>
<html>

<head>
<title>Eenzaamheid</title>
</head>

<body>
<h2> Eenzaamheid's formulier</h2>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="POST">
Naam: <input type="text" name="Naam" placeholder="John"><br>
Je gevoelens: <input type="text" name="Gevoel" placeholder="Ik voel me goed"><br>
De 'ware': <input type="text" name="Ware" placeholder="Lorenzo"><br>
Uw probleem: <input type="text" name="Probleem" placeholder="Mijn probleem is dat ik ...">
<input type="submit" Value="Verzend">
</form>

<?php 

$Naam = htmlentities($_POST['Naam']);
$Gevoel = htmlentities($_POST['Gevoel']);
$Ware = htmlentities($_POST['Ware']);
$Probleem = htmlentities($_POST['Probleem']);

if(empty($Naam) && empty($Gevoel) && empty($Ware) && empty($Probleem)) {
	?>
	U heeft niks ingevuld!
	<?php
} else {
	?>
Hallo, <?= $Naam ?> Jouw Gevoel <?= $Gevoel ?> dus. Is niet best  je bent verliefd/ er zeker op dat <?= $Ware ?> de Ware is maar je bent er niet helemaal zeker van. Jouw probleem <?= $Probleem ?> dus is ook niet best voor dit allemaal zou ik een psycholoog bezoeken.
<br> Ik hoop dat dit je heeft geholpen.
<?php
}
?>
</body>
</html>
