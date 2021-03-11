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
<body>
    <form action="editdata.php" method="POST">
    <table>
    <tr>
    <td>BookID:</td><td><input type="text" name="boookid" value="<?= $rs['BookID'] ?>"></td>
    </tr>
    <tr>
    <td>BookName:</td><td><input type="text" name="boookname" value="<?= $rs['BookName'] ?>"></td>
    </tr>
    <tr>
    <td>TypeID:</td><td><input type="text" name="typeid" value="<?= $rs['TypeID'] ?>"></td>
    </tr>
    <tr>
    <td>StatusID:</td><td><input type="text" name="StatusID" value="<?= $rs['StatusID'] ?>"></td>
    </tr>
    <tr>
    <td>Publish:</td><td><input type="text" name="Publish" value="<?= $rs['Publish'] ?>"></td>
    </tr>
    <tr>
    <td>UnitPrice:</td><td><input type="text" name="UnitPrice" value="<?= $rs['UnitPrice'] ?>"></td>
    </tr>
    <tr>
    <td>UnitRent:</td><td><input type="text" name="UnitRent" value="<?= $rs['UnitRent'] ?>"></td>
    </tr>
    <tr>
    <td>DayAmount:</td><td><input type="text" name="DayAmount" value="<?= $rs['DayAmount'] ?>"></td>
    </tr>
    <tr>
    <td>Picture:</td><td><input type="text" name="Picture" value="<?= $rs['Picture'] ?>"></td>
    </tr>
    <tr>
    <td>BookDate:</td><td><input type="text" name="BookDate" value="<?= $rs['BookDate'] ?>"></td>
    </tr>
    </table>
    </form>
</body>
</html>