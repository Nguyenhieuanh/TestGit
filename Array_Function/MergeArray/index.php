<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Gộp mảng</title>
</head>
<body>

</body>
</html>
<?php
function mergeArray($arr1, $arr2)
{
    $arr3 = [];
    for ($i = 0; $i < count($arr1); $i++) {
        array_push($arr3, $arr1[$i]);
    }
    for ($j = 0; $j < count($arr2); $j++) {
        array_push($arr3, $arr2[$j]);
    }
    var_dump($arr3);
}

$arr1 = [10, 4, 6, 7, 8, 6, 0, 0, 0, 0];

$arr2 = [10, 4, 6, 7, 8, 6,];

mergeArray($arr1,$arr2);
