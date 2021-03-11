
<?PHP
include("../config.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$username = $_POST['username'];
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

    if(!empty($username) && !empty($password) && !empty($full_name) && !empty($email) )
    {
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

<div class="right-account">
                <h1>مرحبا بك في موقع أدائي</h1>
                <h3>إنشاء حساب </h3>
                <br><br>
                <form action="signup.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="username" placeholder="اسم المستخدم" class="input-fild" required>
                    <br><br>
            
                    <input type="password" name="password" placeholder="الرمز السري" class="input-fild" required>
                    <br><br>
            
                    <input type="password" name="password" placeholder="تأكيد الرمز السري" class="input-fild" required>
                    <br><br>
            
                    <input type="text" name="full_name" placeholder=" الاسم الكامل" class="input-fild" required>
                    <br><br>
            
                    <input type="email" name="email" placeholder="البريد الألكتروني" class="input-fild" required>
                    <br><br>
            
                    <input type="submit" class="btn" value="تسجيل">
            
                    <p class="msg"> ليس لديك حساب؟ <a href="login.php">هنا </a></p>
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
