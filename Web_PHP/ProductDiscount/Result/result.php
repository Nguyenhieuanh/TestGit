<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ứng dụng Product Discount Calculator</title>
    <link type="text/css" rel="stylesheet" href="../Style/myStyle.css">
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="result.php">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $description = $_POST['description'];
            $price = $_POST['price'];
            $discount = $_POST['discount_percent'];
            $discountAmount = $price * $discount / 100 * 0.1;
            $discountPrice = $discount - $discountAmount;

            echo "<label>Product Description:</label>" . $description . "<br/>";
            echo "<label>Price:</label>" . $price . "<br/>";
            echo "<label>Discount Percent:</label>" . $discount . "%<br/>";
            echo "<label>Discount Amount:</label>"."$" . $discountAmount . "<br/>";
            echo "<label>Discount Price:</label>" ."$". $discountPrice . "<br/>";
        }
        ?>
    </form>
</div>
</body>
</html>


