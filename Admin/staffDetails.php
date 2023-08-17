<?php 
include('./adminPartials/adminHeader.php');
$selectedID = $_GET['id']
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="staffsDetailsBody">
            <div class="top flex">
                <h1 class="titleText">
                 Staff Details
                </h1>
                <p>Hi Isra, this staff looks promising <i class="uil uil-grin icon"></i>?</p>

                <?php 
               $selectedID = $_GET['id'];
                $sql = "SELECT * FROM staff where id = '$selectedID'";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $count =  mysqli_num_rows($res);

                    if($count > 0){
                        while($row = mysqli_fetch_assoc($res)){
                         $staffId = $row['id'];
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
                 
            <div class="headerBtns flex">
                
               <a href="<?php echo SITEURL?>View/Backend/Admin/deleteStaff.php?id=<?php echo $selectedID?>">
                <button  class="flex btn delBtn">
                    <i class="uil uil-trash-alt icon"></i> Delete staff
                </button>
               </a>
                    
                <a href="<?php echo SITEURL?>View/Backend/Admin/updateStaff.php?id=<?php echo $selectedID?>">
                    <button  class="flex btn bg">
                        <i class="uil uil-check-circle icon"></i> Update staff
                    </button>
                </a>
                </div>
                
            </div>

            

            <div class="detailsSection">
                <div class="inforSection flex">
                    <div class="leftDiv">
                        <div class="topLeftDiv flex">
                                <?php 
                                    if($profilepic!=""){   
                                        ?>
                                            <div class="imgDiv">
                                            <img src="<?php echo SITEURL;?>Assets/<?php echo $profilepic;?>" alt="Car Image">
                                            </div>
                                        <?php
                                    }
                                    else{
                                        echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                    }
                                ?>
        
                            <div class="staffBio">
                                <h4 class="name"><?php echo $firstname?> <?php echo $secondname?></h4>
                                
                                <?php

                                    if($status == 'verified'){
                                        ?>
                                        <span class="flex badge">
                                            <i class="uil uil-check-circle icon"></i> 
                                            Verified
                                        </span>
                                        <?php
                                    }
                                    if($status !== 'verified'){
                                        ?>
                                        <span class="flex badge" style="background-color:'red'">
                                        <i class='bx bx-shield-x icon'></i>
                                            Not Verified
                                        </span>
                                        <?php
                                    }
                                    
                                    
                                ?>
    
                                
                                <div class="nationality">
                                    Nantionality: <span><?php echo $nationality?></span>
                                </div>
    
                                <div class="lang">
                                    Languages: <span><?php echo $language?></span>
                                </div>
    
                                <div class="time">
                                    Response Time: <span><?php echo $response?> Minutes</span>
                                </div>
                               
                            </div>
                            <div class="personalInfor">
                                <h4>Personal Information</h4>
                                <div class="properties">
                                    N.O.P: <span>16 Cars</span>
                                </div>
                                <div class="ID">
                                    ID Numnber: <span>#<?php echo $staffId?></span>
                                </div>
                                <div class="exp">
                                    Experience: <span>Since <?php echo $experience?></span>
                                </div>
                            </div>
                        </div>
    
                         <div class="bottomLeftDiv">
                            <h4 class="flex">About staff <span></span></h4>
                            <p>
                               <?php echo $description?>
                            <p>
                         </div>
                    </div>
    
                    <div class="rightDiv">
                        <div class="topRightDiv">
                            <h3>CONTACT THIS STAFF</h3>
                            <span class="phone flex">
                             <i class="uil uil-phone-alt icon"></i> <?php echo $phone?>
                            </span>
                            <span class="email flex">
                             <a href="https://mailto:<?php echo $email ?>" class="flex">
                                 <i class="uil uil-envelope-alt icon"></i> Email Staff
                             </a>
     
                            </span>
    
                            <div class="socials">
                                <a href="<?php echo $facebook ?>"><i class="uil uil-facebook-messenger icon"></i></a>
    
                                <a href="<?php echo $twitter ?>"><i class="uil uil-twitter icon"></i></a>
    
                                <a href="<?php echo $instagram ?>"><i class="uil uil-instagram-alt icon"></i></a>
    
                                <a href="<?php echo $linkedin ?>"><i class="uil uil-linkedin icon"></i></a>
                            </div>
                         </div>

                    </div>
                </div>

                <div class="sectionHeader flex">
                <h4 class="flex">Staff's Cars</h4>
                <p>All staff's listed Cars. </p>

                
                </div>

                <div class="staffProperties flex">

                    <?php 
                        $sql = "SELECT * FROM cars where staffID = '$selectedID'";
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
                                    <div class="singleCar">

                                        <?php 
                                            if($mainimage!=""){   
                                                ?>
                                                <div class="imgDiv">
                                                    <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">

                                                    <a href="<?php echo SITEURL?>View/Backend/Admin/carDetails.php?id=<?php echo $id?>">
                                                        <i class="uil uil-arrow-up-right icon"></i>
                                                    </a>
                                                </div>
                                            
                                                <?php
                                            }
                                            else{
                                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                            }
                                        ?>

                        
                                        <div class="flex priceDiv">
                                            <h3 class="price">$<?php echo $price;?></h3>
                                            <div class="views flex">
                                                <div class="views flex">
                                                    <div class="flex">
                                                        <i class='bx bx-store icon'></i>
                                                        <p><?php echo $status;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4><?php echo $carname;?></h4>
                                        <div class="flex">
                                            <i class="uil uil-map-marker icon locationIcon"></i>
                                            <p><?php echo $location;?></p>
                                        </div>
                                    </div>
                                <?php

                                }
                            }

                            else{
                                ?>
                                <span>No cars assigned to this staff!</span>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>    
    </div>    

<?php 
include('./adminPartials/adminFooter.php');
?>