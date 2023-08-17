
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM updates WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteUpdate'] = '<span class="success">Update deleted successfully!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/updates.php');
}
else{
    $_SESSION['deleteUpdate'] = '<span class="fail">Failed to delete Update!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/updates.php');
}

?>


