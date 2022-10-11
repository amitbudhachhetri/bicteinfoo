<?php
 include 'header.php';
?>


<div class="category-boxes">
            <div class="box-cat">
                <div>
                <h2>Category Name: Syllabus (Add)</h2>
                </div>
            </div>
            <?php if(get("success")):?>
                    <center><div style="margin-top:1em;">
                            <?=App::message("success", "Added Successfully")?>
                        </div></center>
                        <?php elseif(get("failed")):?>
                            <center><div style="margin-top:1em;">
                        <?=App::message("failed", "sorry fill up all crendentials")?>
                        </div></center>
                <?php endif;?>
            <form action="save_syllabus.php" method="post" enctype="multipart/form-data">
                <label for="">Subject Name</label>
                <input type="text" name ="name">

                <label for="">Subject Code</label>
                <input type="text" name ="code">

                <label for="">Syllabus</label>
                <input type="file" name = "file">
                <input type="submit" value="Add">
            </form>

          
        </div>

    </section>


</body>

</html>