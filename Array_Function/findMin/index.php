<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Tìm giá trị nhỏ nhất trong mảng</title>
</head>
<body>

</body>
</html>
<?php
$arr = [rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100)];
foreach ($arr as $item) {
    echo $item. '--';
}
echo "<br/>";
$min = $arr[0];
for ($i=0;$i<count($arr);$i++) {
    if ($min > $arr[$i]) {
        $min = $arr[$i];
    }
}
echo "Min is: ". $min;