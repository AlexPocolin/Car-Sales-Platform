
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM subscribers WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deletedSub'] = '<span class="success">Subscriber deleted successfully!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/subscribers.php');
}
else{
    $_SESSION['deletedSub'] = '<span class="fail">Failed to delete Subscriber!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/subscribers.php');
}

?>


