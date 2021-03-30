<!-- 
.
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
                echo "<td><a href='atc.php?id={$row['Product_id']}'>ShopShock</a></td>";
                echo"</tr>";
                }
        }

        public function sel_one($id){
            $SQL_Query="SELECT p.Product_id, p.Product_code, p.Product_Name, brand.Brand_name, unit.Unit_name, p.Cost FROM product AS p
            INNER JOIN brand ON (p.Brand_ID = brand.Brand_id) 
            INNER JOIN unit  ON (p.Unit_ID = unit.Unit_id)
            WHERE Product_id = '$id'";
            $result = $this->dbConn->query($SQL_Query);
            $row = $result->fetch_assoc();
            return($row);
        }
    }
?> -->
<?php
    class database{
        private $db;
        function connect(){
            $this->db = new mysqli("localhost","root","","shopshock");
            $this->db->set_charset("utf8");
            if($this->db->connect_errno) echo "Error something";
        } 
        function query($sql, $option=MYSQLI_NUM){
            $result = $this->db->query($sql);
            return $result->fetch_all($option);
        }
        function exec($sql){ return $this->db->query($sql);}
        function close(){ $this->db->close();}
    }


    //return $result;
?>