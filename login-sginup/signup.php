<?PHP include("../config.php");
$errors = array();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$username = $_POST['username'];
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if(empty($username )){
        array_push($errors,"تاكد من اسم المستخدم ");
      }  if(empty($password_1)){
        array_push($errors,"تاكد من كلمة المرور");
      } if(($password_1 !== $password_2)){
        array_push($errors,"تاكد من صحة اعادة ادخال كلمة المرور");
      } if(empty($full_name)){
        array_push($errors,"تاكد من الاسم الكامل");
      }if(empty($email)){
        array_push($errors,"تاكد من صحة الايميل");
      }
      if(count($errors) == 0 ){
        $password = md5($password_1);
        $stmt = $conn->prepare("insert into employee(username, full_name, email, password) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $full_name, $email, $password);
        $execval = $stmt->execute();
        echo $execval;
        $stmt->close();
        $conn->close();
        header('Location: login.php');
    }
}

?>


<?php include("header.php");?>
<div class="admin-container mid" style="margin-top:10%;">
    <div class="box admin">
        <div class="right-account">
            <h1>مرحبا بك في موقع أدائي</h1>
            <h3>إنشاء حساب </h3>
            <br><br>
            <form action="signup.php" method="post" enctype="multipart/form-data">
            <?php include("errors.php");?>
                <input type="text" name="username" placeholder="اسم المستخدم" class="input-fild" required>
                <br><br>
        
                <input type="password" name="password_1" placeholder="الرمز السري" class="input-fild" required>
                <br><br>
        
                <input type="password" name="password_2" placeholder="تأكيد الرمز السري" class="input-fild" required>
                <br><br>
        
                <input type="text" name="full_name" placeholder=" الاسم الكامل" class="input-fild" required>
                <br><br>
        
                <input type="email" name="email" placeholder="البريد الألكتروني" class="input-fild" required>
                <br><br>
        
                <input type="submit" class="btn" value="تسجيل">
        
                <p class="msg"> للدخول <a href="login.php">هنا </a></p>
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
