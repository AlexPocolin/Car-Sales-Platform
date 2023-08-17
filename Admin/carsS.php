<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminDasboard flex">

        <?php 
            include('./adminPartials/sideMenuS.php');
        ?>

        <div class="propertiesBody">
            <div class="top flex">
                <h1 class="titleText">
                    Cars List
                </h1>
                <p>Hi, welcome to JadaCars!</p>
            </div>
 

            <div class="allProperties">
                <table>
                    <tr>
                    <th>Car</th>
                    <th>Model Year</th>
                    <th>Model Grade</th>
                    <th>Fuel Type</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>

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
                                <tr>
                                    <td class="td flex">

                                    <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <div class="imgDiv">
                                            <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                            </div>
                                        
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                        }
                                    ?>
                                    
                                        <div class="carInfo">
                                            <span class="name"><?php echo $carname?></span>
                                            <p><?php echo $modelgrade?></p>
                                            <i class="uil uil-moneybag-alt"></i> 
                                            <small>$<?php echo $price?></small>
                                        </div>
                                    </td>

                                    <td class="modelYear trText">
                                        
                                    <span class="year"><?php echo $releasedate?></span>
                                    
                                    </span>
                                        <p>Date Released</p>
                                    </td>

                                    <td class="modelGrade trText">
                                        
                                        <span class="grade"><?php echo $modelgrade?></span>
                                        <p>By Manifucturer</p>
                                        
                                    </td>
                                    <td class=" feul trText">
                                        
                                        <span class="grade"><?php echo $fuel?></span>
                                        <p>Fuel Used</p>
                                        
                                    </td>

                                    <td class="status">
                                        <?php
                                        if($status == 'sold'){
                                            ?>
                                            <span><i class="uil uil-check-circle icon"></i> Sold</span>
                                            
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <div class="onMarket">
                                            <span>On Market</span>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        
                                    </td>

                                    <td class="action">
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/carDetailsS.php?id=<?php echo $id?>">
                                            <i class="uil uil-file-info-alt icon"></i>
                                        </a>
                                    </td>
                                
                                </tr>
                                <?php

                                }
                            }
                        }
                    ?>


                </table>
            </div>
        </div>

    </div>
<?php 
include('./adminPartials/adminFooter.php');
?>