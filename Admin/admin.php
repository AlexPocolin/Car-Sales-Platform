<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

            <?php 
                $sql = 'SELECT * FROM cars';
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $carsCount =  mysqli_num_rows($res);
                }
            ?>
            <?php 
                $sql = 'SELECT * FROM staff';
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $staffCount =  mysqli_num_rows($res);
                }
            ?>
            <?php 
                $sql = "SELECT * FROM cars where status = 'sold'";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $soldCarsCount =  mysqli_num_rows($res);
                }
            ?>
            <?php 
              // Get the values from the database=========>
              $sql = "SELECT * FROM cars WHERE status = 'sold'";
              $res = mysqli_query($conn, $sql);
              $totalRevenue = 0;
              if($res==TRUE){
                  $closedReservations = mysqli_num_rows($res);
                  if($closedReservations > 0){
                      while($eachRow = mysqli_fetch_assoc($res)){
                        $id = $eachRow['id'];
                        $eachCarPrice = $eachRow['price'];
                        $totalRevenue += $eachCarPrice; 
                      }
                  }
              }

            ?>

            <?php
                $sessionUser = $_SESSION['username'];
                    
                    $sql = "SELECT * FROM staff where username = '$sessionUser'";
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
                            <span>No High Priority Assigments at the moment!</span>
                            <?php
                        }
                    }
            ?>


        <div class="body">
            <div class="top flex">
                <h1 class="titleText">
                    Administrator Dashboard
                </h1>

                    <?php 
                        if(isset($_SESSION['loginMessage'])){
                            echo $_SESSION['loginMessage'];
                            unset($_SESSION['loginMessage']);
                        }
                    ?> 
                <p>Hi, welcome to Jada Cars!</p>
            </div>
            
            <div class="summaryDiv flex">
                <div>
                    <h1><?php echo $carsCount?></h1>
                    <p>CARS</p>
                    <small>Only Verified Cars</small>
                    <h1 class="overlay"><?php echo $carsCount?></h1>
                </div>
                <div>
                    <h1><?php echo $staffCount?></h1>
                    <p>STAFF</p>
                    <small>Only Verified Staff</small>
                    <h1 class="overlay"><?php echo $staffCount?></h1>
                </div>
                <div>
                    <h1><?php echo $soldCarsCount?></h1>
                    <p>SALES</p>
                    <small>Completed Sales</small>
                    <h1 class="overlay"><?php echo $soldCarsCount?></h1>
                </div>
                <div>
                    <h1>$<?php echo $totalRevenue?></h1>
                    <p>Est. REVENUE</p>
                    <small>From all verified sales</small>
                    <h1 class="overlay"><?php echo $totalRevenue?></h1>
                </div>
            </div>

            <div class="homeTodos">
                <div class="todoDiv">
                    <div class="divTitle flex">
                        <h3>High Priority Assigments</h3>
                    </div>

                    
    
                    <div class="todos flex">
                        <?php 
                            $sql = "SELECT * FROM todos where staffID = '$staffID' AND priority = 'high' limit 0,4";
                            $res = mysqli_query($conn, $sql);
                            if($res == TRUE){
                                $count =  mysqli_num_rows($res);

                                if($count > 0){
                                    while($row = mysqli_fetch_assoc($res)){
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        $infor = $row['infor'];
                                        $date = $row['date'];
                                        $priority = $row['priority'];

                                        ?>
                                            <div class="singleTodo">
                                                <div class="flex">
                                                    <span><?php echo $date?></span>
                                                    <div class="btns">
                                                        <a href="<?php echo SITEURL?>View/Backend/Admin/todo.php?id=<?php echo $id?>">
                                                            <i class="uil uil-file-info-alt icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="todoTitle"><?php echo $title?></h3>
                                                <p><?php echo $infor?></p>
                                            </div>
                                        <?php   
                                    }
                                }

                                else{
                                    ?>
                                    <span>No high Priority Assigments at the moment!</span>
                                    <?php
                                }
                            }
                        ?>
                    </div>
    
                   
                </div>
            </div>

            <div class="summaryPropertyDiv">
                <div class="divTitle flex">
                    <h3>Most Popular Cars </h3>
                    <div class="line"></div>
                    <div>
                         <a href="<?php echo SITEURL?>View/Backend/Admin/cars.php" class="flex btn">
                            All Cars 
                            <i class="uil uil-angle-right-b icon"></i>
                         </a>
                    </div>
                </div>
               <div class="propertyContainer flex">
                    
                    <?php 
                        $sql2 = "SELECT * FROM cars where status = 'On Market' order by rand() limit 0,4";
                        $res2 = mysqli_query($conn, $sql2);
                        if($res2 == TRUE){
                            $count =  mysqli_num_rows($res2);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res2)){
                                $carId = $row['id'];
                                $carname = $row['carname'];
                                $price = $row['price'];
                                $location = $row['location'];
                                $mainimage = $row['mainimage']; 
                                $staffID = $row['staffID'];
                                

                                ?>
                                <div class="singleProperty">
                                    <div class="imgDiv">
                                    <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <img class="apartImg" src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                        
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                        }
                                    ?>
                                        <div class="location loctionActive">
                                            <span class="apartName">
                                             <?php echo $carname;?>
                                            </span>
                                            <span class="propertyLocation">
                                             <?php echo $location;?>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="imgInfo">
                                        <?php 
                                            $sql = "SELECT * FROM staff where id ='$staffID'";
                                            $res = mysqli_query($conn, $sql);
                                            if($res == TRUE){
                                                $count =  mysqli_num_rows($res);

                                                if($count > 0){
                                                    while($row = mysqli_fetch_assoc($res)){
                                                    $id = $row['id'];
                                                    $profilepic = $row['profilepic'];
                                                    }
                                                }
                                            }
                                        ?>

                                        <?php 
                                            if($profilepic!=""){   
                                                ?>
                                                <div class="tenantImage">
                                                <img src="<?php echo SITEURL;?>Assets/<?php echo $profilepic;?>" alt="Car Image">
                                                </div>
                                            
                                                <?php
                                            }
                                            else{
                                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                            }
                                        ?>

                                        <div class="amenities flex">
                                            <p class="flex"><i class='bx bxs-group icon'></i></p>

                                            <p class="flex"><i class='bx bxs-gas-pump icon' ></i></p>

                                            <p class="flex"><i class='bx bx-tachometer icon'></i></p>

                                            <p><i class="uis uis-anchor icon"></i></p>
                                        </div>
                                        
                                        <div class="flex">
                                            <h1 class="price">$<?php echo $price?></h1>
                                            <span class="status"><i class="uil uil-exclamation-triangle icon"></i></span>
                                        </div>
                                
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/cars.php?id=<?php echo $carId?>">
                                            <button class="btn">
                                                VIEW DETAILS  <i class="uil uil-arrow-up-right icon"></i>
                                            </button>
                                        </a>
                        
                                    </div>
                                </div> 
                                <?php

                                }
                            }
                        }
                    ?>
               </div>

               
            </div>

            <div class="homeUpdatesDiv">
                <h3>Communication</h3>

                <?php 
                    $sql = "SELECT * FROM updates limit 0,4";
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                        $count =  mysqli_num_rows($res);

                        if($count > 0){
                            while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $title = $row['title'];
                                $text = $row['text'];
                                $date = $row['date'];
                               
                                ?>
                                    <div class="singleUpdate">
                                        <div class="cardTop flex">
                                            <span class="updateID">Jada #00<?php echo $id?></span>
                                            <span class="date"><?php echo $date?></span>
                                            <i class='bx bxs-pin icon'></i>
                                        </div>
                                        <h3 style="padding:0 1rem; font-size:20px;"><?php echo $title?></h3>
                                        <p><?php echo $text?></p>
                                        <small>By Charmaine Tan</small>
                                    </div>
                                <?php
                            }
                        }

                        else{
                            ?>
                            <span>No High Priority Assigments at the moment!</span>
                            <?php
                        }
                    }
                ?>
            </div>
           
        </div>
    </div>

    <!-- Link to js -->
    <script src="./admin.js"></script>
<?php 
include('./adminPartials/adminFooter.php');
?>