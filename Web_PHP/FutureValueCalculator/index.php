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

    <form action="Result/result.php" method="post">
        <div id="data">
            <label for="invest">Investment Amount:</label>
            <input type="text" id="invest" name="investment"/><br/>

            <label for="rates">Yearly Interest Rate:</label>
            <input type="text" id="rates" name="rate"/><br/>

            <label for="year">Number of Years:</label>
            <input type="text" id="year" name="years"/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br/>
        </div>
    </form>
</div>
</body>
</html>