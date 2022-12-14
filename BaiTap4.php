<?php
    function Backspaces($input){
        while(strpos($input,'#')){
            $input = preg_replace("/[a-z]#/","", $input);
        }
        return $input;
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
            <input type="text" placeholder="Nhap vao chuoi cua ban!" name="text" value="<?= !empty($input) ? $input: "abd#c##c" ?>">
            <input type="submit" value="Process" name="btn-submit">
        </form>
        <p><?= !empty($result) ? "Output:".$result : "" ?></p>
    </div>
</body>
</html>