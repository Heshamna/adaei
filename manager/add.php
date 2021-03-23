<?php include("../config.php"); 
include("m_header.php");
?>
            <div class="container add-contianer">
                <div class="add">
                    <form action="" method="POST">
                        <select name="" class="input-fild">
                            <option disabled selected>--اختر اسم الموظف--</option>
                            <?php 
                                $id=$_SESSION['id_employee'];
                                $data=mysqli_query($conn, "SELECT * from department where manager_id='$id'");
                                foreach($data as $row){
                                    $arr=explode(", ",$row['user_ids']);
                                }
                                foreach($arr as $id_employee){
                                    $result=$conn->query("SELECT * from employee where id_employee='$id_employee'");
                                    
                                    while($row=$result->fetch_assoc()):?>
                                        <option value="<?php echo $row["id_employee"];?>"><?php echo $row['full_name'];?></option>
                                    <?php endwhile;
                                }?>
                        </select>
                        <br><br>

                        <input type="text" name="" class="input-fild" placeholder="أسم المهمة " required>
                        <br><br>

                        <input type="number" name="" class="input-fild" min="1" max="10" placeholder="عدد النقاط">
                        <br><br>

                        <p class="center">: وقت بداية المهمة</p>
                        <input type="date" class="input-fild" name="" id="">
                        <br><br>
                        <p>: وقت نهاية المهمة</p>
                        <input type="datetime-local" class="input-fild" name="" id="">
                        <br><br>

                        <textarea name="" class="input-fild " cols="30" rows="10" placeholder="وصف المهمه"></textarea>
                        <br><br>

                        <input type="submit" class="btn" value="إرسال المهمة">
                    </form>
                </div>
            </div>
<?php include("../footer.php");?>
