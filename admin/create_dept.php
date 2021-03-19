<?PHP include ("../config.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
$name = $_POST['name'];
$manager_id = implode(', ', $_POST['manager_id']);
$user_ids = implode(', ', $_POST['employee_ids']);


$query="INSERT INTO department (name, manager_id, user_ids)VALUES ('$name', '$manager_id', '$user_ids')";
if(mysqli_query($conn,$query)){
        header("Location: department.php");
        
        }else {
        echo"not created!";
        }
}
?>
