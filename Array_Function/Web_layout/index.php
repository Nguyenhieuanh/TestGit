<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Tạo layout cho trang web</title>
    <link type="text/css" rel="stylesheet" href="My-CSS/style.css"/>
</head>
<body>
<div class="container">
    <header><?php include "Layout/head.php"; ?></header>
    <nav><?php include "Layout/nav.php"; ?></nav>
    <article><?php include "Layout/content.php"; ?></article>
    <footer><?php include "Layout/footer.php";?></footer>
</div>

</body>
</html>