
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM messages WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteMessage'] = '<span class="success">Message deleted successfully!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/messagesClient.php');
}
else{
    $_SESSION['deleteMessage'] = '<span class="fail">Failed to delete message!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/messagesClient.php');
}

?>


