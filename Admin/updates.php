<?php 
include('./adminPartials/adminHeader.php');
?>
    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="updatesBody">
            <div class="top flex">
                <h1 class="titleText">
                JadaCars Updates
                </h1>

                    <?php 
                        if(isset($_SESSION['addedUpdate'])){
                            echo $_SESSION['addedUpdate'];
                            unset($_SESSION['addedUpdate']);
                        }

                        if(isset($_SESSION['updatedCom'])){
                            echo $_SESSION['updatedCom'];
                            unset ($_SESSION['updatedCom']);
                        }

                        if(isset($_SESSION['deleteUpdate'])){
                            echo $_SESSION['deleteUpdate'];
                            unset($_SESSION['deleteUpdate']);
                        }


                    ?> 

                <a href="newUpdate.php">
                    <button class="btn flex bg">
                        <i class="uil uil-plus icon"></i>
                        Create New Update
                    </button>
                </a>
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
                                            
                                            <div class="btns">
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/updateCom.php?id=<?php echo $id?>">
                                                    <i class="uil uil-edit icon"></i>
                                                </a>
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/deleteCom.php?id=<?php echo $id?>">
                                                    <i class="uil uil-trash-alt icon"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <h3 style="padding:0 1rem; font-size:20px;"><?php echo $title?></h3>
                                        <p><?php echo $text?></p>
                                        <small>By <?php echo $sessionUser?></small>
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