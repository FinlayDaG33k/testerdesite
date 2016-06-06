<!DOCTYPE html>
<?php

$tekst = $_POST['tekst'];
htmlspecialchars($tekst);

?>

<HTML>
<head>

</head>
<body>
<p> <?php echo $tekst; ?>





</body>
</html>
