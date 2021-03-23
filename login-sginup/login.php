<?php session_start();

include("../config.php");
$error="";
$class="";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(!empty($username) && !empty($password))
    {
        $stmt = $conn->prepare("select * from employee where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password && $data['is_manager'] === 0){
                $_SESSION['id_employee']=$data['id_employee'];
                $_SESSION['full_name']=$data['full_name'];
                header('Location:/adaei/employee/task.php');
                die;
                
            }if($data['password'] === $password && $data['is_manager'] === 1){
                $_SESSION['id_employee']=$data['id_employee'];
                $_SESSION['full_name']=$data['full_name'];
                header('Location:/adaei/manager/M_task.php');
                die;
            }
                else{
                    $error= "تاكد من كلمة المرور";
                    $class="error";            }
        }else {
            $error= " تاكد من اسم المستخدم و كلمة المرور";
            $class="error";
        }
    }
}
?>


<?php include("header.php");?>
    <div class="admin-container mid" style="margin-top:10%;">
        <div class="box admin">
            <div class="right-account">
                <h1>مرحبا بك في موقع أدائي</h1>
                <br>
                <h3> تسجيل الدخول للموظف و المدير</h3>
                <br>

                <div class="<?php echo $class?>"><?php echo $error?></div>
                
                <br>
                <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="اسم المستخدم" class="input-fild" required>
                    <br><br>
                    <input type="password" name="password" placeholder="الرمز السري" class="input-fild" required>
                            <br><br>
                    <input type="submit" class="btn" value="تسجيل الدخول" >

                    <p class="msg"> أنشئ حسابك  <a href="signup.php">هنا </a></p>
                </form>
            </div>
            
            <div class="left-account">
                <img src=" " alt="شعار الموقع">
                <br><br>
                <p>----------- مقدمة عن الموقع -----------
                </p>
                <br>
                <a href="about" class="a-btn">للمزيد</a>
                <br><br>
            </div>
<?php include("../footer.php");?>