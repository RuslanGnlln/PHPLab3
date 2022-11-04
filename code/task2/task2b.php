<?php
session_start();
if($_POST['send'])
{
	if($_POST['fname'])
	{
		$_SESSION["fname"] = $_POST['fname'];
	}
	else
	{
		$_SESSION["fname"] = 'не введено';
	}
	if($_POST['name'])
	{
		$_SESSION["name"] = $_POST['name'];
	}
	else
	{
		$_SESSION["name"] = 'не введено';
	}
	if($_POST['age'])
	{
		$_SESSION["age"] = $_POST['age'];
	}
	else
	{
		$_SESSION["age"] = 'не введен';
	}
	echo "Данные сохранены в сессии";
}
?>

<form method="POST">
	<label> Фамилия
		<input type="text" name="fname">
	</label><br>
	<label> Имя
		<input type="text" name="name">
	</label><br>
	<label> Возраст
		<input type="text" name="age">
	</label><br>
	<input type="submit" name="send">
</form>

<form action="task2b_output.php">
	<input type="submit" value="перейти на другую страницу">
</form>

