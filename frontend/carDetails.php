<?php
include('./clientPartials/header.php');
ob_start();
?>

    <!-- header Starts -->
    <?php
      include('./clientPartials/navbar.php')
    ?>
    <!-- header Ends -->

    <!-- Car Details Starts -->
    <div class="carDetails section">

        <?php 
            $selectedCasrID = $_GET['id'];
            $sql = "SELECT * FROM cars where id = '$selectedCasrID'";
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
       <div class="secContainer">
          <div class="mainSection">

                <?php 
                    if($mainimage!=""){   
                        ?>
                         <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Main Page Image">
                        <?php
                    }
                    else{
                        echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                    }
                ?>
             

              <div class="secText">
                <h3 class="carName">
                  <?php echo $carname;?>
                  </h3>
                  <p>
                    <?php echo $finaldrive;?>
                  </p>

                  <span class="price">$<?php echo $price;?></span>
              </div>
                
                <div class="carMenu flex">
                    <a href="#overview">
                        Overview
                    </a>
                    <a href="#features">
                        Features
                    </a>
                    <a href="#alternatives">
                        Alternatives
                    </a>
                    <a href="#gallery">
                        Gallery
                    </a>
                </div>

          </div>

           <!-- overviewSection Section Starts -->
          <div class="overviewSection" id="overview">
            <div class="secContainer container">
                <div class="secTitleDiv">
                    <h2 class="secTitle">Car Overview</h2>
                    <P>
                        Welcome to the most trusted car discovery show-room in USA
                    </P>
                </div>
                 <div class="content grid">
                   <span class="span"> Body: <span class="ans"><?php echo $price;?></span></span>
                   <span class="span"> Model Year: <span class="ans"><?php echo $modelyear;?></span></span>
                   <span class="span"> Final Drive: <span class="ans"><?php echo $finaldrive;?></span></span>
                   <span class="span"> Model Grade: <span class="ans"><?php echo $modelgrade;?></span></span>
                   <span class="span"> Spec Region: <span class="ans"><?php echo $specregion;?></span></span>
                   <span class="span"> Fuel Type: <span class="ans"><?php echo $fuel;?></span></span>
                   <span class="span"> Engine Type: <span class="ans"><?php echo $engine;?></span></span>
                  


                 </div>
            </div>
          </div>
          <!-- overviewSection Section Ends -->


          <!-- featuresSection Section Starts -->
          <div class="featuresSection section" id="features">
            <div class="secContainer container">
                <div class="secTitleDiv">
                    <h2 class="secTitle">Car Features</h2>
                    <P>
                        Welcome to the most trusted car discovery show-room in USA
                    </P>
                </div>
                 <div class="content grid">
                    <div class="singleCard">
                        <span class="title">
                            Body Style
                        </span>
                        <?php echo $bodystyle;?>
                    </div>

                    <div class="singleCard">
                        <span class="title">
                            Performace
                        </span>
                        <?php echo $performance;?>

                    </div>

                    <div class="singleCard">
                        <span class="title">
                            Safety
                        </span>
                        <?php echo $safety;?>

                    </div>
                    <div class="singleCard">
                        <span class="title">
                            Technology
                        </span>
                        <?php echo $technology;?>

                    </div>
                 </div>
            </div>
          </div>
           <!-- featuresSection Section Ends -->

          <!-- Gallery Section Starts -->
          <div class="gallerSection section" id="gallery">
            <div class="secConatiner container">
                <div class="secTitleDiv">
                    <h2 class="secTitle">Car Gallery</h2>
                    <P>
                        Welcome to the most trusted car discovery show-room in USA
                    </P>
                </div>

                <div class="content grid">
                  <div class="exteriorDiv grid">
                        <span class="title">
                            Exterior Details
                        </span>
                       <div class="carImages grid">
                       <?php 
                            if($Interior1!=""){   
                                ?>
                                <div class="singleImage">
                                 <img  src="<?php echo SITEURL;?>Assets/<?php echo $Interior1;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>

                       
                       <?php 
                            if($Interior2!=""){   
                                ?>
                                <div class="singleImage">
                                 <img  src="<?php echo SITEURL;?>Assets/<?php echo $Interior2;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                       <?php 
                            if($Interior3!=""){   
                                ?>
                                <div class="singleImage">
                                 <img  src="<?php echo SITEURL;?>Assets/<?php echo $Interior3;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                        <?php 
                            if($Interior4!=""){   
                                ?>
                                <div class="singleImage">
                                 <img  src="<?php echo SITEURL;?>Assets/<?php echo $Interior4;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                  </div>

                  <div class="interior grid">
                        <span class="title">
                            Interior Details
                        </span>
                        
                       <div class="carImages grid">
                       <?php 
                            if($Exterior1!=""){   
                                ?>
                                <div class="singleImage">
                                 <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $Exterior1;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                       <?php 
                            if($Exterior2!=""){   
                                ?>
                                <div class="singleImage">
                                 <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $Exterior2;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                       <?php 
                            if($Exterior3!=""){   
                                ?>
                                <div class="singleImage">
                                 <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $Exterior3;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                       <?php 
                            if($Exterior4!=""){   
                                ?>
                                <div class="singleImage">
                                 <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $Exterior4;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>

                       </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Gallery Section Ends -->

       </div>
    </div>
    <!-- Car Details Ends -->

    <!-- Alternatives Page Starts -->
    <div class="alternatives section container" id="alternatives">
        <div class="secContainer">
            <div class="secTitleDiv">
                <h2 class="secTitle">Others Car Options</h2>
                <P>
                    Welcome to the most trusted car discovery portal in India and is visited by millions of verified car buyers every month.
                </P>
            </div>

              <div class="carsContainer">
                <div class="singleCompany grid">
                        <?php 
                            $sql = "SELECT * FROM cars";
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

                                    ?>
                                    <!-- Single car card -->
                                    <div class="singleCar">
                                        <?php 
                                            if($mainimage!=""){   
                                                ?>
                                                <div class="imgDiv">
                                                <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                                </div>
                                                <?php
                                            }
                                            else{
                                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                                            }
                                        ?>
                                        
                                        <h5 class="carTitle">
                                        <?php echo $carname;?>
                                        </h5>

                                        <div class="properties grid">
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-group icon'></i>
                                                <span class="text">
                                                <?php echo $seats;?> Persons
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class="uis uis-anchor icon"></i>
                                                <span class="text">
                                                    Autopilot
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-calendar-event icon' ></i>
                                                <span class="text">
                                                <?php echo $modelyear;?>
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-gas-pump icon' ></i>
                                                <span class="text">
                                                <?php echo $fuel;?>
                                                </span>
                                            </div>
                                        </div>

                            
                                        <div class="price_seller flex">
                                        <span class="price">
                                            $<?php echo $price;?>
                                        </span>
                                        <a href="<?php echo SITEURL?>View/Frontend/carDetails.php?id=<?php echo $id?>">
                                            <span class="btn primaryBtn">
                                            Details
                                            </span>
                                        </a>
                                        </div>
                                    </div>
                                    <?php

                                    }
                                }

                                else{

                                    ?>
                                    <span>No Cars to show!</span>
                                    <?php
                                
                                }
                            }
                        ?>

                </div>
              </div>
        </div>
     </div>
    <!-- Alternatives Page Ends -->

    <!-- Cars Review Section Starts -->
    <div class="reviewSection section">
       <div class="secContainer container">
        <div class="secTitleDiv">
            <h2 class="secTitle">Leave a review</h2>
            <P>
                Let us know what you think about this car.
            </P>
        </div>

        <div class="formSection">

            <form method="POST" class="reviewForm grid" enctype="multipart/form-data">
                <div class="singleField">
                    <label for="reviewerName">Name</label>
                    <input type="text" id="reviewerName" name="reviewerName" placeholder="Enter Your  Name"  required>
                </div>

                <div class="singleField">
                    <label for="nationality">Nationality</label>
                    <input type="nationality" id="nationality" name="nationality" placeholder="Enter Your nationality"  required>
                </div>

                <div class="singleField">
                    <label for="reviewText">Review Text</label>
                    <textarea id="reviewText" name="reviewText" placeholder="Enter your review" ></textarea>
                </div>

                <div class="singleField">
                    <label for="picture">Picture <small>(Optional)</small> </label>
                    <input type="file" name="picture" id="picture" >
                    <input type="hidden" name="status" value="pending">
                    <input type="hidden" name="reviewedCarID" value="<?php echo $id;?>">
                </div>


                <button class="bg btn flex primaryBtn" name="submit">Submit 
                    <i class='bx bx-right-arrow-alt icon'></i>
                </button>
            
            </form>

        </div>
       </div>
    </div>
    <!-- Cars Review Section Ends -->

     <!-- Buy Button -->
     <a href="<?php echo SITEURL?>View/Frontend/staffDetailsFront.php?id=<?php echo $staffID;?>" class="actionBtn flex">Talk to staff <i class='bx bxs-user-voice icon' ></i></a>
    <!-- Buy Button -->

<?php
include('./clientPartials/footer.php')
?>

<?php 
if(isset($_POST['submit'])){
  
  $reviewerName = $_POST['reviewerName'];
  $nationality = $_POST['nationality'];
  $reviewText = $_POST['reviewText'];
  $status = $_POST['status'];

   //  Uploading Cover Picture to the database =======================>

   if(isset($_FILES['picture']['name'])){
    //To upload the image we need the image name, source and destination.
    $reviewerPicture = $_FILES['picture']['name'];
    // Source ================>
    $imageSource = $_FILES['picture']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$reviewerPicture; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
   
    }
  }else{
    
    $reviewerPicture ="";
    }


  
  $sql = "INSERT INTO reviews SET
  carID = '$selectedCasrID',
  reviewerName = '$reviewerName',
  nationality = '$nationality',
  review = '$reviewText', 
  reviewerImage = '$reviewerPicture',
  status = '$status'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['addedReview'] = '<span class="success">Review Added Successfuly!</span>';
      header('location:'.SITEURL. 'View/Frontend/carDetails.php?id='.$selectedCasrID. '');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>