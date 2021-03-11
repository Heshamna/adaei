<?php include("../config.php");?>

<?php include("a_header.php");?>

<div class="container" style="width: 55%;">
    <h1>ادارة المدراء</h1>
    
    <br><br>
    <div class="box" style="  text-align: center; width: 65%; margin:auto;">
        <h3>الترقيه الى مدير</h3>
        <br><br>
        <form action="upgrade.php" method="post">
            
            <select name="upgrade" class="input-fild" id="">
                <option>اختر اسم الموظف</option>
                <?php
                    $managers = $conn->query("SELECT *,concat(full_name) as name FROM employee 
                    where is_manager=0 order by concat(full_name) asc ");

                    while($row= $managers->fetch_assoc()):
                ?>
                <option value="<?php echo ucwords($row['id_employee']) ?>">
                    <?php echo ucwords($row['full_name']) ?>
                </option>

                <?php endwhile; ?>
            </select>            
        <br><br>
            <input type="submit" class="btn" value="ترقية">
        </form>
    </div>
    <br><br>

        <?php
            $managers = $conn->query("SELECT *,concat(full_name) as name FROM employee 
                                      where is_manager=1 order by concat(full_name) asc ");
            
            while($row= $managers->fetch_assoc()):
        ?>
            <div class="box">
                <div class="task">
                    <div class="right-task">
                        <p> <?php echo ucwords($row['full_name']) ?> </p>
                    </div>
                    <div class="left-task">
                        <input type="submit" class="btn" value="الغاء الترقية">
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

</div>

<?php include("../footer.php");?>
