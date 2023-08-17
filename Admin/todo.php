<?php 
include('./adminPartials/adminHeader.php');
?>
    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

                <?php
                $sessionUser = $_SESSION['username'];
                    
                    $sql = "SELECT * FROM staff where username = '$sessionUser'";
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                        $count =  mysqli_num_rows($res);

                        if($count > 0){
                            while($row = mysqli_fetch_assoc($res)){
                                $staffID = $row['id'];
                            }
                        }

                        
                        else{
                            ?>
                            <span>No High Priority Assigments at the moment!</span>
                            <?php
                        }
                    }
                ?>

        <div class="todoBody">
            <div class="top flex">
                <h1 class="titleText">
                    My ToDos
                </h1>

                    <?php 
                        if(isset($_SESSION['addedTodo'])){
                            echo $_SESSION['addedTodo'];
                            unset($_SESSION['addedTodo']);
                        }

                        if(isset($_SESSION['UpdateTodo'])){
                            echo $_SESSION['UpdateTodo'];
                            unset ($_SESSION['UpdateTodo']);
                        }

                        if(isset($_SESSION['addedNote'])){
                            echo $_SESSION['addedNote'];
                            unset($_SESSION['addedNote']);
                        }

                        if(isset($_SESSION['updateNote'])){
                            echo $_SESSION['updateNote'];
                            unset ($_SESSION['updateNote']);
                        }
            
                    ?> 


                <p>Hi Isra, will you complate some todos today <i class="uil uil-grin icon"></i>?</p>

                <a href="addTodo.php"><button  class="flex btn bg">
                    <i class="uil uil-plus"></i> Add New
                </button></a>
            </div>

            <div class="todoDiv">
                <div class="divTitle flex">
                    <h3>High Priority Assigments</h3>
                </div>

                <div class="todos flex">  
                <?php
                    
                    $sql = "SELECT * FROM todos where staffID = '$staffID' AND priority = 'high'";
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                        $count =  mysqli_num_rows($res);

                        if($count > 0){
                            while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $title = $row['title'];
                                $infor = $row['infor'];
                                $date = $row['date'];
                                $priority = $row['priority'];
                                ?>
                                <div class="singleTodo">
                                    <div class="flex">
                                        <span><?php echo $date?></span>
                                        <div class="btns">
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/updateTodo.php?id=<?php echo $id?>">
                                            <i class="uil uil-edit icon"></i>
                                        </a>
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/deleteTodo.php?id=<?php echo $id?>">
                                            <i class="uil uil-trash-alt icon"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <h3 class="todoTitle"><?php echo $title?></h3>
                                    <p><?php echo $infor?></p>
                                </div>
                                <?php
                                
                                 
                                
                            }
                        }

                        
                        else{
                            ?>
                            <span>No High Priority Assigments at the moment!</span>
                            <?php
                        }
                    }
                ?>
                </div>

                <div class="divTitle flex">
                    <h3>Less Priority Assigments</h3>
                </div>

                <div class="todos flex">  
                    <?php 
                        $sql = "SELECT * FROM todos where staffID = '$staffID' AND priority = 'less'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    $infor = $row['infor'];
                                    $date = $row['date'];
                                    $priority = $row['priority'];

                                    ?>
                                        <div class="singleTodo">
                                            <div class="flex">
                                                <span><?php echo $date?></span>
                                                <div class="btns">
                                                    <a href="<?php echo SITEURL?>View/Backend/Admin/updateTodo.php?id=<?php echo $id?>">
                                                        <i class="uil uil-edit icon"></i>
                                                    </a>
                                                    <a href="<?php echo SITEURL?>View/Backend/Admin/deleteTodo.php?id=<?php echo $id?>">
                                                        <i class="uil uil-trash-alt icon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <h3 class="todoTitle"><?php echo $title?></h3>
                                            <p><?php echo $infor?></p>
                                        </div>
                                    <?php   
                                }
                            }

                            else{
                                ?>
                                <span>No Less Priority Assigments at the moment!</span>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>

            <div class="notesDiv">
                <div class="top notesTitle flex">
                    <h1 class="titleText">
                        My Notes
                    </h1>
                    <p>Hi Isra, kindly remember to revise
                     me, Yours sincerely Notes!<i class="uil uil-nerd icon"></i>!</p>
    
                    <a href="addNote.php"><button  class="flex btn bg">
                        <i class="uil uil-plus"></i> Add New
                    </button></a>
                </div>

                <div class="notes grid">
                    <?php 
                        $sql = "SELECT * FROM notes where staffID = '$staffID'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    $infor = $row['infor'];
                                    $date = $row['dateAdded'];
                                
                                    ?>
                                    <div class="singleNote">
                                        <div class="flex">
                                            <span><?php echo $date?></span>
                                            <div class="btns">
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/updateNote.php?id=<?php echo $id?>">
                                                    <i class="uil uil-edit icon"></i>
                                                </a>
                                                <a href="<?php echo SITEURL?>View/Backend/Admin/deleteNote.php?id=<?php echo $id?>">
                                                    <i class="uil uil-trash-alt icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h3 class="todoTitle"><?php echo $title?></h3>
                                        <p><?php echo $infor?></p>
                                    </div>
                                    <?php
                                    
                                    
                                    
                                }
                            }

                            
                            else{
                                ?>
                                <span>No High Priority Assigments at the moment!</span>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>    
    </div>
<?php 
include('./adminPartials/adminFooter.php');
?>