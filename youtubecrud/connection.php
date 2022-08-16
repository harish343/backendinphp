
<?php
$username = "root";
$password ="";
$server = "localhost" ;
$db = "contact";

$conn = mysqli_connect($server,$username,$password,$db);
if($conn){
    echo "connectin sucess";
}
else{
    echo "connection not sucesss";
    die("no connection".mysqli_connect_error());
}


?>