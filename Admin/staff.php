<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="staffBody">
            <div class="top flex">
                <h1 class="titleText">
                    Verified Staff
                </h1>

                <?php 
                        if(isset($_SESSION['deleteStaff'])){
                            echo $_SESSION['deleteStaff'];
                            unset($_SESSION['deleteStaff']);
                        }

                        if(isset($_SESSION['addedStaff'])){
                            echo $_SESSION['addedStaff'];
                            unset ($_SESSION['addedStaff']);
                        }

                        if(isset($_SESSION['staffUpdated'])){
                            echo $_SESSION['staffUpdated'];
                            unset($_SESSION['staffUpdated']);
                        }
            
                    ?> 
                <p>Hi Isra, did you say Good morning to any of them today <i class="uil uil-grin icon"></i>?</p>

                <a href="addStaff.php"><button  class="flex btn bg">
                    <i class="uil uil-plus"></i> Add New
                </button></a>
            </div>

            <div class="staffsDiv">
                <table>
                    <tr>
                        <th>Staff ID</th>
                        <th>Summary</th>
                        <th>Contact</th>
                        <th>Company</th>
                        <th>Cars</th>
                        <th>Details</th>  
                    </tr>

                    <?php 
                        $sql = 'SELECT * FROM staff';
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
                            
                                ?>
                                    <tr>
                                        <td class="id"><?php echo $id?></td>
                                        <td class="staffInfo flex">

                                            <?php 
                                                if($profilepic!=""){   
                                                    ?>
                                                        <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>Assets/<?php echo $profilepic;?>" alt="Car Image">
                                                        </div>
                                                    <?php
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                                }
                                            ?>
                                            <div class="info">
                                                <span class="name"><?php echo $firstname?> <?php echo $secondname?></span>

                                                <span class="nationlity"><?php echo $nationality?></span>
                                                <p>Response: <?php echo $response?> Min</p>
                                            </div>
                                        </td>

                                        <td class="sDate">
                                            <span class="date flex"><i class="uil uil-phone icon"></i><?php echo $phone?></span>
                                            <p><?php echo $email?></p>
                                        </td>

                                        <td class="rentFee">
                                            <span class="fees flex"><i class="uil uil-award icon"></i>IsraTech</span>
                                            <p>Car Company</p>
                                        </td>

                                        <td class="eDate">
                                            <span class="date flex"><i class="uil uil-building icon"></i> 16</span>
                                            <p>Sold Cars</p>
                                        </td>

                                        <td class="action">
                                            <a href="<?php echo SITEURL?>View/Backend/Admin/staffDetails.php?id=<?php echo $id?>">
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