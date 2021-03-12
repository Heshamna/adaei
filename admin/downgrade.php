<?php   include ("../config.php");

        $upgrade=$_POST['upgrade'];

        $query="update employee set is_manager=1 where full_name='$upgrade'";
        if(mysqli_query($conn,$query)){
            header("Location: up-down.php");
            die;
        }else {
            echo"not upgrade!";
        }
?>