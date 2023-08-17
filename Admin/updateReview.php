<?php 
include('./adminPartials/adminHeader.php');
$date = date("Y-m-d");
ob_start();
$selectedID = $_GET['id']
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="updatesBody">
            <div class="top flex">
                <h1 class="titleText">
                Review Status
                </h1>
               <p>Inform your people about JadaCars!</p>
            </div>

                    <?php 
                        $sql = "SELECT * FROM reviews where id = $selectedID";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $status	 = $row['status'];

                                }
                            }
                        }
                    ?>

            <div class="newUpdateDiv">
                
                <h3>Update Review</h3>
                <form method="POST" >

                    <div class="singleField">
                        <label for="reviewStatus">Review Status</label>
                       <select name="reviewStatus" id="reviewStatus">
                        <option value="Published">Published</option>
                        <option value="Pending">Pending</option>
                      </select>
                    </div>

                    <button class="btn flex bg" name="submit">
                        <i class='bx bxs-pin icon'></i>
                        Update Review
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

  $reviewStatus = $_POST['reviewStatus'];

  
  $sql = "UPDATE reviews SET
  status = '$reviewStatus'
  where id = $selectedID
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['reviewUpdated'] = '<span class="success">Review updated Successfuly!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/reviews.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>