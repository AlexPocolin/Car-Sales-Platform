<?php 
include('./adminPartials/adminHeader.php');
ob_start();
$selectedCarID = $_GET['id'];
?>

    <div class="adminDasboard flex">

        <?php 
        include('./adminPartials/sideMenuS.php');
       
        ?>

        <div class="propertyDetailsBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                    Single Car Details
                </h1>

            </div>

                <?php     
                    $clientID = $_SESSION['username'];
                    $sql = "SELECT * FROM clients where username= '$clientID'";
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                        $count =  mysqli_num_rows($res);

                        if($count > 0){
                            while($row = mysqli_fetch_assoc($res)){
                            $clientId = $row['id'];
                            $clientFirstname = $row['firstname'];
                            }
                        }
                    }
                ?>

                <?php     
                    $sql = "SELECT * FROM cars where id= '$selectedCarID'";
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

            <div class="detailsContainer">
                <div class="rightDiv">
                    <div class="divTopSection flex">
                    <div class="imgsDiv flex">
                        <div class="smallImgs grid">
                            <?php 
                                if($Interior1!=""){   
                                    ?>
                                    <div class="smallImg">
                                     <img src="<?php echo SITEURL;?>Assets/<?php echo $Interior1;?>" alt="Car Image">
                                    </div>
                                   
                                
                                    <?php
                                }
                                else{
                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                }
                            ?>
                            <?php 
                                if($Interior2!=""){   
                                    ?>
                                    <div class="smallImg">
                                     <img src="<?php echo SITEURL;?>Assets/<?php echo $Interior2;?>" alt="Car Image">
                                    </div>
                                   
                                
                                    <?php
                                }
                                else{
                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                }
                            ?>
                            <?php 
                                if($Interior3!=""){   
                                    ?>
                                    <div class="smallImg">
                                     <img src="<?php echo SITEURL;?>Assets/<?php echo $Interior3;?>" alt="Car Image">
                                    </div>
                                   
                                
                                    <?php
                                }
                                else{
                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                }
                            ?>
                        </div>

                        <div class="mainImgSwiper">

                        
                        <?php 
                            if($mainimage!=""){   
                                ?>
                                <div class="bigImg">
                                <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
    
                                    <span class="flex"><i class='bx bxs-star icon'></i>Perfect Fit</span>
                                </div>
                            
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                            }
                        ?>
                        </div>
                    </div>

                    <div class="staffDetails">

                    
                        <h3 class="cardTitle">Staff Bio</h3>
                        <?php 
                        
                        $sql = "SELECT * FROM staff where id ='$staffID'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $secondname = $row['secondname'];
                                $username	 = $row['username'];
                                $nationality = $row['nationality'];
                                $phone = $row['phone'];
                                $gender = $row['gender'];
                                $language = $row['language'];
                                $dob = $row['dob'];
                                $description = $row['description'];
                                $email = $row['email'];
                                $experience  = $row['experience'];
                                $profilepic = $row['profilepic'];
                                $coverpic = $row['coverpic'];
                                $facebook = $row['facebook'];
                                $twitter = $row['twitter'];
                                $instagram = $row['instagram'];
                                $linkedin = $row['linkedin'];
                                $role = $row['role'];
                                $response = $row['response'];
                                $status = $row['status'];

                                }
                            }
                        }
                    ?>


                        <?php 
                            if($profilepic!=""){   
                                ?>
                                <div class="imgDiv">
                                <img src="<?php echo SITEURL;?>Assets/<?php echo $profilepic;?>" alt="Car Image">
                                </div>
                            
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                            }
                        ?>
                        <h3 class="name"><?php echo $firstname;?> <?php echo $secondname;?></h3>
                        <span class="nationality flex">
                            <i class="uil uil-globe icon"></i><?php echo $nationality;?>
                        </span>
                      
                        <span class="phone flex">
                            <i class="uil uil-phone icon"></i></i><?php echo $phone;?>
                        </span>

                        <span class="history">
                            <!-- <small></small> -->
                        </span>

                        <a href="https://mailto:<?php echo $email;?>" target="_blank">
                            <span class="email flex bg">
                                <i class="uil uil-envelope-alt icon"></i><?php echo $email;?>
                            </span>
                        </a>
                    </div>
                    </div>

                    <div class="divBottomSection flex">
                           <div class="divBottomleftSection">
                            
                            <div class="divTop flex">
                                <h1 class="price">$<?php echo $price;?></h1>
                                <div class="aprtName">
                                    <h2><?php echo $carname;?></h2>
                                    <span class="flex"> <i class='bx bxs-location-plus icon'></i><?php echo $location;?> </span>
                                </div>
    
                                <div class="icons flex">
                                    <i class="uil uil-share icon"></i>
                                    <i class="uil uil-heart-alt icon"></i>
                                    <i class='bx bx-dots-horizontal-rounded icon' ></i>
                                </div>
    
                            </div>

                            <div class="divBottom">
                                <div class="bottomRight flex">
                                    <div class="smallMenu grid">
                                        <i class="uil uil-info-circle icon active"></i>
                                        <i class="uil uil-wallet icon"></i>
                                        <i class="uil uil-bill icon"></i>
                                    </div>
        
                                    <div class="mainContent">
                                       <div class="summary flex">
                                        <span>
                                            <p>Model Year</p>
                                            <h4 class="flex"> <i class="uil uil-calendar-alt icon"></i><?php echo $modelyear;?></h4>
                                        </span>

                                        <span>
                                            <p>Seat</p>
                                            <h4 class="flex"><i class="uil uil-bed-double icon"></i><?php echo $seats;?></h4>
                                        </span>
        
                                        <span>
                                            <p>Autopilot</p>
                                            <h4 class="flex"> <i class="uis uis-anchor icon"></i>Yes</h4>
                                        </span>
                                         

                                        <span>
                                            <p>Fuel</p>
                                            <h4 class="flex"><i class='bx bxs-gas-pump icon' ></i><?php echo $fuel;?></h4>
                                        </span>

                                       </div>

                                       <div class="content grid">
                                        
                                        <div class="overview">
                                            <h3>Overview</h3>
                                            <div class="overviewContent grid">
                                                <span class="span"> Body: <span class="ans"><?php echo $body;?></span></span>
                                                <span class="span"> Model Year: <span class="ans"><?php echo $modelyear;?></span></span>
                                                <span class="span"> Final Drive: <span class="ans"><?php echo $finaldrive;?></span></span>
                                                <span class="span"> Model Grade: <span class="ans"><?php echo $modelgrade;?></span></span>
                                                <span class="span"> Spec Region: <span class="ans"><?php echo $specregion;?></span></span>
                                                <span class="span"> Fuel Type: <span class="ans"><?php echo $fuel;?></span></span>
                                                <span class="span"> Engine Type: <span class="ans"><?php echo $engine;?></span></span>
                                            </div>
                                        </div>

                                        <div class="features">
                                            <h3>Features</h3>
                                            <div class="featuresContent grid">
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

                                        <div class="note">
                                            <h3>Note</h3>
                                        <p>
                                        <?php echo $note;?>  
                                        </p>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                               
                            </div>
                           </div>

                           <div class="reviews divBottomRightSection">
                            <h3 class="reviewTitle">Car Reviews</h3>
                            <div class="reviewsContainer grid">

                                <?php     
                                    $selectedCarID = $_GET['id'];
                                    $sql = "SELECT * FROM reviews where carID= $selectedCarID";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE){
                                        $count =  mysqli_num_rows($res);

                                        if($count > 0){
                                            while($row = mysqli_fetch_assoc($res)){
                                            $id = $row['id'];
                                            $reviewerName = $row['reviewerName'];
                                            $review = $row['review'];
      
                                            ?>
                                            <div class="singleReview">
                                                <span class="reviewerName">
                                                <?php echo $reviewerName;?>   
                                                </span>
                                                <p class="text">
                                                <?php echo $review;?>  
                                                </p>
                                                </div>
                                            <?php

                                            }
                                            
                                        }

                                        else{
                                            ?>
                                            <span>No reviews at the moment!</span>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>


    <!-- link js file-->
    <script src="../index.js"></script>
    <!-- link swiper js -->
    <script src="../swiper-bundle.min.js"></script>
    
<?php 
include('./adminPartials/adminFooter.php');
?>
