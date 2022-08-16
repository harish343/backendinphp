
<?php
session_start();
?>


<?php
include 'dbconnection.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email_search = "select * from registration where email='$email' ";
    $query = mysqli_query($conn,$email_search);
    $email_count = mysqli_num_rows($query);
    if($email_count){
        $email_pass  = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $_SESSION['username'] = $email_pass['username'];
        $pass_decode = password_verify($password,$db_pass);
        if($pass_decode){
            echo "login suceesful";
            ?>
            <script>
                location.replace("home.php")
            </script>
            <?php
        }else{
            echo "password incoreect";
        }
    }else{
        echo "invalid email";
    }
}
?>

<script src="https://cdn.tailwindcss.com"></script>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
            <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">username</label>
                <input type="email" id="username" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
        </div>
        <div class="p-2 w-1/2">
            <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">email</label>
                <input type="password" id="password" name="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
        </div>


        <div class="p-2 w-full">
            <input type="submit" name="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"></input>
        </div>
</form>