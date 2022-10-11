
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
                    <?php elseif(get("failed")):?>
                            <center><div style="margin-top:1em;">
                        <?=App::message("failed", "sorry fill up all crendentials")?>
                        </div></center>
        <?php endif;?>
        <div class="vertical-form">
            <form action="save_notes.php" method="post">
            <label for="">Subject Name</label>
                <select name="sub_id" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Subject" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <?php
                     $result = $db->prepare("SELECT * FROM subject");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['s_name']; ?></option>
                    <?php } ?>
                </select>

                <label for="">Semester</label>
                <select name="sem_id" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Subject" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <?php
                     $result = $db->prepare("SELECT * FROM semester");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['s_name']; ?></option>
                    <?php } ?>
                </select>

                <label for="">Note Link</label>
                <input type="URL" name="url">
                <input type="submit" value="Add" class="my-btn">
            </form>
        </div>

        </div>
    </section>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/select2/select2.full.min.js"></script>
    <script>
    $(document).ready(function(){
        $(".select2").select2();
    });

    </script>
</body>

</html>