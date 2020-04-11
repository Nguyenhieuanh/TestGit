<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Hiển thị thông báo nếu người dùng nhập vào chỉ số không hợp lệ</title>
</head>
<body>
<form method="get">
    <?php
    ($arr = [93, 24, 77, 64, 43, 71, 92, 39, 18, 61, 97, 91, 48, 68, 45, 74, 51, 58, 59, 36, 29, 100, 79, 17, 32, 91, 20, 15, 57, 16, 45, 62, 19, 48, 31, 9, 22, 23, 68, 76, 55, 7, 21, 28, 49, 42, 64, 59, 46, 94, 2, 89, 87, 18, 77, 17, 50, 49, 19, 62, 45, 70, 74, 13, 91, 44, 66, 47, 39, 55, 98, 21, 53, 5, 21, 50, 94, 90, 78, 27, 24, 23, 79, 87, 74, 34, 36, 24, 4, 1, 73, 99, 20, 16, 15, 68, 74, 23, 60, 77]);
    foreach ($arr as $item =>$value) {
        echo '['.$item.']'.'->'.$value.'&ensp;&ensp;';
    }
    ?>

    <br/>
    <input type="text" name="index"/>
    <button type="submit">Check</button>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $index = $_GET['index'];
        try {
            if ($index < 0 || $index > 99) {
                throw new Exception("Index exceed the limit!");
            }
            echo $arr[$index];
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>
</form>
</body>
</html>

