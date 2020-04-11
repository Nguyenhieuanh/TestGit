<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[**Bài tập] Hiển thị số lượng tùy ý số nguyên tố đầu tiên</title>
</head>
<body>
<form action="index.php" method="post">
    <h2>Print Prime Number</h2>
    <input placeholder="" name="input"><br/><br/>
    <input type="submit" value="Print">
</form>
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];
    $count = 0;
    $number = 2;
    while ($count < $input) {
        if (isPrimeNumber($number)) {
            echo $number.', ';
            $count++;
        }
        $number++;
    }
}
