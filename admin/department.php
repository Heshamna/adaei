<?php if(!isset($conn)){ include '../config.php'; } ?>

<?php include("a_header.php");?>

<div class="container" style="width: 70%;">
    <h1>ادارة الاقسام</h1>
    <br>
    <div class="box" style="  text-align: center; width: 65%; margin:auto;">
        <h3>انشاء قسم</h3>

        <br>
        <form action="create_dept.php" method="post">
            <input type="text" class="input-fild" name="name" placeholder="اسم القسم" required>     
            <br><br>
            <select name="manager_id" class="input-fild" required>
            <option>اختر اسم المدير</option>
                <?php 
                $managers = $conn->query("SELECT *,concat(full_name) as name FROM employee where is_manager = 1 order by concat(full_name) asc ");
                while($row= $managers->fetch_assoc()):?>

                <option value="<?php echo $row['id_employee'] ?>"
                 <?php echo isset($manager_id) && $manager_id == $row['id_employee'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
                <?php endwhile; ?>

            </select>

            <br><br>
            <select name="user_ids" class="input-fild select2"  required>
                <option>اختر اسم الموظف</option>
                <?php 
              	$employees = $conn->query("SELECT *,concat(full_name) as name FROM employee where is_manager = 0 order by concat(full_name) asc ");
              	while($row= $employees->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['id_employee'] ?>"
                   <?php echo isset($user_ids) && in_array($row['id_employee'],explode(',',$user_ids)) ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
              	<?php endwhile; ?>
    
            </select>
            <br><br>
            <input type="submit" class="btn" value="إنشاء">
           
        </form>
    </div>
    <br><br>

    <?php
        $department=$conn->query("SELECT * FROM `department` ORDER BY `department`.`id_department` ASC");
        while($row=$department->fetch_assoc()):?>
    <div class="box">
        <div class="task">
            <div class="right-task">
            <?php echo ucwords($row['name']); ?>
            </div>

            <div class="left-task">
            <input type="submit" class="btn" value="حذف القسم">
            </div>
        </div>
    </div>
    <?php endwhile;?>

</div>
<?php include("../footer.php");?>