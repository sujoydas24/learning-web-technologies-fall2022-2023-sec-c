<?php 

    $host = "localhost:3308";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "users";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbname;
        global $dbpass;

        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
    }

?>