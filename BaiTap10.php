<?php
function reverseVowels($str){
    $index = strlen($str)-1;
    $Vowels = array('u','e','o','a','i');
    for($i = 0; $i< strlen($str); $i++){
        for($j = $index; $j > $i; $j--){
            if(in_array($str[$i], $Vowels) && in_array($str[$j],$Vowels)){
                $temp = $str[$i];
                $str[$i] = $str[$j];
                $str[$j] = $temp;

                $index = $j-1;
                break;
            }
        }
    }
    return $str;
}

// $str = "Hello";
$str = "Tomatoes";
echo "Chuoi ban dau: ".$str;
echo "<br/>";
echo "Chuoi dich: ".reverseVowels($str);
?>