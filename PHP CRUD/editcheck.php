<?php
    session_start();

    $name = $_POST['name'];
    $buyprice = $_POST['buyP'];
    $sellprice = $_POST['sellP'];

    if($name == "" || $buyprice == "" || $sellprice == ""){
        echo "null username/password/email";

    }else { 
        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "UPDATE `products` SET `name`='{$name}',`buyingprice`='{$buyprice}',`sellingprice`='{$sellprice}',`display`='{$display}' WHERE `id`='{$id}'";
        $status = mysqli_query($con, $sql);

        if($status){
            header('location: edit.php');
            echo "Data edited";
        }else{
            echo "Data edit error!";
        }
        
    }

