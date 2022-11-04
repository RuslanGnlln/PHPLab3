<form action="./task2.php">
	<input type="submit" value="back to task2">
</form>

<?php
session_start();
$fname = $_SESSION["fname"];
$name = $_SESSION["name"];
$age = $_SESSION["age"];
echo "Фамилия: $fname <br> Имя: $name <br> Возраст: $age";
session_destroy();
