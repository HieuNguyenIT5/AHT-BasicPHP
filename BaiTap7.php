<?php
function countVowels($input)
{
    $arr = str_split($input);
    //cach 1
    $countArr = array_count_values($arr);
    $vowels = array('a', 'e', 'i', 'o', 'u' );
    $result = 0;
    foreach ($countArr as $key => $val) {
       if(in_array($key,$vowels)){
            $result += $val;
       }
    }
    return $result;
}
if (isset($_POST["btn-submit"])) {
    $input = $_POST["text"];
    $result = countVowels($input);
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
        .content {
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
            <input type="text" placeholder="Nhap vao chuoi cua ban!" name="text" value="<?= !empty($input) ? $input : "" ?>">
            <input type="submit" value="Process" name="btn-submit">
        </form>
        <p><?= !empty($result) ? "Output: " . $result : "" ?></p>
    </div>
</body>

</html>