<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Đếm số lần xuất hiện của ký tự trong chuỗi</title>
</head>
<body>

</body>
</html>
<?php
function countOccurrences($str, $value)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($value == $str[$i]) {
            $count++;
        }
    }
    return $count;
}

$str = "nguyen hieu anh";

echo (countOccurrences($str,'u'));