<?php 
include('./adminPartials/adminHeader.php');
$date = date("Y-m-d");
ob_start();
$selectedID = $_GET['id']
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuS.php');
        ?>

        <div class="updatesBody">
            <div class="top flex">
                <h1 class="titleText">
                Update Note
                </h1>
               <p>Inform your people about JadaCars!</p>
            </div>

            <div class="newUpdateDiv">
                
                <h3>Updat this Note</h3>
                <form method="POST" >
                <?php 
                        $sql = "SELECT * FROM notes where id = '$selectedID'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    $infor = $row['infor'];
                                    $date = $row['dateAdded'];
                                }
                            }

                        }
                    ?>

                    <div class="singleField">
                        <label for="date">Date</label>
                        <input   name="dateAdded" id="date" value="<?php echo $date?>" readonly>
                    </div>

                    <div class="singleField">
                        <label for="Title">Title</label>
                        <input  type="text"  name="title" maxlength="50" id="Title" placeholder="Enter Notes Title" value="<?php echo $title?>">
                    </div>

                    <div class="singleField">
                        <label for="update">Message</label>
                       <textarea name="update" id="update"  minlength="50" maxlength="10000" placeholder="Type your note here.."><?php echo $infor?></textarea>
                    </div>

                    <button class="btn flex bg" name="submit">
                        <i class='bx bxs-pin icon'></i>
                        Update Note
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

  
  $sql = "UPDATE notes SET
  title = '$title',
  infor = '$note',
  dateAdded = '$dateAdded'
  where id = $selectedID
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['updateNote'] = '<span class="success">Note updated Successfuly!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/todoS.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>