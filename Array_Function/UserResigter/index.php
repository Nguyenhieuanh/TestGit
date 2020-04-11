<?php
include "function.php";
$nameErr = null;
$emailErr = null;
$phoneErr = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $isError = false;

    if (empty($email)) {
        $emailErr = '* Email is a required field!';
        $isError = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Malformed email (xxx@xxx.xxx.xxx)";
        $isError = true;
    }
    if ($isError == false) {
        $userRegister = [
            "username" => $username,
            "email" => $email,
            "phone" => $phone
        ];
        saveData($userRegister, "user.json");
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
    <title>[Bài tập] Trang đăng ký người dùng</title>
</head>
<style>
    .container {
        border: 1px solid black;
        width: 450px;
        padding-left: 20px;
        margin-left: 20px;
        line-height: 30px;
    }

    label {
        width: 120px;
        float: left;
    }

    table {
        width: 1000px;
        margin-left: 20px;
        float: left;
        border-collapse: collapse
    }

    th, td {
        border: 1px solid black;
        width: auto;
        text-align: center;
    }

    .error {
        color: red;
        font-style: italic;
    }
</style>
<body>
<form method="post" action="index.php">
    <div class="container">
        <h2>User Register</h2>
        <label>User Name</label>
        <input type="text" name="username"><br/>
        <span class="error"><?php try {
                checkRequired($username);
            } catch (Exception $e) {
                echo '* User Name'. $e->getMessage();
            } ?></span><br/>
        <label>Email</label>
        <input type="text" name="email"><br/>
        <span class="error"><?php echo $emailErr ?></span><br/>
        <label>Phone Number</label>
        <input type="text" name="phone"><br/>
        <span class="error"><?php try {
                checkRequired($username);
            } catch (Exception $e) {
                echo '* Phone Number'. $e->getMessage();
            } ?></span><br/>
        <label>&ensp;</label>
        <input type="submit" value="Register">
    </div>

</form>
<br/><br/>
<table>
    <tr>
        <th>STT</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Phone Number</th>
    </tr>
    <?php
    $userRegister = getUserRegister("user.json");
    ?>
    <?php foreach ($userRegister as $index => $user): ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td><?php echo $user->username ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo $user->phone ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
