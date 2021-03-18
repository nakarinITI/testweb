<html>
<head>
    <meta charset="UTF-8">
</head>
<body >
    <h1>Result</h1>
    Add name:<input type="text" id="name"><br>
    Add age:<input type="text" id="age"><br>
    <button onclick="add_new()">Add Data</button><br>
    <div id="result"></div>
    <script>
        function loadDoc(){
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                console.log(this.readyState + "," + this.status);
                if(this.readyState==4 && this.status==200){
                    alert(this.responseText);
                }
            }
            xhttp.open("GET", "02rest.php");
            xhttp.send();
        }
        function add_new(){
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                console.log(this.readyState + ","+this.status);
                if(this.readyState==4 && this.status==200){
                    alert(this.responseText);
                }
            }
            n = document.getElementById("name");
            a = document.getElementById("age");
            xhttp.open("POST", "02rest.php",true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
            xhttp.send("u_name="+n.value+"&u_age="+a.value);
        }
    </script>
</body>
</html>