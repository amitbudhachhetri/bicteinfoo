<?php

include "header.php";

?>


<!-- Hide this for students i.e. non teacher users -->


<div class="add-btn">
            <a href="upload_notes.php" class="add-teacher-btn">Add Notes <i class="fa fa-plus"
                    aria-hidden="true"></i>
            </a>
        </div>

        <!-- End Hide -->
        
        <div class="table-my">


            <table>
                <thead>
                    <tr>
                        <th>Sem</th>
                        <th>Subject</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                <?php
				$result = $db->prepare("SELECT * FROM notes");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
                ?> 

                    <tr>
                        <td><?php echo $row['sem_id'];?></td>
                        <td><?php echo $row['sub_id'];?></td>
                        <td><a href="<?php echo $row['url'];?>">Get Notes</a></td>
                        <td><a href="delete_notes.php?id=<?=$row['id'] ?>">Delete</td>
                         </a></td>
                    </tr> <?php } ?>

                </tbody>
            </table>

        </div>
    </section>


</body>

</html>