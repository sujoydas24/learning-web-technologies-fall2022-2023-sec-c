<?php
    session_start();
    require_once('../models/userModel.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = ['username'=>$username, 'password'=>$password];

    $status = login($user);

    if($username == "" || $password == ""){
        //echo "null username/password";
        header('location: ../views/loginpage.php?err=null&&msg=abc');
        //echo "test";
    }else if($status){
        $_SESSION['valid'] = 'true';
        $_SESSION['name'] = $name;
        echo "OKKK";
        //header('location: ../views/home.php');
    }else{
        echo "invalid user";
    }

?>