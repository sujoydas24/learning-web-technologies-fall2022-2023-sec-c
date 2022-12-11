<html>
    <head></head>
    <body>
        <table>
            <fieldset>
                 <legend><b>DISPLAY</b></legend>
                        <?php
                            session_start();                            
                            $con = mysqli_connect('localhost', 'root', '', 'product_db');
                            $sql ="select * from products";
                            $result = mysqli_query($con, $sql);
                        ?>
            </fieldset>
        </table>
    </body>
</html>