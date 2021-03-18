<?php
    include_once "01db.php";
    include_once "util.php";
    $debug_mode = false;
    if($_SERVER['REQUEST_METHOD']=='GET'){
        debug_text("GET METHOD Process......",$debug_mode);
        echo json_encode(show_data());
    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        debug_text("POST METHOD May be implement soon...",$debug_mode);
    }else{
        debug_text("Error Unknow this request",$debug_mode);
        http_response_code(405);
    }

    function show_data(){
        $mydb = new db("root","","person_data",true);
        $data = $mydb->query("select * from person");
        print_r($data);
        $mydb->close();
        return $data;
    }
?>