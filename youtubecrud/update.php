

<?php
include 'connection.php';

$ids = $_GET['id'];
$showquery = "select * from jobregistration where id={$ids}";
$showdata = mysqli_query($conn,$showquery);
$arrdata = mysqli_fetch_array($showdata);



if(isset($_POST['submit'])){
  $isupdate = $_GET['id'];
  $name = $_POST['name'];
  $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $refer = $_POST['refer'];
  $jobpost=$_POST['jobpost'];
  // $insertquery = "INSERT INTO `jobregistration`( `name`, `degree`, `mobile`, `refer`, `email`, `jobpost`) VALUES ('[$name]','[-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')"
  // $insertquery = "insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile','$refer','$email','$jobprofile')" ;
  $updatequery = "update jobregistration set id= $isupdate,name = '$name',degree = '$degree', refer ='$refer',mobile ='$mobile',email='$email',jobpost = '$jobpost' where id=$isupdate";
  $res = mysqli_query($conn,$updatequery);
  if($res){
    ?>
    <script>
      alert('data updated properly')
      
      </script>
      
    <?php 
    }
    else{
      ?>
      <script>
      alert('data not updated properly')
    
      </script>
   <?php
    } 
}
?>
<script src="https://cdn.tailwindcss.com"></script>
<form method="POST">
      <div class="flex flex-wrap -m-2">
      
      
        
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">name</label>
            <input type="text" value="<?php echo $arrdata['name']; ?>" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">degree</label>
            <input type="text" value="<?php echo $arrdata['degree']; ?>" id="degree" name="degree" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">mobile</label>
            <input type="integer" value="<?php echo $arrdata['mobile']; ?>" id="mobile" name="mobile" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">refer</label>
            <input type="text" value="<?php echo $arrdata['refer']; ?>"  id="refer" name="refer" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="text" value="<?php echo $arrdata['email']; ?>" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">jobpost</label>
            <input type="text" value="<?php echo $arrdata['jobpost']; ?>" id="jobpost" name="jobpost" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
       
        
        <div class="p-2 w-full">
          <input type="submit" name="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"></input>
        </div>
       </form>
       
