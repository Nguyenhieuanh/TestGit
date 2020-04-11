
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Hiển thị danh sách khách hàng</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th,td {
        padding: 8px;
        text-align: left;
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerList = array(
        "1" => array("name" => "Mai Văn Hoàn",
            "dob" => "1983-08-20",
            "address" => "Hà Nội",
            "img" => "images/img1.jpg"),
        "2" => array("name" => "Nguyễn Văn Nam",
            "dob" => "1983-08-20",
            "address" => "Bắc Giang",
            "img" => "images/img2.jpg"),
        "3" => array("name" => "Nguyễn Thái Hòa",
            "dob" => "1983-08-21",
            "address" => "Nam Định",
            "img" => "images/img3.jpg"),
        "4" => array("name" => "Trần Đăng Khoa",
            "dob" => "1983-08-22",
            "address" => "Hà Tây",
            "img" => "images/img4.jpg"),
        "5" => array("name" => "Nguyễn Đình Thi",
            "dob" => "1983-08-17",
            "address" => "Hà Nội",
            "img" => "images/img5.jpg")
    );

    foreach ($customerList as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value['name'] . "</td>";
        echo "<td>" . $value['dob'] . "</td>";
        echo "<td>" . $value['address'] . "</td>";
        echo "<td><img src='" . $value['img'] . "'width='60px' height='60px'></td>";
    }
    ?>
</table>

</body>
</html>
