<?PHP include ("../config.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$name = $_POST['name'];
	$manager_id = $_POST['manager_id'];
	$user_ids = $_POST['user_ids'];
	
    
        $stmt = $conn->prepare("insert into department(name, manager_id, user_ids ) values( ?, ?, ?)");
        $stmt->bind_param("sis", $name, $manager_id, $user_ids );
        $execval = $stmt->execute();
        echo $execval;
        $stmt->close();
        $conn->close();   
        header("Location: department.php");
}?>