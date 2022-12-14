<?php
    function Backspaces($input){
        if(preg_match_all("/[0-9]+/", $input, $matchs)){
            $numbers = $matchs[0];
            $max = 0;
            foreach($numbers as $number){
                if($max < $number){
                    $max = $number;
                }
            }
            return $max;
        }else{
            return "Khong co so nao trong chuoi.";
        }
        
    }
    if(isset($_POST["btn-submit"])){
        $input = $_POST["text"];
        $result = Backspaces($input);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 4</title>
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
            <input type="text" placeholder="Nhap vao chuoi cua ban!" name="text" value="<?= !empty($input) ? $input: "gh12cdy695m1" ?>">
            <input type="submit" value="Process" name="btn-submit">
        </form>
        <p><?= !empty($result) ? "Output:".$result : "" ?></p>
    </div>
</body>
</html>