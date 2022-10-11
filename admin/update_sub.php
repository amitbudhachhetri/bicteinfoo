<?php
 include 'header.php';
?>


<div class="category-boxes">
            <div class="box-cat">
                <div>
                <h2>Category Name: Subject</h2>
                </div>
            </div>
            <?php if(get("success")):?>
                    <center><div style="margin-top:1em;">
                        <?=App::message("success", "Added Successfully")?>
                    </div></center>
                <?php endif;?>
            <form action="save_subject.php" method="post">
                <label for="">Subject Name</label>
                <input type="text" name ="name">

                <label for="">Subject Code</label>
                <input type="text" name ="code">

                <label for="">Credit Hours</label>
                <input type="text" name ="c_hrs">
                <input type="submit" value="Add">
            </form>

          
        </div>

    </section>


</body>

</html>