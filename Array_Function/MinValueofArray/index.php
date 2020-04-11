<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Tìm giá trị nhỏ nhất trong mảng sử dụng phương thức</title>
</head>
<body>

</body>
</html>

<?php
function findMin($arr)
{
    $indexOfMin = [];
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    echo "Min value of array = " . $min . "<br/>";

    for ($i =0; $i <count($arr); $i++) {
        if ($min == $arr[$i]) {
            array_push($indexOfMin,$i);
        }
    }
    var_dump($indexOfMin);
}


$arr1 = [1, 2, 3, 4, 5, 1, 6, 2, 3, 1, 234];
findMin($arr1);

