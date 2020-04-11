<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Ứng dụng chuyển đổi tiền tệ</title>
</head>
<style>
    .container {
        width: 400px;
        height: 170px;
        line-height: 30px;
        padding-left: 10px;
        float: left;
    }

    label {
        width: 50px;
        padding-right: 1em;
        float: left;
    }

    input {
        float: left;
    }

    br {
        clear: left;
    }
</style>
<body>
<form action="index.php" method="post">
    <div class="container">
        <h2>Currency Conversion</h2>
        <label>USD</label>
        <input type="text" name="usd">&nbsp;$<br/>
        <label>&nbsp;</label>
        <input type="submit" value="Converse"/>
        <br/>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $input = $_POST['usd'];
            define('RATE', 23000);
            $output = $input * RATE;
            echo $input . " USD" . ' = ' . $output . " VND<br/>";
            echo "Rate: 1 USD  = 23.000 VND";
        }

        ?>
    </div>
</form>

</body>
</html>

