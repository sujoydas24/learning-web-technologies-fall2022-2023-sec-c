<?php 

    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
    <head>
        <title> Registration </title>
    </head>
    <body>
        <fieldset>
            <legend>Registration</legend>
            <form method="post" action="../controler/regCheck.php">
                <table>
                    <tr>
                        <td>ID:</td> <td><input type="text" name= "ID" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Password:</td> <td><input type="password" name="password" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td> <td><input type="password" name="password" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Name:</td> <td><input type="text" name="name" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Email:</td> <td><input type="text" name="email" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>User Type</td>
                        <td><select name="usertype" id="user">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td><input type="submit" name="Register" value="Submit"></td>
                        <td><a href="loginpage.php">Login</a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>