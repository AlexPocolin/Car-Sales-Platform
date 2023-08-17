<?php 
include('./adminPartials/adminHeader.php');

?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuClient.php');
        ?>

                <?php 
                     $sessionUser = $_SESSION['username'];
                    $sql = "SELECT * FROM clients where username = '$sessionUser'";
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                        $count =  mysqli_num_rows($res);

                        if($count > 0){
                            while($row = mysqli_fetch_assoc($res)){
                               $clientId = $row['id'];
                            }
                        }
                    }
                ?>


        <div class="messagesBody">
            
            <div class="top flex greyBg">
                <h1 class="titleText">
                   Messages Center
                  
                   
                </h1>
                <p>Welcome to the messages center!</p>
            </div>

            <div class="messagesDiv" >

                <div class="messagesContainer flex">
                    <?php 
                        
                        $sql = "SELECT * FROM messages where receiverID = $clientId";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $message = $row['message'];
                                    $senderID = $row['senderID'];
                                    ?>
                                        <div class="singleMessage">
                                            <?php 
                    
                                                $sql = "SELECT * FROM staff where id = '$senderID'";
                                                $res = mysqli_query($conn, $sql);
                                                if($res == TRUE){
                                                    $count =  mysqli_num_rows($res);

                                                    if($count > 0){
                                                        while($row = mysqli_fetch_assoc($res)){
                                                            $id = $row['id'];
                                                            $firstname = $row['firstname'];
                                                            $staffImage = $row['profilepic'];
                                                        }
                                                    }
                                                }
                                            ?>

                                                <?php 
                                                    if($staffImage!=""){   
                                                        ?>
                                                            <img src="<?php echo SITEURL;?>Assets/<?php echo $staffImage;?>" alt="Car Image">
                                                        <?php
                                                    }
                                                    else{
                                                        echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                                    }
                                                ?>
                                           
                                            <span><i class="uil uil-envelope-check icon"></i><?php echo $firstname;?></span>
                                            <p>You have a new message from <?php echo $firstname;?> </p>

                                            <div class="btns">
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/singleMessageClient.php?id=<?php echo $id?>">
                                                    <button class="btn flex bg">
                                                        <i class="uil uil-clipboard-notes icon"></i> Details
                                                    </button>
                                                </a>
                                            </div>
                                        </div>

                                    <?php  
                                }
                            }

                            
                            else{
                                ?>
                                <span>No messages at the moment!</span>
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