<!DOCTYPE html>
<html>
<head>


</head>

<body>

<h2>Ben jij te jong voor alcohol ? Of juist oud genoeg?</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
Leeftijd: <input type="text" name="Leeftijd">
<input type="submit" value="Checker">
<?php
 $Leeftijd = htmlentities($_POST['Leeftijd']);

if(empty($_POST['Leeftijd'])) {
	
	echo "U heeft (nog) niks ingevuld!";
	
} 
elseif(18 > $Leeftijd) {
	
	echo "Uw bent te jong! je bent nog maar $Leeftijd";
	
} else {
	
	echo "Jij mag drinken ! Word lekker dronken!";
	
}




?>


</body>







</html>
