<form action="./task2.php">
	<input type="submit" value="back to task2">
</form>

<?php
$fname = $_COOKIE["fname"];
$name = $_COOKIE["name"];
$age = $_COOKIE["age"];
$salary = $_COOKIE["salary"];
echo "Фамилия: $fname <br> Имя: $name <br> Возраст: $age <br> Зарплата: $salary";