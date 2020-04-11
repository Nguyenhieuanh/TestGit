<?php
include "class/StopWatch.php";
include "function/selection_sort.php";
$arr = [];
for ($i = 0; $i <= 30000; $i++) {
    array_push($arr, mt_rand(1, 10000));
}
$stopWatch = new StopWatch();
$stopWatch->start();
selection_sort($arr);
$stopWatch->stop();
echo "Algorithm implementation time is: " . ($stopWatch->getElapsedTime()) . ' ms';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Xây dựng lớp StopWatch</title>
</head>
<body>

</body>
</html>
