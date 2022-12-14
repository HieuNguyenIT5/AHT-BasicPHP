<?php
    function createPhoneNumber($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        $phone = implode("",$arr);
        if(preg_match( "/([0-9]{3})([0-9]{3})([0-9]{4})$/", $phone,  $matches ) ){
            $phone = "(".$matches[1].") ".$matches[2]."-".$matches[3];
        }
        return $phone;
    }
    echo "Returns: ".createPhoneNumber([0,2,3,4,5,6,7,8,9,9]);
?>