<?php

    session_start();
    require_once('../models/userModel.php');

    $ID = $_POST['ID'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
         

        $user = ['ID'=> $ID, 'password'=> $password, 'name'=> $name, 'email'=> $email, 'usertype'=> $usertype];
        $status = insertUser($user);
        if($status){
            header('location: ../views/login.php');
        }else{
            echo "DB insert error!";
        }
        
    


?>