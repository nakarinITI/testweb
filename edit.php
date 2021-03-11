<?php
    $id=$_GET['id'];
    include_once("db.php");
    $myconn = new Database();
    $myconn->connect();
    $rs = $myconn->sel_one($id);
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <input type="text" name="boookid" value="<?=$rs['BookID']?>">
</body>
</html>