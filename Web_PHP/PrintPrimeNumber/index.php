<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Hiển thị các số nguyên tố nhỏ hơn 100</title>
</head>
<body>

</body>
</html>

<?php
function isPrimeNumber($number)
{
    if ($number < 2) {
        return false;
    }
    for($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    } return true;
}

echo "Prime Number less than 100: <br/>";
for ($i = 2; $i < 100; $i++) {
    if (isPrimeNumber($i) == true) {
        echo $i . ', ';
    }
}