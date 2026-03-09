<?php
$lista1 = [10,7,5,4,2,2];
$lista2 = [8,4,7,1,10];

echo "<pre>";print_r($lista1);echo "</pre>";
echo "<pre>";print_r($lista2);echo "</pre>";

$dif1 = array_diff($lista1, $lista2);
echo "<pre>";print_r($dif1);echo "</pre>";
$dif2 = array_diff($lista2, $lista1);
echo "<pre>";print_r($dif2);echo "</pre>";
$union = array_values(array_unique(array_merge($dif1, $dif2)));
echo "<pre>";print_r($union);echo "</pre>";
?>