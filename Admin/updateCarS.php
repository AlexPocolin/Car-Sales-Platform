<?php 
include('./adminPartials/adminHeader.php');
ob_start();
?>
  <div class="adminDasboard flex">

        <?php 
        include('./adminPartials/sideMenuS.php');
        ?>

      <div class="addCarBody">
          <div class="top flex">
              <h1 class="titleText">
                  Update Car Details
              </h1>
              <p>Creating an amazing item for the world!</p>
          </div>

          <div class="newCarDiv">
              <h3 class="formTitle">Completely fill the form below!</h3>

                <?php     
                    $updateCarID = $_GET['id'];
                    $sql = "SELECT * FROM cars where id= '$updateCarID'";
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                        $count =  mysqli_num_rows($res);

                        if($count > 0){
                            while($row = mysqli_fetch_assoc($res)){
                            $id = $row['id'];
                            $carname = $row['carname'];
                            $price = $row['price'];
                            $location = $row['location'];
                            $priceinclusives = $row['priceinclusives'];
                            $body = $row['body'];
                            $fuel = $row['fuel'];
                            $engine = $row['engine'];
                            $bodystyle = $row['bodystyle'];
                            $performance = $row['performance'];
                            $safety = $row['safety'];
                            $technology = $row['technology'];
                            $releasedate = $row['releasedate'];
                            $seats = $row['seats'];
                            $modelyear = $row['modelyear'];
                            $finaldrive = $row['finaldrive'];
                            $modelgrade = $row['modelgrade'];
                            $specregion = $row['specregion'];
                            $insurance = $row['insurance'];
                            $note = $row['note'];
                            $mainimage = $row['mainimage'];
                            $status = $row['status'];
                            $staffID = $row['staffID'];
                            $Interior1 = $row['Interior1'];
                            $Interior2 = $row['Interior2'];
                            $Interior3 = $row['Interior3'];
                            $Interior4 = $row['Interior4'];
                            $Exterior1 = $row['Exterior1'];
                            $Exterior2 = $row['Exterior2'];
                            $Exterior3 = $row['Exterior3'];
                            $Exterior4 = $row['Exterior4'];

                            }
                        }
                    }
                ?>

              <form method="POST"  class="" enctype="multipart/form-data">
                  <div class="flex formContainer">
                    <div>
                        <div class="singleField">
                            <label for="carName">Car Name</label>
                            <input type="text" name="carName" id="carName" value="<?php echo $carname ?>" readonly>
                        </div>

                        <div class="singleField">
                            <label for="carPrice">Car Price</label>
                            <input type="text" name="carPrice" id="carPrice" value="<?php echo $price ?>" readonly>
                        </div>

                        <div class="singleField">
                            <label for="carLocation">Car Location</label>
                            <input type="text" name="carLocation" id="carLocation" value="<?php echo $location ?>">
                            
                        </div>

                        <div class="singleField">
                            <label for="carImage">Car Image <small>(Main)</small></label>
                            <input type="file" name="carImage" id="carImage" value="<?php echo $mainimage ?>">
                        </div>

    
                        <div class="singleField">
                            <label for="priceIncs">Price Inclusives</label>
                            <textarea name="priceIncs" id="priceIncs" placeholder=" Enter what's included on the price" ><?php echo $priceinclusives ?></textarea>
                        </div>  

                        <div class="singleField">
                            <label for="body">Body</label>
                            <input type="text" name="body" id="body" value="<?php echo $body ?>">
                        </div>

                        <div class="singleField">
                            <label for="fuel">Fuel</label>
                            <input type="text" name="fuel" id="fuel" value="<?php echo $fuel ?>">
                        </div>

                    </div>

                    <div>

                        
                        
                        <div class="singleField">
                            <label for="engine">Engine Type</label>
                            <input type="text" name="engine" id="engine"value="<?php echo $engine ?>">
                        </div>

                        <div class="singleField">
                            <label for="bodyStyle">Body Style <small>(Description)</small></label>
                            <textarea name="bodyStyle" id="bodyStyle"><?php echo $bodyStyle ?></textarea>
                        </div>
                        <div class="singleField">
                            <label for="Performance">Car Performance <small>(Description)</small></label>
                            <textarea name="performance" id="Performance"  ><?php echo $performance ?></textarea>
                        </div>

                        <div class="singleField">
                            <label for="safety">Car Safety <small>(Description)</small></label>
                            <textarea name="safety" id="safety" ><?php echo $safety ?></textarea>
                        </div>

                        <div class="singleField">
                            <label for="Technology">Car Technology <small>(Description)</small></label>
                            <textarea name="technology" id="Technology"  ><?php echo $technology ?></textarea>
                        </div>
                            
                    </div>

                    <div>
                    
                        <div class="singleField">
                            <label for="builtDate">Release Date</label>
                            <input type="date" name="builtDate" id="builtDate" value="<?php echo $builtDate ?>">
                        </div>
    
                        <div class="singleField">
                            <label for="seats">Seats(s)</label>
                            <input type="number" name="seats" id="seats" value="<?php echo $seats ?>">
                        </div>

                        <div class="singleField">
                            <label for="year">Model Year</label>
                            <input type="number" name="year" id="year" value="<?php echo $year ?>">
                        </div>
                        <div class="singleField">
                            <label for="finalDrive">Final Drive</label>
                            <input type="text" name="finalDrive" id="finalDrive" value="<?php echo $finalDrive ?>">
                        </div>
                        
                        <div class="singleField">
                            <label for="grade">Model Grade</label>
                            <input type="text" name="grade" id="grade" value="<?php echo $grade ?>">
                        </div>

                        <div class="singleField">
                        

                            <label for="staffID">Assign Staff</label>
                            <select name="staffID"  id="staffID" value="<?php echo $staffID ?>">
                                <?php 
                                    $sql = "SELECT * FROM staff where status ='verified'";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE){
                                        $count =  mysqli_num_rows($res);

                                        if($count > 0){
                                            while($row = mysqli_fetch_assoc($res)){
                                            $id = $row['id'];
                                            $firstname = $row['firstname'];

                                            ?>
                                            <option value="<?php echo $id ?>"><?php echo $id ?> <?php echo $firstname ?></option>
                                            <?php

                                            }
                                        }
                                    }
                                ?>
                                
                            </select>
                        </div>
    

                    </div>

                    <div>

                        <div class="singleField">
                            <label for="spec">Spec Region</label>
                            <input type="text" name="spec" id="spec" value="<?php echo $specregion ?>">
                        </div>
                    
                        <div class="singleField">
                            <label for="insurance">Accident Insurance</label>
                            <select name="insurance" id="insurance" value="<?php echo $insurance ?>" readonly>
                                <option value="2000">2000</option>
                                <option value="4000">4000</option>  
                                <option value="6000">6000</option>  
                                <option value="80000">80000</option>  
                                <option value="100000">100000</option>  
                            </select>
                        </div>

                        <div class="singleField">
                            <label for="company">Company</label>
                            <select name="company" id="company" value="<?php echo $company ?>">
                                <option value="Toyota">Toyota</option>
                                <option value="Tesla">Tesla</option>  
                                <option value="Mercedes">Mercedes</option>  
                                <option value="Wolkswagon">Wolkswagon</option>  
                            </select>
                        </div>

                        
                        <div class="singleField">
                            <label for="note">Note <small>(If any)</small></label>
                            <textarea name="note" id="note" ><?php echo $note ?></textarea>
                        </div>

                        <div class="singleField">
                            <label for="status">Status</label>
                            <select name="status" id="status" value="<?php echo $status ?>">
                                <option value="On Market" selected>On Market</option>
                                <option value="sold">Sold</option>  

                            </select>
                        </div>

                       
                    </div>
                  </div>

                        <h3 class="formTitle">Car Gallery Images</h3>
                        <div method="POST" class="flex formContainer" enctype="multipart/form-data" id="galleryForm">
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Car Image 1 (Interior)</label>
                                    <input type="file" name="Interior1" id="carImage" value="<?php echo $Interior1 ?>">
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Car Image 1 (Exterior)</label>
                                    <input type="file" name="Exterior1" id="carImage"  value="<?php echo $Exterior1 ?>">
                                </div>
                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Car Image 2 (Interior)</label>
                                    <input type="file" name="Interior2" id="carImage" value="<?php echo $Interior2 ?>">
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Car Image 2 (Exterior)</label>
                                    <input type="file" name="Exterior2" id="carImage" value="<?php echo $Exterior2 ?>">
                                </div>
                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Car Image 3 (Interior)</label>
                                    <input type="file" name="Interior3" id="carImage" value="<?php echo $Interior3 ?>">
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Car Image 3 (Exterior)</label>
                                    <input type="file" name="Exterior3" id="carImage" value="<?php echo $Exterior3 ?>">
                                </div>

                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Car Image 4 (Interior)</label>
                                    <input type="file" name="Interior4" id="carImage" value="<?php echo $Interior4 ?>">
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Car Image 4 (Exterior)</label>
                                    <input type="file" name="Exterior4" id="carImage" value="<?php echo $Exterior4 ?>">
                                </div>

                                
                                <button  class="btn flex bg" style="width: 100%;" name='submit'>
                                    <i class="uil uil-plus icon"></i>
                                    Update Car
                                </button>
                               
                            </div>
                        </div>
              </form>


              
          </div>
      </div>

  </div>   

<?php 
include('./adminPartials/adminFooter.php');
?>  

<?php 

if(isset($_POST['submit'])){

  $carName = $_POST['carName'];
  $carPrice = $_POST['carPrice'];
  $carLocation = $_POST['carLocation'];
  $priceIncs = $_POST['priceIncs'];
  $body = $_POST['body'];
  $fuel = $_POST['fuel'];
  $engine = $_POST['engine'];
  $bodyStyle = $_POST['bodyStyle'];
  $performance = $_POST['performance'];
  $safety = $_POST['safety'];
  $technology = $_POST['technology'];
  $builtDate = $_POST['builtDate'];
  $seats = $_POST['seats'];
  $year = $_POST['year'];
  $finalDrive = $_POST['finalDrive'];
  $grade = $_POST['grade'];
  $spec = $_POST['spec'];
  $insurance = $_POST['insurance'];
  $note = $_POST['note'];
  $staffID = $_POST['staffID'];
  $status = $_POST['status'];
  $company = $_POST['company'];

    // Uploading Image 1 to the database =======================>
     
   if(isset($_FILES['carImage']['name'])){
    //To upload the image we need the image name, source and destination.
    $image = $_FILES['carImage']['name'];
    // Source ================>
    $imageSource = $_FILES['carImage']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$image; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $image ="";
    }

       // Uploading Interior1 to the database =======================>
     
   if(isset($_FILES['Interior1']['name'])){
    //To upload the image we need the image name, source and destination.
    $InteriorImage1 = $_FILES['Interior1']['name'];
    // Source ================>
    $imageSource = $_FILES['Interior1']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$InteriorImage1; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $InteriorImage1 ="";
    }


 // Uploading Interior2 to the database =======================>
     
   if(isset($_FILES['Interior2']['name'])){
    //To upload the image we need the image name, source and destination.
    $InteriorImage2 = $_FILES['Interior2']['name'];
    // Source ================>
    $imageSource = $_FILES['Interior2']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$InteriorImage2; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $InteriorImage2 ="";
    }



    // Uploading Interior3 to the database =======================>
     
   if(isset($_FILES['Interior3']['name'])){
    //To upload the image we need the image name, source and destination.
    $InteriorImage3 = $_FILES['Interior3']['name'];
    // Source ================>
    $imageSource = $_FILES['Interior3']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$InteriorImage3; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $InteriorImage3 ="";
    }



    // Uploading Interior4 to the database =======================>
     
   if(isset($_FILES['Interior4']['name'])){
    //To upload the image we need the image name, source and destination.
    $InteriorImage4 = $_FILES['Interior4']['name'];
    // Source ================>
    $imageSource = $_FILES['Interior4']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$InteriorImage4; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $InteriorImage4 ="";
    }



    // Uploading Exterior1 to the database =======================>
     
   if(isset($_FILES['Exterior1']['name'])){
    //To upload the image we need the image name, source and destination.
    $ExteriorImage1 = $_FILES['Exterior1']['name'];
    // Source ================>
    $imageSource = $_FILES['Exterior1']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$ExteriorImage1; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $ExteriorImage1 ="";
    }



    // Uploading Exterior2 to the database =======================>
     
   if(isset($_FILES['Exterior2']['name'])){
    //To upload the image we need the image name, source and destination.
    $ExteriorImage2 = $_FILES['Exterior2']['name'];
    // Source ================>
    $imageSource = $_FILES['Exterior2']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$ExteriorImage2; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $ExteriorImage2 ="";
    }



    // Uploading Exterior3 to the database =======================>
     
   if(isset($_FILES['Exterior3']['name'])){
    //To upload the image we need the image name, source and destination.
    $ExteriorImage3 = $_FILES['Exterior3']['name'];
    // Source ================>
    $imageSource = $_FILES['Exterior3']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$ExteriorImage3; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $ExteriorImage3 ="";
    }

    // Uploading Exterior4 to the database =======================>
     
   if(isset($_FILES['Exterior4']['name'])){
    //To upload the image we need the image name, source and destination.
    $ExteriorImage4 = $_FILES['Exterior4']['name'];
    // Source ================>
    $imageSource = $_FILES['Exterior4']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$ExteriorImage4; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $ExteriorImage4 ="";
    }


  $sql = "UPDATE cars SET
  carname = '$carName',
  price = '$carPrice',
  location = '$carLocation',
  mainimage = '$image',
  priceinclusives = '$priceIncs',
  body = '$body',
  fuel = '$fuel',
  engine = '$engine',
  bodystyle = '$bodyStyle',
  performance = '$performance',
  safety = '$safety',
  technology = '$technology',
  releasedate = '$builtDate',
  seats = '$seats',
  modelyear = '$year',
  finaldrive = '$finalDrive',
  modelgrade = '$grade',
  specregion = '$spec',
  insurance = '$insurance',
  note = '$note',
  company = '$company',
  staffID = '$staffID',
  status = '$status',
  Interior1 = '$InteriorImage1',
  Interior2 = '$InteriorImage2',
  Interior3 = '$InteriorImage3',
  Interior4 = '$InteriorImage4',
  Exterior1	 = '$ExteriorImage1',
  Exterior2 = '$ExteriorImage2',
  Exterior3 = '$ExteriorImage3',
  Exterior4 = '$ExteriorImage4'
  where id = $updateCarID
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['updateCar'] = '<span class="success">Car Updated Successfully</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/cars.php');
      exit(); 
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>

