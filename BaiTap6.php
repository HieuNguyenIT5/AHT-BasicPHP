<?php
function mostPopularChar($input)
{
    $arr = str_split($input);
    //cach 2
    $countArr = array_count_values($arr);
    //Cach 1
    // $countArr = array();
    // $len = count($arr);
    // $maxCount = 0;
    // $dem = 0;
    // for ($i = 0; $i < $len; $i++) {
    //     $dem = 1;
    //     for ($j = $i + 1; $j < $len; $j++) {
    //         if ($arr[$j] == $arr[$i]) {
    //             $dem++;
    //         }
    //     }
    //     if(!isset($countArr[$arr[$i]])){
    //         $countArr[$arr[$i]] = $dem;
    //     }
    // }// End
    $maxCount = max($countArr);
    $result = "";
    $count = 0;
    foreach ($countArr as $key => $val) {
        if ($val == $maxCount) {
            if ($count == 0) {
                $result .= $key;
                $count++;
            } else {
                $result .= " and " . $key;
                $count++;
            }
        }
    }
    if ($count > 1) {
        $result = "Both " . $result;
        $result .= " are equal. No most popular char.";
    }
    return $result;
}
if (isset($_POST["btn-submit"])) {
    $input = $_POST["text"];
    $result = mostPopularChar($input);
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
            <input type="text" placeholder="Nhap vao chuoi cua ban!" name="text" value="<?= !empty($input) ? $input : "gh12cdy695m1" ?>">
            <input type="submit" value="Process" name="btn-submit">
        </form>
        <p><?= !empty($result) ? "Output: " . $result : "" ?></p>
    </div>
</body>

</html>