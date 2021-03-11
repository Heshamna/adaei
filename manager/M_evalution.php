<?php include("m_header.php");?>

            <div class="container mid">
                <div class="evalution add">
                    <h2>اسم المهمة اللتي سوف تقيم</h2>
                    <br>
                    <form action="" method="POST">
                        <label for=""> :المعيار الاول</label>
                        <input type="text" name="e1" class="input-fild" placeholder="0 ~ 5">
                        <label for="e2">:المعيار الثاني</label>
                        <input type="text" name="e2" class="input-fild" placeholder="0 ~ 5">
                        <label for="e3">:المعيار الثالث</label>
                        <input type="text" name="e3" class="input-fild" placeholder="0 ~ 5">
                        <label for="e4">:المعيار الرابع</label>
                        <input type="text" name="e4" class="input-fild" placeholder="0 ~ 5">
                        <label for="e5">:المعيار الخامس</label>
                        <input type="text" name="e5" class="input-fild" placeholder="0 ~ 5">

                        <input type="submit" class="btn eva-btn" value="تقيم">
                    </form>
                </div>
            </div>
<?php include("../footer.php");?>
