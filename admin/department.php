<?php include("../config.php");?>

<?php include("a_header.php");?>

<div class="container" style="width: 55%;">
    <h1>ادارة الاقسام</h1>
    <br>
    <div class="box" style="  text-align: center; width: 65%; margin:auto;">
        <h3>انشاء قسم</h3>
        <br>
        <form action="" method="post">
            <input type="text" class="input-fild" name="name" placeholder="اسم القسم" required>
            <br><br>

            <select name="" class="input-fild" required>
                <option value="">اسماء المدراء</option>                    
                <option value="">فواز الحربي</option>
                <option value="">محمد المقرن</option>
            </select>
            <br><br>
            <select name="" class="input-fild" required>
                <option value="">اسماء الموظفين</option>
                <option value="">محمد العتيبي</option>
                <option value="">هشام ناجي</option>
            </select>
            <br><br>
            <input type="submit" class="btn" value="انشاء">
        </form>
    </div>

    <br>
    <div class="box">
        <div class="task">
            <div class="right-task">
                <p>اسم القسم</p>
            </div>
            <div class="left-task">
                <input type="submit" class="btn" value="حذف">
            </div>
        </div>
    </div>
    <div class="box">
        <div class="task">
            <div class="right-task">
                <p>اسم القسم</p>
            </div>
            <div class="left-task">
                <input type="submit" class="btn" value="حذف">
            </div>
        </div>
    </div>
    
    <div class="box">
        <div class="task">
            <div class="right-task">
                <p>اسم القسم</p>
            </div>
            <div class="left-task">
                <input type="submit" class="btn" value="حذف">
            </div>
        </div>
    </div>
    <div class="box">
        <div class="task">
            <div class="right-task">
                <p>اسم القسم</p>
            </div>
            <div class="left-task">
                <input type="submit" class="btn" value="حذف">
            </div>
        </div>
    </div>
    <div class="box">
        <div class="task">
            <div class="right-task">
                <p>اسم القسم</p>
            </div>
            <div class="left-task">
                <input type="submit" class="btn" value="حذف">
            </div>
        </div>
    </div>
    <div class="box">
        <div class="task">
            <div class="right-task">
                <p>اسم القسم</p>
            </div>
            <div class="left-task">
                <input type="submit" class="btn" value="حذف">
            </div>
        </div>
    </div>

</div>
<?php include("../footer.php");?>
