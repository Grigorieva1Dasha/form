<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
error_reporting(0);
function check($arrayfiles)
{
	$files = glob("formfile/*.txt");
	$i = 0;
	foreach ($files as $filename) {
		if (is_file("formfile/".$arrayfiles[$filename]))
		{
			$i++;
		}
	}
	if ($i == 0)
	{
		return true;
	}
	return false;
}
if(empty($_POST['file']))
{
	echo "Ничего не выбрано";
}
else
{
	$arrayfiles = $_POST['file'];
	$count = count($arrayfiles);
	for ($i=0; $i < $count; $i++)
	{
		if(!empty($arrayfiles[$i]))
		{
			if(substr($arrayfiles[$i], -4) == ".txt")
			{
				echo $arrayfiles[$i] . "...идёт удаление...\n";
				unlink("formfile/" . $arrayfiles[$i]);
			}
			else
			{
				echo $arrayfiles[$i] . "...невозможно удалить...";
			}
		}
	}
	if(check($arrayfiles))
	{
		echo "<p><b>Файлы удалены.</b></p>";
	}
}
?>
<form action="admin.php">
	<p><input type="submit" value="Назад"></p>
</form>
</body>
</html>
