<?php if(!isset($conn)){ include '../config.php'; } ?>

<?php include("a_header.php");?>
<style>

</style>
<div class="container" style="width: 70%;">
    <h1>ادارة الاقسام</h1>
    <br>
    <div class="box" style="  text-align: center; width: 65%; margin:auto;">
        <h3>انشاء قسم</h3>

        <br>
        <form action="create_dept.php" method="post">
            <input type="text" class="input-fild" name="name" placeholder="اسم القسم" required>     
            <br><br>
            <select name="manager_id[]" class="input-fild multiple-select">
                <option disabled selected>اختر اسم المدير</option>
                <?php
                    $query="select * from employee where is_manager=1";
                    $query_run=mysqli_query($conn,$query);
                    if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $row){
                            ?>
                            <option value="<?php echo $row['id_employee']?>">
                                <?php echo $row['full_name'];?>
                            </option>
                            <?php
                        }
                    }else{
                        echo"no record found";
                    }
                ?>
            </select>

            <br><br>
            <select name="employee_ids[]" class="input-fild multiple-select2"  multiple>
                <?php
                    $query="select * from employee where is_manager=0";
                    $query_run=mysqli_query($conn,$query);
                    if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $row){
                            ?>
                            <option value="<?php echo $row['id_employee']?>">
                                <?php echo $row['full_name'];?>
                            </option>
                            <?php
                        }
                    }else{
                        echo"no record found";
                    }
                ?>    
            </select>
            <br><br>

            <input type="submit" class="btn" value="إنشاء">
        </form>
    </div>
    <br><br>
    

    <?php
        $department=$conn->query("SELECT * FROM `department` ORDER BY `department`.`id_department` DESC");
        while($row=$department->fetch_assoc()):?>
        <div class="box">
            <div class="task">
                <div class="right-task">
                <?php echo $row['name']; ?><br>
                <?php echo $row['id_department']; ?><br>

                </div>

                <div class="left-task">
                <a href="delete_dept.php?id_department= <?php echo $row['id_department']?>" class="a-btn" onclick="return  confirm('هل تريد حذف القسم؟')">حذف</a>
                </div>
            </div>
        </div>
    <?php endwhile;?>

</div>

<?php include("../footer.php");?>

<script>
        $(document).ready(function(){
            $(".multiple-select").select2({
                    placeholder: "اختر المدراء", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>
    
    <script>
        $(document).ready(function(){
            $(".multiple-select2").select2({
                    placeholder: "اختر الموظفين", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>