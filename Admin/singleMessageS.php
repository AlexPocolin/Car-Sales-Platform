<?php 
include('./adminPartials/adminHeader.php');
ob_start();
?>
    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuS.php');
        ?>

            <?php 
                $sessionUser = $_SESSION['username'];
                $sql = "SELECT * FROM staff where username = '$sessionUser'";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $count =  mysqli_num_rows($res);

                    if($count > 0){
                        while($row = mysqli_fetch_assoc($res)){
                            $staffId = $row['id'];
                            $profilePic = $row['profilepic'];
                        }
                    }
                }
            ?>
        <div class="singleMessageBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                   Inbox Chat
                </h1>
                <i class="uil uil-envelope-check messageIcon icon"></i>
            </div>

           <div class="messageContainer">
                    <?php 
                        
                        $sql = "SELECT * FROM messages where receiverID = $staffId";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $messageID = $row['id'];
                                    $senderID = $row['senderID'];  
                                    $message = $row['message'];  
                                }
                            }

                            
                            else{
                                ?>
                                <span>No messages at the moment!</span>
                                <?php
                            }
                        }
                    ?>

                    <?php 
                        
                        $sql = "SELECT * FROM clients where id = '$senderID'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $firstname = $row['firstname'];
                                    $cleintImage = $row['image'];
                                }
                            }
                        }
                    ?>
            <div class="messages flex">
                
                <div class="senderContainer">
                    <?php  
                        $sql = "SELECT * FROM messages where receiverID = $staffId";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $messageID = $row['id'];
                                    $senderID = $row['senderID'];  
                                    $message = $row['message'];  

                                    ?>
                                     <div class="sender">
                                      <?php 
                                           
                                            if($cleintImage!=""){   
                                                ?>
                                                    <img src="<?php echo SITEURL;?>Assets/<?php echo $cleintImage;?>" alt="Car Image">
                                                <?php
                                            }
                                            else{
                                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Client Image</span>';
                                            }
                                        ?>
                                        
                                        <p><?php echo $message;?></p>
                                        </div>
                                    <?php
                                }
                            }
                        }
                    ?>
                
                </div>
                <div class="receiverContainer">

                    <?php  
                        $sql = "SELECT * FROM messages where senderID = $staffId";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $messageID = $row['id'];
                                    $senderID = $row['senderID'];  
                                    $message = $row['message'];  

                                    ?>
                                    <div class="receiver">
                                      <?php 
                                            if($profilePic!=""){   
                                                ?>
                                                    <img src="<?php echo SITEURL;?>Assets/<?php echo $profilePic;?>" alt="Car Image">
                                                <?php
                                            }
                                            else{
                                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Client Image</span>';
                                            }
                                        ?>
                                        
                                        <p><?php echo $message;?></p>
                                        </div>
                                    <?php
                                }
                            }

                          
                        }
                    ?>
                   
                </div>

                <!-- <div class="receiver">
                    <img src="../Assets/user (1).jpg" alt="Messager Image">
                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, voluptate!</p>
                </div> -->
            </div>
            <form method="POST" class="inputDiv flex">
                    <input type="text" name="message" placeholder="Enter Message...">

                    <button class="btn flex bg" name="submit"><i class="uil uil-message icon"></i> Send</button>
            </form>
           </div>
        </div>    
    </div>
    
<?php 
include('./adminPartials/adminFooter.php');
?>

<?php 
if(isset($_POST['submit'])){

  $message = $_POST['message'];
  
  $sql = "INSERT INTO messages SET
  senderID = '$staffId',
  receiverID = '$id',
  message = '$message'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['messageSent'] = '<span class="success">Message sent!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/messagesS.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>