<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Lớp hình chữ nhật</title>
</head>
<body>
<?php
include "class/Rectangle.php";
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo "Rectangle width: " . $rectangle->width;
echo "<br/>";
echo "Rectangle height: " . $rectangle->height;
echo "<br/>";
$rectangle->height = 30;
$rectangle->width = 20;

echo "Rectangle height: " . $rectangle->height;
echo "<br/>";
echo "Rectangle width: " . $rectangle->width;
echo "<br/>";
echo "Rectangle perimeter: " . $rectangle->getPerimeter();
echo "<br/>";
echo "Rectangle area: " . $rectangle->getArea();
echo "<br/>";
echo($rectangle->display());
?>
</body>
</html>

