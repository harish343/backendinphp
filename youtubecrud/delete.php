<?php

include 'connection.php';
$id = $_GET['id'];
$deletequery = "delete from jobregistration where id=$id";

$query = mysqli_query($conn,$deletequery);
if($query){
    ?>
    <script>
        alert("deleted succesfully")
    </script>
    <?php
    
}
else{
    ?>
     <script>
        alert("not deleted succesfully")
    </script>
    <?php
}

?>