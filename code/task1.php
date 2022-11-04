<?php

$str = 'ahb acb aeb aeeb adcb axeb asd abc dcab';
echo $str . '</br>';
preg_match_all('/a..b/', $str, $result);
print_r($result);

$str = 'a1b2c3';
echo '</br>' . $str . '</br>';
$result = preg_replace_callback(
	'/\d/',
	function($digits){
		return $digits[0]**3;
		},
	$str);
echo $result;
