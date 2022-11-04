<form method="POST">
	<textarea name="textarea"></textarea>
	<input type="submit" name="send" value="task2 a">
</form>

<?php

if($_POST['send'])
{
	if($_POST['textarea'])
	{
		$send_textarea = $_POST['textarea'];

		// нужно чтобы str_word_count работал с кириллицей
		for ( $i = 192; $i < 256; $i++ )
			{
				//Цикл на каждом шагу добавляет к переменной $abc новую букву
				$abc .= chr($i);
			}

		//Переводим строку из кодировки utf-8 в cp1251
		$abc=iconv( 'cp1251', 'utf-8', $abc);
		echo str_word_count($send_textarea, 0, $abc) . ' слов' . '</br>';

		echo mb_strlen($send_textarea, 'utf8') . ' символа (включая пробелы)' . '</br>';
	}
	else
	{
		echo 'пустое поле';
	}
}