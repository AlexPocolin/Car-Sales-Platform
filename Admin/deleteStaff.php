
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM staff WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteStaff'] = '<span class="success">Staff deleted successfully!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/staff.php');
}
else{
    $_SESSION['deleteStaff'] = '<span class="fail">Failed to delete Staff!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/staff.php');
}

?>


