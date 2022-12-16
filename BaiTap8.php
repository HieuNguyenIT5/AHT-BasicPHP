<?php
function validateNumber($number)
{
    //cach 1:
    //return number_format($number, 3, '.', ',');

    //cach 2
    $number = round($number, 3);
    $result = $number.'';
    $x = strpos($result, '.');
    $thapPhan = substr($result,$x,4);
    $result = substr($result,0,$x);
    $len = strlen($result);
    $index = strlen($result) - 3;
    while($index > 0){
        $begin = substr($result,0,$index);
        $end = substr($result,$index,$len - $index);
        $result = $begin.','.$end;
        $index -= 3;
        $len = strlen($result);
    }
    return $result.$thapPhan;
}
if (isset($_POST["btn-submit"])) {
    $number = (float)$_POST["number"];
    $result = validateNumber($number);
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
            <input type="text" placeholder="Nhap vao so cua ban!" name="number" value="<?= !empty($number) ? $number     : "" ?>">
            <input type="submit" value="Process" name="btn-submit">
        </form>
        <p><?= !empty($result) ? "Output: " . $result : "" ?></p>
    </div>
</body>

</html>