<?php
// convert fahrenheit to celsius

// my formula: C = 5/9 (F-32)

 if($_POST){
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit - 32)*5/9;
 }
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Convert Fahrenheit to Celsius in PHP</title>
    </head>
    <body>
        <form action="" method="post">
        Fahrenheit: <input type="text" name="fahrenheit" /><br />
        <?php 
        if(isset($celsius)){
            echo "Celsius = ".$celsius;
        }
        ?>
       </form
    </body>
</html>