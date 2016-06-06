<!DOCTYPE html>
<html>

<head>
<title> geef uw tekst in </title>
</head>

<body>
<?php
htmlspecialchars($tittel);
echo $tittel;
?> 

<form action="JET.php" method="POST">
Tekst: <input type="text" name="tekst" maxlength="50">
<input type="submit" Value="tekst veranderen">
</form>

</body>
</html>
