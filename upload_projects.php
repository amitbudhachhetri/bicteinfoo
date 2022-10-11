<?php

include "header.php";
?>



<div class="add-btn">
            <a href="projects.php" class="add-teacher-btn">Back <i class="fa fa-arrow-left" aria-hidden="true"></i>

            </a>
        </div>

        <div class="vertical-form">
            <form action="save_projects.php" method="post" enctype="multipart/form-data">
                <label for="">Subject Name</label>
                <input type="text" name="name">

                <label for="">Semester</label>
                <input type="text" name="semester">

                <label for="">Title</label>
                <input type="text" name="title">


                <label for="">Deadline</label>
                <input type="datetime" name ="deadline">

                <label for="">Presentation</label>
                <input type="file" name = "file">

                <input type="submit" value="Add" class="my-btn">
            </form>
        </div>

        </div>
    </section>


</body>

</html>