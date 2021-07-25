<?php

include('header.php');
include('config.php');
if(!isset($_SESSION)) {
    session_start();
}

    $per_page_record = 15;  // Number of entries to show in a page.   
    // Look for a GET variable page if not found default is 1.        
    if (isset($_GET["page"])) {    
        $page  = $_GET["page"];    
    }    
    else {    
    $page=1;    
    }    

    $start_from = ($page-1) * $per_page_record;     



    // RETRIEVE THE FILE FROM DATABASE
    $sql = "SELECT * FROM student_list ORDER BY id DESC LIMIT $start_from, $per_page_record";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

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


            <!-- ADD, LOGOUT -->
            <?php if(isset($_SESSION['UserLogin'])) {?>

            <a class="btn btn-info btn-sm top-middle" href="logout.php" role="button">Logout</a>

            <?php } else {?>

                <a class="btn btn-info btn-sm top-right" href="login.php" role="button">Login</a>

            <?php }?>
            <a class="btn btn-info btn-sm mb-1 top-right" href="add.php" role="button">Add Data</a>
            

            <!-- SEARCH BAR -->

            <form action="result.php" method="get">
                <input type="text" name="search" class="text-black-50">
                <button type="submit" class="btn btn-info btn-sm top-search">Search</button>
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

                <?php do {?>

                    <tr>
                        <td><a href="details.php?ID=<?php echo $row['id'];?>">View</td>
                        <td><?php echo $row['firstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                    </tr>

                <?php } while($row = mysqli_fetch_assoc($result));?>

                </tbody>
            </table>
            <!-- TABLE END -->
        </div>
    </div>

    <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM student_list";     
        $result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($result);     
        $total_records = $row[0];     
          
        echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='index1.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {

              $pagLink .= "<a class = 'active' href='index1.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  { 

              $pagLink .= "<a href='index1.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='index1.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
     </div>    
    </div>   
  </div>  
</div>


<?php

include('footer.php');

?>