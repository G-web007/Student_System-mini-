<?php 

    include("header.php");
    include("config.php");
    error_reporting(0);
    
    if(isset($_POST['submit'])) {

        $fname = ucwords($_POST['firstname']);
        $lname = ucwords($_POST['lastname']);
        $birthday = ucwords($_POST['birthday']);
        $address = ucwords($_POST['address']);
        $gender = ucwords($_POST['gender']);
        

        if($fname == "" || empty($fname) && $lname == "" || empty($lname) && $birthday == "" || empty($birthday) && $address == "" || empty($address) && $gender == "" || empty($gender) ) {
            echo '<script>swal("Oops!", "This Field Not be Empty!", "error");</script>';

        } else {
            $sql = "INSERT INTO student_list(`firstname`, `lastname`, `birthday`, `address`, `gender`) VALUES ('$fname', '$lname', '$birthday', '$address', '$gender')";
            $conn->query($sql) or die($conn->error);
    
            echo '<script>swal("Wow!", "Successfully Added!", "success");</script>';

        }

    } 

?>



<!-- ADD FORM AREA -->

<div class="container">
    <form action="" method="post" class="login-email">
        <h3 class="mb-3 text-black-50 text-center">Insert Data</h3>
        <div class="input-group">
            <input type="text" placeholder="Firstname" name="firstname">
        </div>
        <div class="input-group">
            <input type="text" placeholder="Lastname" name="lastname">
        </div>
        <div class="input-group">
            <input type="text" placeholder="Birthday" name="birthday">
        </div>
        <div class="input-group">
            <input type="text" placeholder="Address" name="address">
        </div>
        <div class="input-group">
            <select class="form-select-sm mb-3 mt-3 text-black-50" name="gender">
                <option value="m" <?php echo ($gender == "")? 'Selected' : '';?>>--Select--</option>
                <option value="male" <?php echo ($gender == "Male")? 'Selected' : '';?>>Male</option>
                <option value="female" <?php echo($gender == "Female")? 'selected' : '';?>>Female</option>
            </select>
        </div>
        <div class="input-group">
            <button name = "submit" class= "btn">Add Query</button>
        </div>
        <p class="login-register-text text-black-50">Back to Home Page?<a href="index.php"> Home</a></p>
    </form>
</div>

<!-- END ADD FORM AREA -->

<?php include("footer.php");?>