<!DOCTYPE html>
<html>
<head>

<title>Titel</title>

</head>

<h1> - Calculator</h1>


<form action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">


Uw  getallen :<input type="text" name="Getal1" maxlength="25">
-<input type="text" name="Getal2" maxlength="25">
<input type="submit" value="Berekenen">
</form>

<?php

$Getal1 = $_POST['Getal1'];
$Getal2 = $_POST['Getal2'];
$Som = $Getal1 - $Getal2;

if(empty($_POST['Getal1']) && empty($_POST['Getal2'])) {
	echo "Je hebt niks ingevuld!";
	
} else {
	
	echo "Uw uitkomst is :  $Som <br />";
	
}
	
?>











</html>



