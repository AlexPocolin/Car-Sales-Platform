

<div class="sideMenu">
    <div class="logoDiv flex">
        <h3>CarHom</h3>
    </div>
  <div class="menu">
    <ul class="menuItem grid">
        <li class="menuList flex">
            <a href="admin.php" class="menuLink linkActive flex">
                <i class="uil uil-create-dashboard icon"></i>
                <span class="text">Dashboard</span>
            </a>
        </li> 

        <li class="menuList flex">
            <a href="./cars.php" class="menuLink flex">
                <i class="uil uil-building icon"></i>
                <span class="text">All Cars</span>
            </a>
        </li> 

        <li class="menuList flex">
            <a href="todo.php" class="menuLink flex">
                <i class="uil uil-clipboard-alt icon"></i>
                <span class="text">To do</span>
            </a>
        </li> 

        <li class="menuList flex"> 
            <a href="clients.php" class="menuLink flex">
                <i class="uil uil-user-circle icon"></i>
                <span class="text">Clients</span>
            </a>
        </li> 


        <li class="menuList flex"> 
            <a href="reviews.php" class="menuLink flex">
                <i class="uil uil-comment-message icon"></i>
                <span class="text">Reviews</span>
            </a>
        </li> 

        <li class="menuList flex"> 
            <a href="messages.php" class="menuLink flex">
                <i class="uil uil-envelope-question icon"></i>
                <span class="text">Messages</span>
            </a>
        </li> 

        <li class="menuList flex"> 
            <a href="calender.php" class="menuLink flex">
                <i class="uil uil-calendar-alt icon"></i>
                <span class="text">Calendar</span>
            </a>
        </li> 

        <li class="menuList flex"> 
            <a href="updates.php" class="menuLink flex">
                <i class="uil uil-bell icon"></i>
                <span class="text">Updates</span>
            </a>
        </li> 
    </ul>
  </div>

        <?php 

            $sessionUser = $_SESSION['username'];
            $sql = "SELECT * FROM staff where username ='$sessionUser'";
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
                    }
                }
            }
        ?>

  <div class="accountDiv">
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
    <span class="name"><?php echo $firstname;?></span>
    <p><?php echo $email;?></p>

    <div class="accountBtns flex">
        <a href="<?php echo SITEURL?>View/Frontend/staffLogin.php">
            <button class="btn bg flex">
                <i class="uil uil-sign-out-alt icon"></i>
                Log Out
            </button>
        </a>
        <a href="settings.php">
            <button class="btn bg flex">
                <i class="uil uil-setting icon"></i>
            </button>
        </a>
    </div>
   
  </div>
</div>