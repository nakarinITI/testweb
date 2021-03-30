<?php
    include_once("db.php");
    $myconn = new Database();
    $myconn->connect();
    $rs = $myconn->sel_one($_GET['id']);
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body><h1 align="center">SHOPSHOCK</h1>
    <h2 align="center">Select Product to Cart</h2>
    <table  align="center"> 
        <tr>
            <td align="right">Product_ID:</td><td><input type="text" value="<?= $rs['Product_id'] ?>"></td>
        </tr>
        <tr>
            <td align="right">Product_Code:</td><td><input type="text"  value="<?= $rs['Product_code'] ?>"></td>
        </tr>
        <tr>
            <td align="right">Product_Name:</td><td><input type="text" value="<?= $rs['Product_Name'] ?>"></td>
        </tr>
        <tr>
            <td align="right">Brand:</td><td><input type="text" value="<?= $rs['Brand_name'] ?>"></td>
        </tr>
        <tr>
            <td align="right">Unit:</td><td><input type="text" value="<?= $rs['Unit_name'] ?>"></td>
        </tr>
        <tr>
            <td align="right">Cost:</td><td><input type="text" value="<?= $rs['Cost'] ?>"></td>
        </tr>
        <tr>
            <td align="right">Quantity:</td><td><input type="number"></td>
        </tr>
           
    </table>
    <p align="center"><input type="submit" value="submit" style="margin-right: 10px;"><input type="reset" value="reset"></p>
</body>
</html>