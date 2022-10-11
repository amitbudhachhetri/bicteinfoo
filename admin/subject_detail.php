<?php
 include 'header.php';
?>


<div class="category-boxes">
            <div class="box-cat">
                <div>
                <h2>Category Name: Subjects</h2>
                </div>
            </div>

            <div class="my-list">
                <ul>


                <?php
            $result = $db->prepare("SELECT * FROM subject");
                $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){   
                        ?> 
                    <li>
                        <b>Subject Name:<?php echo $row['s_name'];?></b><br>
                        <b>Subject Code:<?php echo $row['s_code'];?></b><br>
                        <b>Credit Hours:<?php echo $row['s_c_hour'];?></b><br>
                        <a href="delete_sub.php?id=<?php echo $row['id'];?>" class="">delete</a>
                    </li>
                    <?php } ?>
                </ul>

                   
                </ul>
            </div>


            <a href="update_sub.php" class="my-btn">Update Subjects</a>

          
        </div>

    </section>


</body>

</html>