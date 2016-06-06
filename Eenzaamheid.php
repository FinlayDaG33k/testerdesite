<!DOCTYPE html>
<html>

<head>
<title>Eenzaamheid</title>

</head>

<body>
<h2> Eenzaamheid's formulier</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post">
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


if(empty($_POST['Naam']) AND empty($_POST['Gevoel']) AND empty($_POST['Ware']) AND empty($_POST['Probleem'])) {
	
	echo "U heeft niks ingevuld!";
} else {
	
	
echo "Hallo $Naam Jouw Gevoel $Gevoel dus. Is niet best  je bent verliefd/ er zeker op dat $Ware de Ware is maar je bent er niet helemaal zeker van. Jouw probleem $Probleem dus is ook niet best voor dit allemaal zou ik een psycholoog bezoeken.
<br> Ik hoop dat dit je heeft geholpen." ;
}


?>

</body>













</html>
