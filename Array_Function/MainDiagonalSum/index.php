<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arr = [];
    for ($i=0;$i<$rows;$i++) {
        for ($j = 0;$j <$cols;$j++) {
            $arr[$i][$j] = $_POST[$i .''. $j];
        }
    }
    function mainDiagonalSum($arr)
    {
        $diagonalSum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $diagonalSum += $arr[$i][$i];
        }
        echo "Main diagonal sum = ".$diagonalSum;
    }
    mainDiagonalSum($arr);
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>[*Bài tập] mảng hai chiều - tính tổng các số ở đường chéo chính của ma trận vuông</title>
    </head>
    <style>
        .container {
            float: left;
            border: 1px solid black;
            padding: 20px 20px 20px;
            margin-left: 20px;
        }

        .container input {
            width: 50px;
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
                <input type="text" name="rows" value="<?php echo $_POST['rows']?>"/><br/>
                <label>Number of columns</label>
                <input type="text" name="cols" value="<?php echo $_POST['cols']?>"/><br/>
            </div>
            <label>&ensp;</label>
            <button type="submit">Submit</button>
            <h2>Matrix</h2>
            <table>
                <?php for ($i = 0; $i < $rows; $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < $cols; $j++): ?>
                            <td><input type="number" name="<?php echo ($i .''. $j);?>" value="<?php echo $_POST[$i .''. $j]?>"></td>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
            </table>
            <?php checkMax($arr); ?>
        </div>
    </form>
    </body>
    </html>


<?php
//$arr = [
//    [1, 2, 3],
//    [4, 5, 6],
//    [7, 8, 9]
//];
//function mainDiagonalSum($arr)
//{
//    $diagonalSum = 0;
//    for ($i = 0; $i < count($arr); $i++) {
//        $diagonalSum += $arr[$i][$i];
//    }
//    echo $diagonalSum;
//}
//mainDiagonalSum($arr);