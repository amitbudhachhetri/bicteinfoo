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
                    </tr>
                </thead>
                <tbody>


                <?php
				$result = $db->prepare("SELECT * FROM notes");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
                ?> 

                    <tr>
                        <td><?php echo $row['n_link'];?></td>
                        <td><?php echo $row['s_name'];?></td>
                        <td><a href="<?php echo $row['url'];?>">Get Notes</a></td>
                         </a></td>
                    </tr> <?php } ?>

                </tbody>
            </table>

        </div>
    </section>


</body>

</html>