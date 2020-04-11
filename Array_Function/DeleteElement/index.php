<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Xoá phần tử khỏi mảng</title>
</head>
<body>

</body>
</html>
<?php
function deleteElement($arr, $N)
{
    $index_del = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($N == $arr[$i]) {
            $index_del = $i;
        }
    }
    for ($j = $index_del; $j < count($arr);$j++) {
        $arr[$j] = $arr[$j + 1];
    }
    var_dump($arr);
}

$arr = [10, 4, 6, 7, 8, 6, 0, 0, 0, 0];

deleteElement($arr, 7);

