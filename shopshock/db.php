<?php
    class database{
        public $dbConn=null;
        public function connect(){
            define("host","localhost");
            define("dbUser","root");
            define("password","");
            define("database","shopshock");
            $this->dbConn=new mysqli(host,dbUser,password,database);
            $this->dbConn->query("SET NAMES UTF8");

        if($this->dbConn->connect_error)
            die("Database Connection Error No.:".
                $this->dbConn->connect_error."|".$this->dbConn->connect_error);
        else{
            //echo "Successfully connected<br>";
        }
        }
        public function disconnect(){
            $this->dbConn->close();
        }

        public function show_product(){
            $SQL_Query="SELECT p.Product_id, p.Product_code, p.Product_Name, brand.Brand_name, unit.Unit_name, p.Cost FROM product AS p
            INNER JOIN brand ON (p.Brand_ID = brand.Brand_id) 
            INNER JOIN unit  ON (p.Unit_ID = unit.Unit_id)";
            $result = $this->dbConn->query($SQL_Query);
            $counter=0;
            while($row = $result->fetch_assoc()){
                echo"<tr>";
                foreach($row as $key => $value){
                    echo "<td>{$value}</td>";
                }
                echo "<td><a href='edit.php?id={$row['Product_id']}'>ShopShock</a></td>";
                echo"</tr>";
                }
        }
    }
?>