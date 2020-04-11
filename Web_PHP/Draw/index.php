<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Hiển thị các loại hình</title>
</head>
<style>
    .container {
        margin-top: 50px;
        margin-left: 30px;
    }
</style>
<body>
<form action="index.php" method="post">
    <div class="container">
        <h2>Drawing</h2>
        <select name="draw">
            <option value="rect">Rectangle</option>
            <option value="rightTriangle">Right Triangle</option>
            <option value="invertedTriangle">Inverted Triangle</option>
            <option value="isoscelesTriangle">Isosceles Triangle</option>
        </select>
        <input type="submit" value="Draw"/><br/><br/>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $draw = $_POST['draw'];
            if ($draw == 'rect') {
                for ($i = 0; $i < 3; $i++) {
                    echo "<br/>";
                    for ($j = 0; $j < 7; $j++) {
                        echo " * ";
                    }
                }
            } elseif ($draw == "rightTriangle") {
                for ($i = 1; $i <= 5; $i++) {
                    echo "<br>";
                    for ($j = 1; $j <= $i; $j++) {
                        echo " * ";
                        if ($j < $i) {
                            echo " ";
                        }
                    }
                }
            } elseif ($draw == "invertedTriangle") {
                for ($i = 7; $i >= 1; $i--) {
                    echo '<br/>';
                    for ($j = 1; $j <= $i; $j++) {
                        echo " * ";
                    }
                }
            } elseif ($draw == "isoscelesTriangle") {
                for ($i = 1; $i <= 7; $i++) {
                    for ($j = 7 - $i; $j >= 1; $j--) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($j = 1; $j <= ($i * 2) - 1; $j++) {
                        echo "*";
                    }
                    echo "<br/>";
                }
            }
        }
        ?>
    </div>
</form>
</body>
</html>



