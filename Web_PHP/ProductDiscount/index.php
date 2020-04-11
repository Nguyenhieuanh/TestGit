<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ứng dụng Product Discount Calculator</title>
    <link type="text/css" rel="stylesheet" href="Style/myStyle.css">
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="Result/result.php">
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description"/><br/>
            <label>List Price:</label>
            <input type="text" name="price"/><br/>
            <label>Discount Percent:</label>
            <input type="text" name="discount_percent"/>(%)<br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Discount"/><br/>
        </div>
    </form>
</div>
</body>
</html>


