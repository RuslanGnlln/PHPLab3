<?php
if($_POST['send'] && !empty($_POST['fname']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['salary'])){
	setcookie('fname', $_POST['fname']);
	setcookie('name', $_POST['name']);
	setcookie('age', $_POST['age']);
	setcookie('salary', $_POST['salary']);
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
	<label> Зарплата
		<input type="text" name="salary">
	</label><br>
	<input type="submit" name="send">
</form>

<form action="task2c_output.php">
	<input type="submit" value="перейти на другую страницу">
</form>
