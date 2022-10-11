<?php
 include 'header.php';
?>
        <div class="category-boxes">
            <div class="box-cat">
                <div>
                    <h2>Category Name: Semester</h2>
                </div>
            </div>

            <div class="my-list">
                <ul>

                <?php
            $result = $db->prepare("SELECT * FROM semester");
                $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){   
                        ?> 
                    <tr>
                <li><?php echo $row['s_name'];?></li>
            </tr>
                    <?php } ?>
                </ul>

                
                
            </div>
            <a href="update_sem.php" class="my-btn">Update Semester</a>

    </section>


</body>

</html>