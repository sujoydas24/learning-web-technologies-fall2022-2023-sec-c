 <?php
    session_start();

    $name = $_POST['name'];
    $buyprice = $_POST['buyP'];
    $sellprice = $_POST['sellP'];

    if($name == "" || $buyprice == "" || $sellprice == ""){
        echo "null username/password/email";

    }else { 
        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "insert into users values('', '{$name}', '{$buyprice}', '{$sellprice}')";
        $status = mysqli_query($con, $sql);

        if($status){
            header('location: add.php');
            echo "Data inserted";
        }else{
            echo "Data insert error!";
        }
        
    }


?>