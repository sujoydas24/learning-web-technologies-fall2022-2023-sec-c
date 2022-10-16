<?php

$username = $_POST ['username']
$password = $_POST ['password']

if ($username == "" || $password == "")
{
    echo "invalid username or password";
}
else if (str($username) <= 2 || str($password) <= 8)
{
    echo "invalid username or password";
}
else ($password == "@, #, $, %")
{
    echo "invalid username or password";
}
?>