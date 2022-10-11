
<?php

include "header.php";
?>



<div class="add-btn">
            <a href="notes.php" class="add-teacher-btn">Back <i class="fa fa-arrow-left" aria-hidden="true"></i>

            </a>
        </div>
        <?php if(get("success")):?>
                    <center><div style="margin-top:1em;">
                        <?=App::message("success", "Added Successfully")?>
                    </div></center>
        <?php endif;?>
        <div class="vertical-form">
            <form action="save_notes.php" method="post">
                <label for="">Subject Name</label>
                <input type="text" name ="name">

                <label for="">Semester</label>
                <input type="text" name ="semester">

                <label for="">Note Link</label>
                <input type="URL" name="url">
                <input type="submit" value="Add" class="my-btn">
            </form>
        </div>

        </div>
    </section>


</body>

</html>