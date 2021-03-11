<?php
    include("../config.php");

    $error="";
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
                }
            }else{
                $error= " تاكد من اسم المستخدم و كلمة المرور";
            }
        }
    }
    
?>


<?php include("header.php");?>
            <div class="login-admin">
                <h1>مرحبا بك في موقع أدائي</h1>
                <br>
                <h3>تسجيل الدخول المسؤل</h3>

                <div style="background-color: red;"><?php echo $error?></div>

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