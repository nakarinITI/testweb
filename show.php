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
    <a href="form_insert.php">Insert</a>
    <table border="1">
        <?php
            $myconn->show_information();
        ?>
    </table>
</body>
</html>