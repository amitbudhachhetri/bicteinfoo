<?php
 include 'header.php';
?>


<div class="category-boxes">
            <div class="box-cat">
                <div>
                <h2>Category Name: Syllabus</h2>
                </div>
            </div>

            <div class="my-list">
                <ul>


                <?php
            $result = $db->prepare("SELECT * FROM syllabus");
                $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){   
                        ?> 

                        <li>
                        <b>Subject Name:</b><?php echo $row['s_name'];?> <br>
                        <b>Subject Code:</b> <?php echo $row['s_code'];?><br>
                        <b>Syllabus</b>  <a href="../uploads/syllabus/<?php echo $row['s_file'];?>">View</a> <br>
                        <!-- <a target="_blank" href="edit_syllabus.php" class="red">Delete</a> -->
                    </li>
                    <?php } ?>

                </ul>
            </div>


            <a href="update_syllabus.php" class="my-btn">Add Syllabus</a>

          
        </div>

    </section>


</body>

</html>