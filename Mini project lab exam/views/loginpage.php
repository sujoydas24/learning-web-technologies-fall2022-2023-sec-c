<?php 

    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="loginCheck.php">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td>User ID</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Submit"> <br>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><a href="registration.php">register</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>