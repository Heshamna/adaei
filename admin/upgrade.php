<?php   include ("../config.php");
    $employee=$_POST['upgrade'];
    $query="UPDATE employee where full_name='$employee' set is_manager=1";
    // $query="SELECT *,concat(full_name) as name FROM employee where is_manager=0 order by concat(full_name) asc ";
    if(mysqli_query($conn, $query)){
        header("refresh:1; url=up-down.php");
        die;
    }else{
        echo "not upgraded!";
    }
?>