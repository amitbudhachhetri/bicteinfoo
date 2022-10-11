<?php

include "header.php";
?>



<div class="add-btn">
            <a href="model_questions.php" class="add-teacher-btn">Back <i class="fa fa-arrow-left" aria-hidden="true"></i>

            </a>
        </div>

        <?php if(get("success")):?>
                    <center><div style="margin-top:1em;">
                        <?=App::message("success", "Added Successfully")?>
                    </div></center>
                <?php endif;?>

        <div class="vertical-form">
            <form action="save_presentation.php" method="post" enctype="multipart/form-data">
                <label for="">Subject Name</label>
                <input type="text" name ="name">

                <label for="">Semester</label>
                <input type="text" name ="semester">
 
                <label for="">Topic</label>
                <input type="text" name ="topic">

                <label for="">Presentation</label>
                <input type="file" name ="file">
                <input type="submit" value="Add" class="my-btn">
            </form>
        </div>

        </div>
    </section>


</body>

</html>