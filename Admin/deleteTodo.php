
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM todos WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteTodo'] = '<span class="success">Todo deleted successfully!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/todo.php');
}
else{
    $_SESSION['deleteTodo'] = '<span class="fail">Failed to delete Item</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/todo.php');
}

?>


