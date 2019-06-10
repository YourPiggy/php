<?php
// задание 3
$week = array(
    0 => 'Mon',
    1 => 'Tues',
    2 => 'Wed',
    3 => 'Thurs',
    4 => 'Fri',
    5 => 'Sat',
    6 => 'Sun'
);
foreach ($week as $key => $day) {
	if ($key === date("W")) {
		echo('<b>'.$day.'</b>'.'<br>');
	} else echo('<br>'.$day.'<br>');
}
// задание 4

$goods = [
  '1'=> [
    'price' => 10,
    'count' => 2
],
  '2'=> [
    'price' => 5,
    'count' => 5
],
  '3'=> [
    'price' => 8,
    'count' => 5
],
  '4'=> [
    'price' => 12,
    'count' => 4
],
  '5'=> [
    'price' => 8,
    'count' => 4
],
];
foreach ($goods as $key => $row) {
  $price[$key] = $row['price'];
  $count[$key] = $row['count'];
}

array_multisort($price, SORT_DESC, $count, SORT_ASC, $goods);

var_dump("Цена отсортирована в порядке уменьшения");
var_dump($price, $count);
 ?>
