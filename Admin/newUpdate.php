<?php 
include('./adminPartials/adminHeader.php');
$date = date("Y-m-d");
ob_start();
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="updatesBody">
            <div class="top flex">
                <h1 class="titleText">
                 Create Update
                </h1>
               <p>Inform your people about JadaCars!</p>
            </div>

            <div class="newUpdateDiv">
                <h3>Most recent Update</h3>

                <?php 
                    $sql = "SELECT * FROM updates order by id desc limit 1";
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                        $count =  mysqli_num_rows($res);

                        if($count > 0){
                            while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $title = $row['title'];
                                $text = $row['text'];
                                $date = $row['date'];
                               
                                ?>
                                    <div class="singleUpdate">
                                        <div class="cardTop flex">
                                            <span class="updateID">Jada #00<?php echo $id?></span>
                                            <span class="date"><?php echo $date?></span>
                                            <i class='bx bxs-pin icon'></i>
                                        </div>
                                        <p><?php echo $text?></p>
                                        <small>By Charmaine Tan</small>
                                    </div>
                                <?php
                            }
                        }

                        else{
                            ?>
                            <span>No High Priority Assigments at the moment!</span>
                            <?php
                        }
                    }
                ?>
                
                <h3>Create New Update</h3>
                <form method="POST" >

                    <div class="singleField">
                        <label for="date">Date</label>
                        <input name="dateAdded" id="date" value="<?php echo $date?>" readonly>
                    </div>

                    <div class="singleField">
                        <label for="Title">Title</label>
                        <input  type="text"  name="title" id="Title">
                    </div>

                    <div class="singleField">
                        <label for="update">Message</label>
                       <textarea name="update" id="update" placeholder="Enter your update message.."></textarea>
                    </div>

                    <div class="singleField">
                        <label for="admin">Updated By</label>
                        <input type="text" name="admin" id="admin" placeholder="Enter Admin Name" required >
                    </div>

                    <button class="btn flex bg" name="submit">
                        <i class='bx bxs-pin icon'></i>
                        Create
                    </button>
                    
                </form>
            </div>
        </div>    

    </div>   

<?php 
include('./adminPartials/adminFooter.php');
?>



<?php 
if(isset($_POST['submit'])){

  $update = $_POST['update'];
  $title = $_POST['title'];  
  $dateAdded = $_POST['dateAdded'];

  
  $sql = "INSERT INTO updates SET
  text = '$update',
  title = '$title',  
  date = '$dateAdded'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['addedUpdate'] = '<span class="success">Update Added Successfuly!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/updates.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>