<div class="sideMenu">
    <div class="logoDiv flex">
        <h3>CarHom</h3>
    </div>
  <div class="menu">
    <ul class="menuItem grid">

        <li class="menuList flex">
            <a href="./clientAllCarsPage.php" class="menuLink flex">
                <i class="uil uil-building icon"></i>
                <span class="text">All Cars</span>
            </a>
        </li> 

        <li class="menuList flex"> 
            <a href="messagesClient.php" class="menuLink flex">
                <i class="uil uil-envelope-question icon"></i>
                <span class="text">Messages</span>
            </a>
        </li> 

        <li class="menuList flex"> 
            <a href="calenderClient.php" class="menuLink flex">
                <i class="uil uil-calendar-alt icon"></i>
                <span class="text">Calendar</span>
            </a>
        </li> 

        <li class="menuList flex"> 
            <a href="updatesClient.php" class="menuLink flex">
                <i class="uil uil-bell icon"></i>
                <span class="text">Updates</span>
            </a>
        </li> 
    </ul>
  </div>

        <?php 

            $sessionUser = $_SESSION['username'];
            $sql = "SELECT * FROM clients where username ='$sessionUser'";
            $res = mysqli_query($conn, $sql);
            if($res == TRUE){
                $count =  mysqli_num_rows($res);

                if($count > 0){
                    while($row = mysqli_fetch_assoc($res)){
                        $id = $row['id'];
                        $carID = $row['carID'];
                        $agentID = $row['agentID'];
                        $firstname = $row['firstname'];
                        $secondname = $row['secondname'];
                        $image = $row['image'];
                        $email = $row['email'];
                        $nationality = $row['nationality'];
                        $gender = $row['gender'];
                        $dob = $row['dob'];
                        $payment = $row['payment'];
                        $insurance = $row['insurance'];
                        $username = $row['username'];
                    }
                }
            }
        ?>

    <div class="accountDiv">
        <?php 
            if($image!=""){   
                ?>
                    <div class="imgDiv">
                    <img src="<?php echo SITEURL;?>Assets/<?php echo $image;?>" alt="Car Image">
                    </div>
                <?php
            }
            else{
                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
            }
        ?>
    <span class="name"><?php echo $firstname;?></span>
    <p><?php echo $email;?></p>

    <div class="accountBtns flex">
        <a href="<?php echo SITEURL?>View/Frontend/login.php">
            <button class="btn bg flex">
                <i class="uil uil-sign-out-alt icon"></i>
                Log Out
            </button>
        </a>
        <a href="<?php echo SITEURL?>View/Backend/Admin/clientSettingsPage.php">
            <button class="btn bg flex">
                <i class="uil uil-setting icon"></i>
            </button>
        </a>
    </div>
   
  </div>
</div>