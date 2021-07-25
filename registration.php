<?php 

    include("header.php");
    include("config.php");
    error_reporting(0);
    
    if(isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $access = ucwords($_POST['access']);

        if($password == $cpassword) {
            $sql = "SELECT * FROM users WHERE email= '$email'";
            $result = mysqli_query($conn, $sql);
            if(!$result-> num_rows > 0) {
                $sql = "INSERT INTO users (username, email, password, access) VALUES ('$username', '$email', '$password', '$access')";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    echo '<script>swal("WoW! Succesfully Registered!", "Congratulation!", "success")</script>';
                    $username = "";
                    $password = "";
                    $_POST['password'];
                    $_POST['cpassword'];
                } else {
                    echo '<script>swal("WoOPs! Something Went Wrong!", "Please Check!", "warning")</script>';
                }

            } else {
                echo '<script>swal("WoOPs! Email or Username Already Exists!", "Please Check!", "warning")</script>';
            }
            
        } else {
            echo '<script>swal("Password did not Matched!", "Try Again!", "error");</script>';
        }

    }

?>



<!-- REGISTRATION AREA -->

<div class="container">
    <form action="" method="post" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight:800;">Register</p>
        <div class="input-group">
            <input type="text" placeholder="Username" name="username" value="<?php echo $_POST['username'];?>" required>
        </div>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo $_POST['email'];?>"  required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password'];?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword'];?>" required>
        </div>
        <select class="form-select form-select-sm mb-3 mt-3 text-black-50" name="access" id="" required>
            <option value=" ">--Select--</option>
            <option value="Admin" <?php echo $_POST['access'];?>>Admin</option>
            <option value="User"  <?php echo $_POST['access'];?>>User</option>
        </select>
        <div class="input-group">
            <button name = "submit" class= "btn">Register</button>
        </div>
        <p class="login-register-text text-black-50">Have an account?<a href="Login.php"> Login Here</a></p>
    </form>
</div>

<!-- END REGISTRATION AREA -->

<?php include("footer.php");?>