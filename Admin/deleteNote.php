
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM notes WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteNote'] = '<span class="success">Note deleted successfully!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/todo.php');
}
else{
    $_SESSION['deleteNote'] = '<span class="fail">Failed to delete note!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/todo.php');
}

?>


