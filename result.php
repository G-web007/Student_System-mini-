<?php

include('header.php');
include('config.php');
if(!isset($_SESSION)) {
    session_start();
}

$search = $_GET['search'];

// RETRIEVE THE FILE FROM DATABASE
$sql = "SELECT * FROM `student_list` WHERE firstname LIKE '%$search%' || lastname LIKE '%$search' ORDER BY id DESC LIMIT 15";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

?>

<div class="main_container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <?php
                
                if(isset($_SESSION['UserLogin'])) {
                    echo "Welcome " .ucwords($_SESSION['UserLogin']);
                } else {
                    echo "Welcome Guest";
                }
            
            ?>
            <h2>Student Management System</h2>


            <!-- SEARCH BAR -->
            <form action="result.php" method="get">
                <input type="text" name="search" class="text-black-50">
                <button type="submit" class="btn btn-info btn-sm top-search mb-1">Search</button>
                <a href="index.php" class="btn btn-info btn-sm mb-1">Back</a>
            </form>


            <!-- TABLE START -->
            <table>
                <thead>
                    <tr>
                        <th>ACTION</th>
                        <th>FIRSTNAME</th>
                        <th>LASTNAME</th>
                    </tr>
                </thead>
                <tbody>

                <?php if($row > 0) {?>

                    <?php do{?>

                    <tr>
                        <td><a href="details.php?ID=<?php echo $row['id'];?>">View</td>
                        <td><?php echo $row['firstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                    </tr>

                    <?php } while($row = $result->fetch_assoc());?>             

                <?php } else { echo '<script>swal("No Data Found!", "Sorry!", "error");</script>';?>

                <?php };?>
                </tbody>
            </table>
            <!-- TABLE END -->
        </div>
    </div>
</div>





<?php

include('footer.php');

?>