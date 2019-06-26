<?php 
/*
strtotime function will 'transform' date, oOor string into timestamp
argument must be in english
*/
echo strtotime('now'). '<br>';
$timeStamp = strtotime('12 May 1992');

echo date('d/m/Y', $timeStamp). '<br>';

$timeStamp2 = strtotime('next Monday');
echo date('d/m/Y ' , $timeStamp2);