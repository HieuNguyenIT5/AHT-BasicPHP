<?php
    function LongestWord($input){
        if(!empty($input)){
            $vowel = array('u','e','o','a','i');
            for($i = 0;$i< strlen($input); $i++){
                if($input[$i]>='a' && $input[$i] <='z'){
                    $input[$i] = chr(ord($input[$i])+1);
                    if(in_array($input[$i],$vowel)){
                        $input[$i] = strtoupper($input[$i]);
                    }
                }
            }

            return $input;
        }else return "Bạn không được để trống input";
    }

    if(isset($_POST["btn-submit"])){
        $input = $_POST["text"];
        $result = LongestWord($input);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 2</title>
    <style>
        .content{
            margin: 0 auto;
            padding: 30px;
            width: 300px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="content">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Nhap vao chuoi cua ban!" name="text" value="<?= !empty($input) ? $input: "" ?>">
            <input type="submit" value="Process" name="btn-submit">
        </form>
        <p><?= !empty($result) ? "Output:".$result : "" ?></p>
    </div>
</body>
</html>