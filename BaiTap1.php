<?php
    function LongestWord($input){
        if(!empty($input)){
            $search = ['!','@','#' ,'$' ,'^' ,'&','%' ,'*' ,'(' ,')' ,'+' ,'=' ,'-' ,'[' ,']','|' ,':' ,'<' ,'>' ,'?' ,',' ,'.','/',"\\", "  "];
            $input = str_replace($search,' ', $input);
            $text = explode(' ',$input);
            $maxLengthWord = 0;
            $result = "";
            foreach($text as $word){
                if($maxLengthWord < strlen($word) && $result != $word){
                    $maxLengthWord = strlen($word);
                    $result = $word;
                } 
            }
            return $result;
            print_r($result);
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
    <title>Bai Tap 1</title>
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