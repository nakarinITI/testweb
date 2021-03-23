<?php
    include_once("db.php");
    $myconn = new Database();
    $myconn->connect();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h1 align="center">ยินดีต้อนรับเข้าสู่เมนูลูกค้า</h1>
    <p align="center"><a href="" >|สั่งซื้อสินค้า|</a><a href="">|ชำระเงิน|</a><a href="">|ออกจากระบบ|</a></p>
    <h1 align="center">SHOPSHOCK</h1>
    <h2 align="center">Select Product to Cart</h2>
    <table border="1" align="center"> 
        <tr>
            <th>ID</th>
            <th>Product_code</th>
            <th>Product_Name</th>
            <th>Brand</th>
            <th>Unit</th>
            <th>Cost</th>
            <th>SHOPS</th>
        </tr>
        <?php
            $myconn->show_product();
        ?>
    </table>
</body>
</html>