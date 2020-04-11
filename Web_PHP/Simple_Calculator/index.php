<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ứng dụng Calculator</title>
    <link type="text/css" rel="stylesheet" href="Style/my-style.css">
</head>
<body>
<div id="container">
    <h2>Simple Calculator</h2>

    <form action="index.php" method="get">
        <fieldset>
            <legend>Calculator</legend>
            <label>Fist operand:</label>
            <input type="text" id="first" name="firstOperand" value="0"><br/>
            <label>Operator:</label>
            <select name="opt">
                <option value="add">Addition</option>
                <option value="sub">Subtract</option>
                <option value="mul">Multiply</option>
                <option value="div">Division</option>
            </select><br/>
            <label>Second operand:</label>
            <input type="text" id="second" name="secondOperand" value="0"><br/>
            <div id="btn">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"/><br/>
            </div>
        </fieldset>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $first = $_GET['firstOperand'];
            $opt = $_GET['opt'];
            $second = $_GET['secondOperand'];
            $cal = new Calculator($first, $opt, $second);
            $cal->calculate();
        }
        ?>
    </form>
</div>
</body>
</html>

<?php

class Calculator
{
    public $firstOperand;
    public $operator;
    public $secondOperand;
    public $result;

    function __construct($firstOpr, $opt, $secondOpr)
    {
        $this->firstOperand = $firstOpr;
        $this->operator = $opt;
        $this->secondOperand = $secondOpr;
    }

    function calculate()
    {
        switch ($this->operator) {
            case 'add':
                $this->result = $this->firstOperand + $this->secondOperand;
                echo "<h2>Result:</h2>" . $this->firstOperand . " + " . $this->secondOperand . " = " . $this->result;
                break;
            case 'sub':
                $this->result = $this->firstOperand - $this->secondOperand;
                echo "<h2>Result:</h2>" . $this->firstOperand . " - " . $this->secondOperand . " = " . $this->result;
                break;
            case 'mul':
                $this->result = $this->firstOperand * $this->secondOperand;
                echo "<h2>Result:</h2>" . $this->firstOperand . " * " . $this->secondOperand . " = " . $this->result;
                break;
            case 'div':
                try {
                    $this->division($this->firstOperand, $this->secondOperand);
                } catch (Exception $e) {
                    echo "<p class='error'>" . $e->getMessage() . "</p>";
                }
                break;
        }
    }

    function division($number1, $number2)
    {
        if ($number2 == 0)
            throw new Exception('Error Division by zero');
        else {
            $result = $number1 / $number2;
            echo "<h2>Result:</h2>" . $number1 . " / " . $number2 . " = " . $result;
        }
    }
}
