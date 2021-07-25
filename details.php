<?php

include('header.php');
include('config.php');
if(!isset($_SESSION)) {
    session_start();
}

$id = $_GET['ID'];
// RETRIEVE THE FILE FROM DATABASE
$sql = "SELECT * FROM `student_list` WHERE id ='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<div class="main_container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
        <?php
            
            if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin") {
                echo "Welcome " .ucwords($_SESSION['UserLogin'])."<br>";
            } else {
                echo header("Location: index.php");
            }
        
        ?>
            <h2>Student Management System</h2>


            <!-- EDIT, DELETE -->
            <form action="delete.php" method="post">
                <a href="index.php" class="btn btn-info btn-sm mb-1">Back</a>
                <a href="edit.php?ID=<?php echo $row['id']?>" role="button" class="btn btn-info btn-sm mb-1">Edit</a>
                <button type="submit" name="delete" class="btn btn-info btn-sm mb-1">Delete</button>
                <input type="hidden" name="ID" value="<?php echo $row['id'];?>">
            </form>


            <!-- TABLE START -->
            <table>
                <thead>
                    <tr>
                        <th>FIRSTNAME</th>
                        <th>LASTNAME</th>
                        <th>BIRTHDAY</th>
                        <th>ADDRESS</th>
                        <th>GENDER</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['firstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['birthday'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        
                    </tr>
                </tbody>
            </table>
            <!-- TABLE END -->
        </div>
    </div>
</div>





<?php

include('footer.php');

?>