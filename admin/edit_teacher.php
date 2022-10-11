<?php
    include 'header.php';
    $a = $_GET['id'];
    $data = $con->query("SELECT * FROM teacher where id = $a"); 
    $data = mysqli_fetch_row($data); 
    // echo implode($datas)
?>


        <div class="add-btn">
        <?php if(get("success")):?>
                    <center><div style="margin-top:1em;">
                        <?=App::message("success", "Updated Successfully")?>
                    </div></center>
                <?php endif;?>
        </div>

 
        <div class="tf">

            <form action="update_teacher.php" class="teacher_form" method="post">
                <label for="">Name:</label><br>
                <input type="text" name = "name" value="<?php echo $data['2'];?>"> <br>

                <input type="hidden" name = "id" value="<?php echo $a;?>"> <br>

                <label for="">Address:</label><br>
                <input type="text" name = "address"value="<?php echo $data['3'];?>"> <br>

                <label for="">Email:</label><br>
                <input type="text" name = "email"value="<?php echo $data['1'];?>"> <br>

                <label for="">Username:</label><br>
                <input type="text" name = "username"value="<?php echo $data['4'];?>"> <br>

                <label for="">Password:</label><br>
                <input type="text" name = "password"value="<?php echo $data['5'];?>"> <br>

                <br>

                <input type="Submit" value="Update" class="btn">
            </form>
        </div>

    </section>


</body>

</html>