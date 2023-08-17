<?php 
include('./adminPartials/adminHeader.php');
$date = date('Y-m-d')
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="reviewBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                   Clients Reviews
                </h1>

                    <?php 
                        if(isset($_SESSION['reviewUpdated'])){
                            echo $_SESSION['reviewUpdated'];
                            unset($_SESSION['reviewUpdated']);
                        }

                        if(isset($_SESSION['reviewDeleted'])){
                            echo $_SESSION['reviewDeleted'];
                            unset ($_SESSION['reviewDeleted']);
                        }
            
                    ?> 
                
                <p>Reviews are what makes our work improved!</p>
            </div>

            <div class="reviewSection">
                <div class="semi_navBar flex">
                    <span class="menuItem" data-filter="Published">Published</span>
                    <span class="menuItem" data-filter="Pending">Pending</span>
                </div>
                <div class="reviewHeading flex">
                 <table>

                    <tr class="tr">
                        <th>Type</th>
                        <th>Reviewer</th>
                        <th>Review</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    <?php
                        $sql = "SELECT * FROM reviews where status ='Published'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $reviewerName = $row['reviewerName'];
                                $reviewerImage = $row['reviewerImage'];
                                $nationality	 = $row['nationality'];
                                $review	 = $row['review'];
                                $status	 = $row['status'];

                            
                                ?>
                                    <tr class="dataItem" data-item="Published">
                                        <td>
                                        <i class='bx bxs-message-square-dots icon' ></i>
                                        <h4>Review</h4>
                                        </td>

                                        <td>
                                            <div class="reviewer flex">
                                                <?php 
                                                    if($reviewerImage!=""){   
                                                        ?>
                                                            <img src="<?php echo SITEURL;?>Assets/<?php echo $reviewerImage;?>" alt="">
                                                            
                                                        <?php
                                                    }
                                                    else{
                                                        echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                                    }
                                                ?>
                                                <div>
                                                <h4><?php echo $reviewerName;?></h4>
                                                <p><?php echo $nationality;?></p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <p><?php echo $review;?></p>
                                        </td>

                                        <td>
                                            <div class=" statusTd flex">
                                                <p><?php echo $date;?></p>
                                                <span class="published">
                                                <?php echo $status;?>
                                                </span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btns">
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/updateReview.php?id=<?php echo $id?>">
                                                    <i class="uil uil-edit icon"></i>
                                                </a>
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/deleteReview.php?id=<?php echo $id?>">
                                                    <i class="uil uil-trash-alt icon"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php

                                }
                            }
                        }
                    ?>
                    <?php 
                        $sql = "SELECT * FROM reviews where status = 'Pending'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $reviewerName = $row['reviewerName'];
                                $reviewerImage = $row['reviewerImage'];
                                $nationality	 = $row['nationality'];
                                $review	 = $row['review'];
                                $status	 = $row['status'];

                            
                                ?>
                                    <tr class="dataItem" data-item="Pending">
                                        <td>
                                        <i class='bx bxs-message-square-dots icon' ></i>
                                        <h4>Review</h4>
                                        </td>

                                        <td>
                                            <div class="reviewer flex">
                                                <?php 
                                                    if($reviewerImage!=""){   
                                                        ?>
                                                            <img src="<?php echo SITEURL;?>Assets/<?php echo $reviewerImage;?>" alt="">
                                                            
                                                        <?php
                                                    }
                                                    else{
                                                        echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                                    }
                                                ?>
                                                <div>
                                                <h4><?php echo $reviewerName;?></h4>
                                                <p><?php echo $nationality;?></p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <p><?php echo $review;?></p>
                                        </td>

                                        <td>
                                            <div class=" statusTd flex">
                                                <p><?php echo $date;?></p>
                                                <span class="published">
                                                <?php echo $status;?>
                                                </span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btns">
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/updateReview.php?id=<?php echo $id?>">
                                                    <i class="uil uil-edit icon"></i>
                                                </a>
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/deleteReview.php?id=<?php echo $id?>">
                                                    <i class="uil uil-trash-alt icon"></i>
                                                </a>
                                            </div>
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
    </div>    

    <!-- Link admin.js -->
    <script src="./admin.js"></script>
<?php 
include('./adminPartials/adminFooter.php');
?> 