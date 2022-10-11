<?php

include "header.php";
?>


<!-- Hide this for students i.e. non teacher users -->

<div class="add-btn">
            <a href="upload_projects.php" class="add-teacher-btn">Add Projects <i class="fa fa-plus"
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
                        <th>Deadline</th>
                        <th>Title</th>
                        <th>View Project</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                <?php
				$result = $db->prepare("SELECT * FROM project");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
                ?> 

                    <tr>
                        <td><?php echo $row['sem_id'];?></td>
                        <td><?php echo $row['sub_id'];?></td>
                        <td><?php echo $row['deadline'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><a href="uploads/project/<?php echo $row['file'];?>"><i class="fa fa-eye" aria-hidden="true"></i>Model </a></td>
                        <td><a href="delete_project.php?id=<?=$row['id'] ?>">Delete</td>
                    </tr> <?php } ?>

                </tbody>
            </table>

        </div>
    </section>


</body>

</html>