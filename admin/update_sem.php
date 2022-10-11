<?php
 include 'header.php';
?>


<div class="category-boxes">
            <div class="box-cat">
                <div>
                <h2>Category Name: Semester</h2>
                </div>
            </div>
            <?php if(get("success")):?>
                    <center><div style="margin-top:1em;">
                        <?=App::message("success", "Added Successfully")?>
                    </div></center>
                <?php endif;?>
            <form action="save_sem.php" method="post">
                <label for="">Sem Name</label>
                <input type="text" name="sem">
                <input type="submit" value="Add">
            </form>

          
        </div>

    </section>


</body>

</html>