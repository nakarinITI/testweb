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
    <table border="1">
        <?php
            $myconn->show_information();
        ?>
    </table>
</body>
</html>