<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $jsonFile = file_get_contents("movies.json");
        $array = json_decode($jsonFile,true);
    ?>
    <select id="year_movie">
        <?php 
        foreach ($array as $key => $value) {
            echo "<option value='{$value}'>".$value["year"]." : ".$value["title"]."</option>";
        }
        ?>
    </select>
    <input type="text" name="year" value="">
    <script>
        var str="";
        var jsonEx = <?php echo $jsonFile ?>
    </script>
</body>
</html>