<form action="../index.php">
	<input type="submit" value="back">
</form>

<form method="POST">
	<label> email
		<input type="email" name="email">
	</label><br>

	<label> Категория<Br>
		<input type="radio" name="category" value="Продажа"> Продажа<Br>
		<input type="radio" name="category" value="Покупка"> Покупка<Br>
		<input type="radio" name="category" value="Фестивали и ярмарки"> Фестивали и ярмарки<Br>
		<input type="radio" name="category" value="Реклама"> Реклама<Br>
		<input type="radio" name="category" value="Жалоба"> Жалоба<Br>
	</label><br>

	<label> Заголовок
		<input type="text" name="header">
	</label><br>

	<label> Текст объявления
		<textarea name="textarea"></textarea>
	</label><br>

	<input type="submit" name="send" value="Добавить">
</form>

<?php
if($_POST['send'] && !empty($_POST['email']) && !empty($_POST['category']) && !empty($_POST['header']) && $_POST['textarea'])
{
	$email = $_POST['email'];
	$category = $_POST['category'];
	$header = $_POST['header'];
	$textarea = $_POST['textarea'];

	if (!mkdir("/code/task3/$category") && !is_dir("/code/task3/$category"))
	{
		throw new \RuntimeException(sprintf('Directory "%s" was not created', "/code/task3/$category"));
	}
	
	$f = fopen("$category/$header.txt", 'ab');
	fwrite($f, "$email\n");
	fwrite($f, $textarea);
	fclose($f);
}

$dir = opendir("/code/task3");
$directories = [];
while($file = readdir($dir)) {
	if (is_dir('/code/task3/'.$file) && $file != '.' && $file != '..') {
		$directories[] = $file;
	}
}

$board = [];

foreach ($directories as $directory)
{
	$files = scandir($directory);
	unset($files[0], $files[1]);
	foreach ($files as $file)
	{
		$file_array = file("/code/task3/$directory/$file");
		$email = $file_array[0];
		$text = $file_array[1];
		$newline = array("category" => $directory, "header" => mb_substr($file, 0, -4), "text" => $text, "email" => $email);
		$board[] = $newline;
	}
}

echo "<table border='1px'><tr><td>Категория</td><td>Заголовок</td><td>Текст</td><td>email</td></tr>";
foreach ($board as $brd){
	echo "<tr><td>" . $brd['category'] . "</td><td>" . $brd['header'] . "</td><td>" . $brd['text'] . "</td><td>" . $brd['email'] . "</td></tr>";
}
echo "</table></div>";
