<?php 
include('./adminPartials/adminHeader.php');
$date = date("Y-m-d");
ob_start();
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuS.php');
        ?>

            <?php
                $sessionUser = $_SESSION['username'];
                $sql = "SELECT * FROM staff where username ='$sessionUser'";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $count =  mysqli_num_rows($res);

                    if($count > 0){
                        while($row = mysqli_fetch_assoc($res)){
                            $staffID = $row['id'];
                        }
                    }

                    else{
                        ?>
                        <span>No Staff</span>
                        <?php
                    }
                }
            ?>

        <div class="updatesBody">
            <div class="top flex">
                <h1 class="titleText">
                Note
                </h1>
               <p>Inform your people about JadaCars!</p>
            </div>

            <div class="newUpdateDiv">
                
                <h3>Create New Note</h3>
                <form method="POST" >

                    <div class="singleField">
                        <label for="date">Date</label>
                        <input   name="dateAdded" id="date" value="<?php echo $date?>"  readonly>
                    </div>

                    <div class="singleField">
                        <label for="Title">Title</label>
                        <input  type="text"  name="title" maxlength="50" id="Title" placeholder="Enter Notes Title">
                    </div>

                    <div class="singleField">
                        <label for="update">Message</label>
                       <textarea name="update" id="update"  minlength="50" maxlength="10000" placeholder="Type your note here.."></textarea>
                    </div>

                    <button class="btn flex bg" name="submit">
                        <i class='bx bxs-pin icon'></i>
                        Add Note
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

  $title = $_POST['title'];
  $note = $_POST['update'];
  $dateAdded = $_POST['dateAdded'];

  
  $sql = "INSERT INTO notes SET
  title = '$title',
  infor = '$note',
  dateAdded = '$dateAdded',
  staffID = '$staffID'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['addedNote'] = '<span class="success">Note Added Successfuly!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/todoS.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>