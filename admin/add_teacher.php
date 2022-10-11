<?php
    include 'header.php';

?>


        <div class="add-btn">
        <?php if(get("success")):?>
                    <center><div style="margin-top:1em;">
                        <?=App::message("success", "Added Successfully")?>
                    </div></center>
                <?php endif;?>
        </div>


        <div class="tf">

            <form action="save_teacher.php" class="teacher_form" method="post">
                <label for="">Name:</label><br>
                <input type="text" name = "name"> <br>

                <label for="">Address:</label><br>
                <input type="text" name = "address"> <br>

                <label for="">Email:</label><br>
                <input type="text" name = "email"> <br>

                <label for="">Username:</label><br>
                <input type="text" name = "username"> <br>

                <label for="">Password:</label><br>
                <input type="password" name = "password"> <br>

                <br>

                <input type="Submit" value="Create" class="btn">
            </form>
        </div>

    </section>


</body>

</html>