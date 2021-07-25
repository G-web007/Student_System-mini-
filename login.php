<?php 

include("header.php");
include("config.php");
if(!isset($_SESSION)) {
    session_start();
}
error_reporting(0);

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $total = $result->num_rows;//total users stored in the database

        if($total > 0) {

            $_SESSION['UserLogin'] = $row['username'];
            $_SESSION['Access'] = $row['access'];
            header("Location: index.php");

        }
    } else {
        echo '<script>swal("WoOPs! Wrong Email or Password!", "Please Check!", "error")</script>';
    }
}

?>

<!-- LOGIN AREA -->

<div class="container">
    <form action ="" method = "post" class ="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight:800;">Login</p>
        <div class="input-group">
            <input type ="email" placeholder = "Email" name = "email" values="<?php echo $_POST['email'];?>" required>
        </div>
        <div class="input-group">
            <input type ="password" placeholder = "Password" name = "password" values="<?php echo $_POST['password'];?>" required>
        </div>
        <div class="input-group">
            <button name = "submit" class = "btn">Login</button>
        </div>
        <p class="login-register-text text-black-50">Don't have an account?<a href="registration.php"> Register Here</a></p>
    </form>
</div>

<!-- END LOGIN AREA -->

<?php include("footer.php");?>