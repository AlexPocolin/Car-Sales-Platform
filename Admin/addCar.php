<?php 
include('./adminPartials/adminHeader.php');
ob_start();
?>
  <div class="adminDasboard flex">

        <?php 
        include('./adminPartials/sideMenu.php');

        $sql = 'SELECT * FROM cars';
        $res = mysqli_query($conn, $sql);
        if($res == TRUE){
          $count =  mysqli_num_rows($res);

          if($count > 0){
              while($row = mysqli_fetch_assoc($res)){
                  $id = $row['id'];
              }
          }
        }
      ?>

      <div class="addCarBody">
          <div class="top flex">
              <h1 class="titleText">
                  Add Car Details
              </h1>
              <p>Creating an amazing item for the world!</p>
          </div>

          <div class="newCarDiv">
              <h3 class="formTitle">Completely fill the form below!</h3>

              <form method="POST"  class="" enctype="multipart/form-data">
                  <div class="flex formContainer">
                    <div>
                        <div class="singleField">
                            <label for="carName">Car Name</label>
                            <input type="text" name="carName" id="carName" placeholder="e.g: Mercedes Benz" required>
                        </div>

                        <div class="singleField">
                            <label for="carPrice">Car Price</label>
                            <input type="text" name="carPrice" id="carPrice" placeholder="e.g: 20000" required>
                        </div>

                        <div class="singleField">
                            <label for="carLocation">Car Location</label>
                            <input type="text" name="carLocation" id="carLocation" placeholder="Williams Bridge, Bronx" required>
                            
                        </div>

                        <div class="singleField">
                            <label for="carImage">Car Image <small>(Main)</small></label>
                            <input type="file" name="carImage" id="carImage" required>
                        </div>

    
                        <div class="singleField">
                            <label for="priceIncs">Price Inclusives</label>
                            <textarea name="priceIncs" id="priceIncs" placeholder=" Enter what's included on the price" required></textarea>
                        </div>  

                        <div class="singleField">
                            <label for="body">Body</label>
                            <input type="text" name="body" id="body" placeholder="e.g: GX SUV" required>
                        </div>

                        <div class="singleField">
                            <label for="fuel">Fuel</label>
                            <input type="text" name="fuel" id="fuel" placeholder="e.g: Diesel" required>
                        </div>

                    </div>

                    <div>

                        
                        
                        <div class="singleField">
                            <label for="engine">Engine Type</label>
                            <input type="text" name="engine" id="engine" placeholder="e.g: 16V DOHC" required>
                        </div>

                        <div class="singleField">
                            <label for="bodyStyle">Body Style <small>(Description)</small></label>
                            <textarea name="bodyStyle" id="bodyStyle" placeholder="Type Body Style" ></textarea>
                        </div>
                        <div class="singleField">
                            <label for="Performance">Car Performance <small>(Description)</small></label>
                            <textarea name="performance" id="Performance" placeholder="Type Car Performance" ></textarea>
                        </div>

                        <div class="singleField">
                            <label for="safety">Car Safety <small>(Description)</small></label>
                            <textarea name="safety" id="safety" placeholder="Type Car Safety" ></textarea>
                        </div>

                        <div class="singleField">
                            <label for="Technology">Car Technology <small>(Description)</small></label>
                            <textarea name="technology" id="Technology" placeholder="Type Car Technology" ></textarea>
                        </div>
                            
                    </div>

                    <div>
                    
                        <div class="singleField">
                            <label for="builtDate">Release Date</label>
                            <input type="date" name="builtDate" id="builtDate" placeholder="e.g: 2019" required>
                        </div>
    
                        <div class="singleField">
                            <label for="seats">Seats(s)</label>
                            <input type="number" name="seats" id="seats" placeholder=".g: 3" required>
                        </div>

                        <div class="singleField">
                            <label for="year">Model Year</label>
                            <input type="number" name="year" id="year" placeholder=".g: 2012" required>
                        </div>
                        <div class="singleField">
                            <label for="finalDrive">Final Drive</label>
                            <input type="text" name="finalDrive" id="finalDrive" placeholder="e.g: Front Wheel Drive" required>
                        </div>
                        
                        <div class="singleField">
                            <label for="grade">Model Grade</label>
                            <input type="text" name="grade" id="grade" placeholder="e.g: GX Hybrid" required>
                        </div>

                        <div class="singleField">
                        

                            <label for="staffID">Assign Staff</label>
                            <select name="staffID"  id="staffID" required>
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
                            <input type="text" name="spec" id="spec" placeholder="e.g: GCC" required>
                        </div>
                    
                        <div class="singleField">
                            <label for="insurance">Accident Insurance</label>
                            <select name="insurance" id="insurance">
                                <option value="2000">2000</option>
                                <option value="4000">4000</option>  
                                <option value="6000">6000</option>  
                                <option value="80000">80000</option>  
                                <option value="100000">100000</option>  
                            </select>
                        </div>

                        <div class="singleField">
                            <label for="company">Company</label>
                            <select name="company" id="company">
                                <option value="Toyota">Toyota</option>
                                <option value="Tesla">Tesla</option>  
                                <option value="Mercedes">Mercedes</option>  
                                <option value="Wolkswagon">Wolkswagon</option>  
                            </select>
                        </div>

                        
                        <div class="singleField">
                            <label for="note">Note <small>(If any)</small></label>
                            <textarea name="note" id="note" placeholder="Type note" ></textarea>
                        </div>

                        <div class="singleField">
                            <label for="status">Status</label>
                            <select name="status" id="status">
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
                                    <input type="file" name="Interior1" id="carImage" >
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Car Image 1 (Exterior)</label>
                                    <input type="file" name="Exterior1" id="carImage" >
                                </div>
                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Car Image 2 (Interior)</label>
                                    <input type="file" name="Interior2" id="carImage" >
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Car Image 2 (Exterior)</label>
                                    <input type="file" name="Exterior2" id="carImage" >
                                </div>
                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Car Image 3 (Interior)</label>
                                    <input type="file" name="Interior3" id="carImage" >
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Car Image 3 (Exterior)</label>
                                    <input type="file" name="Exterior3" id="carImage" >
                                </div>

                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Car Image 4 (Interior)</label>
                                    <input type="file" name="Interior4" id="carImage" >
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Car Image 4 (Exterior)</label>
                                    <input type="file" name="Exterior4" id="carImage" >
                                </div>

                                <a href="#galleryForm">
                                    <button  class="btn flex bg" style="width: 100%;" name='submit'>
                                        <i class="uil uil-plus icon"></i>
                                        Add Car
                                    </button>
                                </a>
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


  $sql = "INSERT INTO cars SET
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
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['addedCar'] = '<span class="success">Car Added Successfully, add more?</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/cars.php');
      exit(); 
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>


