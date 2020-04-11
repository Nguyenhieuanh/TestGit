<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arr = $_REQUEST['value'];
    function checkMax($arr)
    {
        $max = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($max < $arr[$i]) {
                $max = $arr[$i];
            }
        }
        echo "Max value = " . $max;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Tìm phần tử lớn nhất trong mảng hai chiều</title>
</head>
<style>
    .container {
        float: left;
        border: 1px solid black;
        padding: 20px 20px 20px;
        margin-left: 20px;
    }

    label {
        float: left;
        padding-right: 15px;
        width: 130px;
    }

    #data input {
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    br {
        clear: left;
    }

    h2 {
        margin-left: 20px;
    }
</style>
<body>
<form method="post">
    <h2>Max Value Of Array</h2>
    <div class="container">
        <div id="data">
            <label>Number of rows</label>
            <input type="text" name="rows"/><br/>
            <label>Number of columns</label>
            <input type="text" name="cols"/><br/>
        </div>
        <label>&ensp;</label>
        <input type="submit" value="Submit"/>
        <h2>Matrix</h2>
        <table>
            <?php for ($i = 0; $i < $rows; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < $cols; $j++): ?>
                        <td><input type="number" name="value[]"></td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
        <?php checkMax($arr); ?>
    </div>
</form>
</body>
</html>
