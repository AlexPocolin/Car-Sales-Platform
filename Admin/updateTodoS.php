<?php 
include('./adminPartials/adminHeader.php');
$date = date("Y-m-d");
ob_start();
$selectedID = $_GET['id']
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="updatesBody">
            <div class="top flex">
                <h1 class="titleText">
                Update ToDo
                </h1>
               <p>Be reminded of your ToDo's!</p>
            </div>

            <div class="newUpdateDiv">
                
                <h3>Update ToDo</h3>
                <form method="POST" >

                    <div class="singleField">
                        <label for="date">Date</label>
                        <input name="dateAdded" id="date" value="<?php echo $date?>" readonly>
                    </div>

                    <div class="singleField">
                        <label for="Title">Title</label>
                        <input  type="text"  name="title"  maxlength="20" id="Title" placeholder="Enter Todo Title">
                    </div>

                    <div class="singleField">
                        <label for="update">Information <small>Max.50</small></label>
                       <textarea name="todoText" id="update"  minlength="50" maxlength="255" placeholder="Type here, Maximum word length is 50 letters...."></textarea>
                    </div>

                    <div class="singleField">
                        <label for="update">Priority</label>
                      <select name="priority" id="priority">
                        <option value="high">High</option>
                        <option value="less">Less</option>
                      </select>
                    </div>

                    <button class="btn flex bg" name="submit">
                        <i class='bx bxs-pin icon'></i>
                        Add ToDo
                    </button>
                    
                </form>
            </div>
        </div>    

    </div>   

<?php 
include('./adminPartials/adminFooter.php');
?>


<?php 
if(isset($_POST['submit'])){

  $title = $_POST['title'];
  $todoText = $_POST['todoText'];
  $dateAdded = $_POST['dateAdded'];
  $priority = $_POST['priority'];

  
  $sql = "UPDATE todos SET
  title = '$title',
  infor = '$todoText',
  date = '$dateAdded', 
  priority = '$priority'
  where id = $selectedID
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['UpdateTodo'] = '<span class="success">Todo Updatd Successfuly!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/todo.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>