<?php include("m_header.php");?>
            <div class="container add-contianer">
                <div class="add">
                    <form action="" method="POST">
                        <select name="" class="input-fild">
                            <option value="">اسم الموظف</option>
                            <option value=""> احمد</option>
                            <option value="">خالد</option>
                            <option value="">محمد</option>
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
