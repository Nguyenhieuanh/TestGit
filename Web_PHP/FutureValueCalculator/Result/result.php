<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ứng dụng Future Value Calculator
    </title>
</head>
<style>
    #content {
        width: 450px;
        margin: 0 auto;
        padding: 0 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1 {
        color: navy;
    }

    label {
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input {
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    #buttons input {
        float: left;
        margin-bottom: .5em;
    }

    br {
        clear: left;
    }

    .error {
        color: red;
    }
</style>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>

    <form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $investment = $_POST['investment'];
            $rate = $_POST['rate'];
            $years = $_POST['years'];

            if ($investment == false) {
                echo "<span class='error'>Investment is a required field</span></br></br>";
            } elseif ($rate == false) {
                echo "<span class='error'>Rate is a required field</span></br></br>";
            } elseif ($years == false) {
                echo "<span class='error'>Number of years is a required field</span></br></br>";
            } else {
                $futureValue = $investment * ((1 + $rate / 100) ** $years);
                echo '<label>Investment Amount:</label>' . '$' . $investment . '</br>';
                echo '<label>Yearly Interest Rate:</label>' . $rate . '%' . '</br>';
                echo '<label>Number of Years:</label>' . $years . '</br>';
                echo '<label>Future Value:</label>' . '$' . $futureValue . '</br>';
                echo '</br></br>';
            }
        }
        ?>
    </form>
</div>
</body>
</html>