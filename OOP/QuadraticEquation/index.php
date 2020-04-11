<?php
include "class/QuadraticEquation.php";
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $numberA = $_GET['numberA'];
    $numberB = $_GET['numberB'];
    $numberC = $_GET['numberC'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Xây dựng lớp QuadraticEquation (Phương trình bậc hai)</title>
</head>
<style>
    .container {
        width: 500px;
        margin-left: 20px;
        margin-top: 50px;
        padding-left: 30px;
        line-height: 30px;
        border: 1px solid black;
    }

    .container label {
        width: 100px;
        float: left;
    }

    .container h2 {
        color: blue;
    }

    .container button {
        margin-bottom: 15px;
    }

    .container span {
        color: red;
        font-style: italic;
    }
</style>
<body>
<form action="index.php" method="get">
    <div class="container">
        <h2>Quadratic Equation</h2>
        <label for="one">Number a:</label>
        <input type="text" id="one" name="numberA" value="<?php echo $numberA ?>"><br/>
        <label for="two">Number b:</label>
        <input type="text" id="two" name="numberB" value="<?php echo $numberB ?>"><br/>
        <label for="three">Number c:</label>
        <input type="text" id="three" name="numberC" value="<?php echo $numberC ?>"><br/>
        <label>&ensp;</label>
        <button type="submit">Calculate</button>
        <br/>
        <span>
        <?php
        $quadraticEquation = new QuadraticEquation($numberA, $numberB, $numberC);
        $quadraticEquation->getDiscriminant();
        echo $quadraticEquation->getRoot();
        ?>
        </span>
    </div>
</form>
</body>
</html>

