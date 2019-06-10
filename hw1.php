<?php
$num=800;
$count=0;
while($num>=50){
	$num/=2;
	echo $num.'<br>';
	$count++;
}
var_dump('Количество циклов: '.$count.'<br><br><br>');

$num = 800;
$cnt=0;
for ($cnt = 0; $num >= 50; $cnt++) {
    $num = $num / 2;
};
var_dump('Количество циклов', ' = '.$cnt);

 ?>
