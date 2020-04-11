<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Tính tổng các số ở một cột xác định</title>
</head>
<body>

</body>
</html>
<?php
function sumColumn($arr, $col)
{
    // $col: position of the column to be summed
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i][$col];
    }
    echo $sum;
}

$arr = [
        [1,32,51,53,63,1236,63],
        [1,44,56,573,24,45,234],
        [4,23,42,542,123,425,13]
    ];

sumColumn($arr,1); //$sum = 99.