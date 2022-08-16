<?php

$var = "this is my text";
$count = 
echo $count;
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="name"></label>
        <input type="text" name="name" id = "name">
        <label for="color"></label>
        <input type="text" name="color">
        <input type="submit" name="submit" value="check now">

    </form>
    <p>
        <?php
            if(isset($_POST['submit'])){

    
            $favcolor = $_POST['color'];
            echo $favcolor;

        }
        ?>

    </p>

</body>
</html>