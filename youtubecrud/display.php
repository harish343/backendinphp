<?php
include 'connection.php';

$selectquery = 'select * from jobregistration';
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query)){
    
    ?>
  
  <table style="width:100%; border:1px solid black;">
  <tr>
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['degree']; ?></td>
  	<td><?php echo $res['mobile']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['refer']; ?></td>
    <td><?php echo $res['jobpost']; ?></td>
    <td><a href="update.php?id=<?php echo $res['id'];?>">Update</a></td>
    <td><a href="delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
  </tr>

</table>
  <?php
  

}

?>


