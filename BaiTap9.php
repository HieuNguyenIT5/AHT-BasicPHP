<?php
$my_array = ['a', 'b', 'c'];
$other_array= [1, 2, 3];
function transferringArray(&$my_array, &$other_array){
    $temp = array_reverse($my_array);
    $my_array = array_reverse($other_array);
    $other_array = $temp;
}
transferringArray($my_array, $other_array);

echo "<pre>";
print_r($my_array);
echo "</pre>";

echo "<pre>";
print_r($other_array);
echo "</pre>";
?>