<?php 
include('./adminPartials/adminHeader.php');
ob_start();
$selectedID = $_GET['id'];
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="addStaffBody">
            <div class="top flex">
                <h1 class="titleText">
                    Update Staff
                </h1>
                <p>Creating an amazing property for the world!</p>
            </div>

            <div class="newAgentDiv">
                <h3 class="formTitle">Completely fill the form below!</h3>

                <?php 
                        $selectedID = $_GET['id'];
                        $sql = "SELECT * FROM staff where id = '$selectedID'";
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
                                $description = $row['description'];
                                $twitter = $row['twitter'];
                                $instagram = $row['instagram'];
                                $linkedin = $row['linkedin'];
                                $role = $row['role'];
                                $response = $row['response'];
                                $password = $row['password'];
                                }
                            }
                        }
                    ?>

                <form method="POST" class="flex" enctype="multipart/form-data">
                    <div>
                      <div class="singleField">
                          <label for="FirstName">First Name</label>
                          <input type="text" id="FirstName" name="firstName"  value="<?php echo $firstname?>">
                      </div>

                      <div class="singleField">
                          <label for="secName">Second Name</label>
                          <input type="text" id="secName" name="secondName"  value="<?php echo $secondname?>">
                      </div>

                      <div class="singleField">
                          <label for="userName">User Name</label>
                          <input type="text" id="userName" name="userName" value="<?php echo $username?>">
                      </div>

                      <div class="singleField">
                          <label for="phone">Phone Number</label>
                          <input type="number" id="phone" name="phone" value="<?php echo $phone?>">
                      </div>

                      <div class="singleField">
                          <label for="profilePicture">Profile Picture </label>
                          <input type="file" name="profilePicture" id="profilePicture" value="<?php echo $profilepic?>">
                      </div>

                      <div class="singleField">
                              <label for="coverPic">Cover Picture </label>
                              <input type="file" name="coverPic" id="coverPic" value="<?php echo $coverPic?>">
                        </div>

                    </div>

                      <div>
                          <div class="singleField">
                              <label for="email">Email Address</label>
                              <input type="email" id="email" name="email" value="<?php echo $email?>">
                          </div>

                          <div class="singleField">
                              <label for="nationality">Nationality</label>
                              <input type="text" id="nationality" name="nationality" value="<?php echo $nationality?>">
                          </div>

                          <div class="singleField">
                              <label for="dob">Date Of Birth</label>
                              <input type="date" id="dob" name="dob" value="<?php echo $dob?>">
                          </div>

                          <div class="singleField">
                              <label for="gender">Gender</label>
                              <input type="text" id="gender" name="gender" value="<?php echo $gender?>">
                          </div>

                          <div class="singleField">
                              <label for="desc">Description</label>
                              <textarea name="description" id="desc" maxlength="255"><?php echo $description?></textarea>
                          </div>

                      </div>

                      <div class="socialLinks">
                          <div class="singleField">
                              <label for="facebook">Facebook</label>
                              <input type="url" id="facebook" name="fbLink" value="<?php echo $facebook?>">
                          </div>

                          <div class="singleField">
                              <label for="twitter">Twitter</label>
                              <input type="url" id="twitter" name="twtLink" value="<?php echo $twitter?>">
                          </div>

                          <div class="singleField">
                              <label for="instagram">Instagram</label>
                              <input type="url" id="instagram" name="igLink" value="<?php echo $instagram?>">
                          </div>

                          <div class="singleField">
                              <label for="linkedin">LinkedIn</label>
                              <input type="url" id="linkedin" name="linkedinLink" value="<?php echo $linkedin?>">
                          </div>

                          <div class="singleField">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" value="<?php echo $password?>">
                          </div>
                      </div>

                     <div>
                          <div class="singleField">
                              <label for="language">Primary Language</label>
                              <input type="text" id="language" name="language" value="<?php echo $language?>">
                          </div>

                          <div class="singleField">
                              <label for="experience">Experience</label>
                              <input type="number" id="experience" name="experience" value="<?php echo $experience?>">
                          </div>

                          <div class="singleField">
                              <label for="response">Response Time</label>
                              <input type="number" id="response" name="response" value="<?php echo $response?>">
                          </div>

                          <div class="singleField">
                            <label for="role">Role</label>
                            <select name="role" id="role" value="<?php echo $role?>">
                                <option value="admin">Administrator</option>
                                <option value="staff" selected>Staff/Agent</option>
                            </select>
                           </div>

                          <div class="singleField">
                            <label for="status">Status</label>
                            <select name="status" id="status" value="<?php echo $status?>">
                                <option value="verified" >Verified</option>
                                <option value="not verified">Not verified</option>
                            </select>
                           </div>

                          <button class="btn flex bg" name="submit" style="width:
                          100%; margin-top:2rem"><i class="uil uil-fidget-spinner icon"></i>Update Staff</button>
                     </div>

                     
                </form>
            </div>
        </div>

    </div>   

<?php 
include('./adminPartials/adminFooter.php');
?>  



<?php 
if(isset($_POST['submit'])){

  $firstName = $_POST['firstName'];
  $secondName = $_POST['secondName'];
  $userName = $_POST['userName'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $nationality = $_POST['nationality'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $fbLink = $_POST['fbLink'];
  $twtLink = $_POST['twtLink'];
  $igLink = $_POST['igLink'];
  $linkedinLink = $_POST['linkedinLink'];
  $password = $_POST['password'];
  $language = $_POST['language'];
  $experience = $_POST['experience'];
  $description = $_POST['description'];
  $response = $_POST['response'];
  $role = $_POST['role'];
  $status = $_POST['status'];


   //  Uploading Profile Picture to the database =======================>
     
   if(isset($_FILES['profilePicture']['name'])){
    //To upload the image we need the image name, source and destination.
    $profilePicture = $_FILES['profilePicture']['name'];
    // Source ================>
    $imageSource = $_FILES['profilePicture']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$profilePicture; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
            // header('location:' .SITEURL. '.php');
   
    }
  }else{
    
    $profilePicture ="";
    }


   //  Uploading Cover Picture to the database =======================>

   if(isset($_FILES['coverPic']['name'])){
    //To upload the image we need the image name, source and destination.
    $coverPic = $_FILES['coverPic']['name'];
    // Source ================>
    $imageSource = $_FILES['coverPic']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$coverPic; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
            // header('location:' .SITEURL. '.php');
   
    }
  }else{
    
    $coverPic ="";
    }

  $sql = "UPDATE staff SET
  firstname = '$firstName',
  secondname = '$secondName',
  username = '$userName',
  phone = '$phone',
  profilepic = '$profilePicture',
  coverpic = '$coverPic',
  email = '$email',
  nationality = '$nationality',
  dob = '$dob',
  gender = '$gender',
  facebook = '$fbLink',
  description = '$description',
  twitter = '$twtLink',
  instagram = '$igLink',
  linkedin = '$linkedinLink',
  password = '$password',
  language = '$language',
  experience = '$experience',
  response = '$response',
  status = '$status',
  role = '$role'
  where id = $selectedID
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['staffUpdated'] = '<span class="success">Staff Updated Successfully!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/staff.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>