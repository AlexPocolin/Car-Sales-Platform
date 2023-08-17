<?php 
include('./adminPartials/adminHeader.php');
?>
    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuClient.php');
        ?>

        <div class="clientAllCarsBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                   All Cars
                </h1>
                <p>Welcome to a more personalised car show-room!</p>
            </div>


            <div class="detailsSection">
                <div class="allCars flex">

                <?php 
                        $sql = 'SELECT * FROM cars';
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
                                             <a href="<?php echo SITEURL?>View/Backend/Admin/carDetailsClient.php?id=<?php echo $id?>">
                                                   <i class="uil uil-arrow-up-right icon"></i>
                                                </a>
                                             </div>
                                        
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
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
                        }
                    ?>

                </div> 
          
            </div>
        </div>    
    </div> 
 
<?php 
include('./adminPartials/adminFooter.php');
?>