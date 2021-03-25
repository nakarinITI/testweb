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
    <h1 align="center">SHOPSHOCK</h1>
    <h2 align="center">กรุณากรอกชื่อผู้ใช้และรหัสผ่านเพื่อเข้าสู่ระบบ</h2>
    <form action="f.php" method="post"></form>
    <table align="center"> 
        <tr>
            <td>Username :</td><td><input type="text" name="uname" require></td>
        </tr>
        <tr>
            <td>Password :</td><td><input type="password" name="uname" require></td>
        </tr>
    </table>
    <p align="center"><input type="submit" value="submit" ><input type="reset" value="reset"></p>
</body>
</html>