<?php
function task1(){
	$str = 'ahb acb aeb aeeb adcb axeb asd abc dcab';
	preg_match_all('/a..b/', $str, $result);
	print_r($result);

	$str = 'a1b2c3';
	$result = preg_replace_callback(
		'/\d/',
		function($digits){
			return $digits[0]**3;
		},
		$str);
	echo '</br>';
	echo $result;
}

task1();
