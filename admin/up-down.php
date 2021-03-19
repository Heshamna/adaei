<?php include("../config.php");?>

<?php include("a_header.php");?>

<div class="container" style="width: 55%;">
    <h1>ادارة المدراء</h1>
    
    <br><br>
    <div class="box" style="  text-align: center; width: 65%; margin:auto;">
        <h3>الترقيه الى مدير</h3>
        <br><br>
        <form action="upgrade.php" method="post">
            <select name="upgrade" class="input-fild">
                <option>اختر اسم الموظف</option>
                <?php
                    $resultset = $conn->query("SELECT * from employee where is_manager=0 order by full_name asc");
                    while($row= $resultset->fetch_assoc()):
                        $full_name=$row['full_name'];
                        $id_employee=$row['id_employee'];
                ?>
                <option value="<?php echo $id_employee ?>" >
                    <?php echo $full_name;?>
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
                    <form action="" method="post">
                        <div class="right-task">
                            <p> <?php echo ucwords($row['full_name']) ?> </p>
                        </div>
                        <div class="left-task">
                            <a href="downgrade.php?id_employee=<?php echo $row['id_employee']?>" class="a-btn">تخفيض</a>   
                    </div>
                    </form>
                </div>
            </div>
            <?php endwhile; ?>
</div>

<?php include("../footer.php");?>
