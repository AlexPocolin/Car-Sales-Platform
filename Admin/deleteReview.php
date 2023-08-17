
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM reviews WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['reviewDeleted'] = '<span class="success">Review deleted successfully!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/reviews.php');
}
else{
    $_SESSION['reviewDeleted'] = '<span class="fail">Failed to delete review!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/reviews.php');
}

?>


