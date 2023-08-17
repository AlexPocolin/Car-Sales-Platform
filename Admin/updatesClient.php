<?php 
include('./adminPartials/adminHeader.php');
?>
    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuClient.php');
        ?>

        <div class="updatesBody">
            <div class="top flex">
                <h1 class="titleText">
                JadaCars Updates
                </h1>
            </div>

            <div class="updateDiv">
                <h3>All Updates</h3>
                <?php 
                    $sessionUser = $_SESSION['username'];
                    $sql = "SELECT * FROM updates"  ;
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
                                            
                                    

                                        </div>
                                        <h3 style="padding:0 1rem; font-size:20px;"><?php echo $title?></h3>
                                        <p><?php echo $text?></p>
                                        <small>By Admin</small>
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


<?php 
include('./adminPartials/adminFooter.php');
?>           