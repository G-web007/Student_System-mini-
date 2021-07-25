<?php 

    include("header.php");
    include("config.php");
    error_reporting(0);

    $id = $_GET['ID'];

    //get the retrieve data from the database
    $sql = "SELECT * FROM `student_list` WHERE id ='$id'";
    $data = $conn->query($sql) or die ($conn->error);
    $row = $data->fetch_assoc();
        
    if(isset($_POST['submit'])) {

        $fname = ucwords($_POST['firstname']);
        $lname = ucwords($_POST['lastname']);
        $birthday = ucwords($_POST['birthday']);
        $address = ucwords($_POST['address']);
        $gender = ucwords($_POST['gender']);
        
        $sql = "UPDATE student_list SET firstname = '$fname', lastname = '$lname', birthday = '$birthday', address = '$address', gender = '$gender' WHERE id = '$id'";
        $conn->query($sql) or die($conn->error);

        echo header("Location: details.php?ID=".$id);


    } 

?>



<!-- ADD FORM AREA -->

<div class="container">
    <form action="" method="post" class="login-email">
        <h3 class="mb-3 text-black-50 text-center">Update Data</h3>
        <div class="input-group">
            <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $row['firstname'];?>">
        </div>
        <div class="input-group">
            <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $row['lastname'];?>">
        </div>
        <div class="input-group">
            <input type="text" placeholder="Birthday" name="birthday" value="<?php echo $row['birthday'];?>">
        </div>
        <div class="input-group">
            <input type="text" placeholder="Address" name="address" value="<?php echo $row['address'];?>">
        </div>
        <select class="form-select-sm mb-3 mt-3 text-black-50" name="gender" id="">
            <option value=" ">--Select--</option>
            <option value="male" <?php echo $row['gender']=="Male"?"selected":""; ?>>Male</option>
            <option value="female"  <?php echo $row['gender']=="Female"?"selected":""; ?>>Female</option>
        </select>
        <div class="input-group">
            <button name = "submit" class= "btn">Update</button>
        </div>
        <p class="login-register-text text-black-50">Do you want to?<a href="details.php?ID=<?php echo $row['id']?>"> Back</a></p>
    </form>
</div>

<!-- END ADD FORM AREA -->

<?php include("footer.php");?>