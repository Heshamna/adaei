<?php
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
            $stmt = $conn->prepare("select * from admin where username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0) {
                $data = $stmt_result->fetch_assoc();
                if($data['password'] === $password){
    
                    header('Location: ../admin/department.php');
                    die;
                    
                }else{
                $error= "تاكد من كلمة المرور";
                $class="error";
                }
            }else{
                $error="تاكد من اسم المرور او كلمة السر";
                $class="error";
            }
        }
    }
    
?>


<?php include("header.php");?>
    <div class="admin-container mid" style="margin-top:10%; width: 35%;">
        <div class="box admin">
            <div class="login-admin">
                <h1>مرحبا بك في موقع أدائي</h1>
                <br>
                <h3>تسجيل الدخول المسؤل</h3>

                <div class="<?php echo $class?>"><?php echo $error?></div>

                <br>
                <form action="admin_login.php" method="post">
                    <input type="text" name="username" placeholder="اسم المستخدم" class="input-fild" required>
                    <br><br>
                    <input type="password" name="password" placeholder="الرمز السري" class="input-fild" required>
                            <br><br>
                    <input type="submit" class="btn" value="تسجيل الدخول" >
                </form>
            </div>
<?php include("../footer.php");?>