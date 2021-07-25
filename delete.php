<?php 

    include("config.php");
    
    if(isset($_POST['delete'])) {

        $id = $_POST['ID'];
        $sql = "DELETE FROM student_list WHERE id = '$id'";
        $conn->query($sql) or die ($conn->error);
        echo header("Location: index.php");

    }

 
?>

