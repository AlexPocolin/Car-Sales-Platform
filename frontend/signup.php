<?php
include('./clientPartials/header.php');
ob_start();
?>

    <!-- header Starts -->
    <?php
      include('./clientPartials/navbar.php')
    ?>
    <!-- header Ends -->

    <!-- SignUp Page Starts -->
    <div class="signUp section">
        <div class="secContainer container">
            <div class="secTitleDiv">
                <h2 class="secTitle">Client SignUp Page</h2>
                <P>
                    We are glad that you are joining our team!
                </P>
            </div>
            
            <div class="formSection">

                <form method="POST" class="signUpForm grid">
                    <div class="singleField">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Enter your first name"  required>
                    </div>

                    <div class="singleField">
                        <label for="lastName">Last Name</label>
                        <input type="lastName" id="lastName" name="secondName" placeholder="Enter your last name"  required>
                    </div>

                    <div class="singleField">
                        <label for="nationality">Nationality</label>
                        <input type="nationality" id="nationality" name="nationality" placeholder="Enter your nationality"  required>
                    </div>

                    <div class="singleField">
                        <label for="dob">Date of birth</label>
                        <input type="date" id="dob" name="dob"  required>
                    </div>

                    <div class="singleField">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"  required>
                    </div>

                    <div class="singleField">
                        <label for="username">Login Username</label>
                        <input type="text" id="username" name="username" placeholder="Create your login username"  required>
                    </div>


                    <div class="singleField">
                        <label for="password">Create Password</label>
                        <input type="password" id="password" name="password" placeholder="Create your password"  required>
                    </div>



                    <button class="bg btn flex primaryBtn" name="submit">Register <i class='bx bx-right-arrow-alt icon'></i></button>
               
                </form>

                <span class="registerLink">
                    <p>Have an account? <a href="login.php">Login here</a></p>
                </span>
            </div>
        </div>
    </div>

    <!-- login Page Ends -->

<?php
include('./clientPartials/footer.php')
?>
    

<?php 
if(isset($_POST['submit'])){

  $firstName = $_POST['firstName'];
  $secondName = $_POST['secondName'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $nationality = $_POST['nationality'];
  $dob = $_POST['dob'];
  $password = $_POST['password'];


  $sql = "INSERT INTO clients SET
  firstname = '$firstName',
  secondname = '$secondName',
  email = '$email',
  nationality = '$nationality',
  username = '$username',
  dob = '$dob',
  password = '$password'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['addedClient'] = '<span class="success">You have signedUp Successfully!</span>';
      header('location:'.SITEURL. 'View/Frontend/login.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>