<?php
// задание 1
function showName($string){
	return  basename($string, '.txt');
};
$str = 'C:\OpenServer\testsite\www\someFile.txt';
var_dump(showName($str));

// задание 2
$str = 'Regular everyday normal mthfka';
$val =2;
function stringConv($string, $val){
	if($flag === 1){
		 return strtoupper($string);
	};
	if($flag === 2){
		 return strtolower($string);
	};
	if($flag === 3){
		 return ucwords(strtolower($string));
	};
};
var_dump(stringConv($str,$val));

// задание 3
$str = 'Cest_beau_la_bourgeoisie';
	function get_string($string){
		$newString=ucwords($string, '_');
		return str_replace('_','',$newString);
	};
var_dump(get_string($str));
 ?>
