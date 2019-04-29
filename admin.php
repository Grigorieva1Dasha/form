<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<?php
$files = glob("formfile/*.txt");
$i = 0;
?>
<form action="delete.php" method="POST">
	<?php
	foreach ($files as $file)
	{
		echo "<input type = 'checkbox' name = 'file[]' value=".substr($file, 9).">".substr($file, 9)."<br>";
		$i++;
	}
	?>
	<p><input type="submit" value="Удалить"></p>
</form>
<p><a href="/ls/form">Вернутся к форме</a></p>
</body>
</html>
