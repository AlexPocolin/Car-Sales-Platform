
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM clients WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteClient'] = '<span class="success">Client deleted successfully!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/clients.php');
}
else{
    $_SESSION['deleteClient'] = '<span class="fail">Failed to delete Client!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/clients.php');
}

?>


