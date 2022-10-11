<?php

include "header.php";
?>


        <!-- Hide this for students i.e. non teacher users -->

        <div class="add-btn">
            <a href="upload_questions.php" class="add-teacher-btn">Add Model Questions <i class="fa fa-plus"
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
                        <th>year</th>
                        <th>Title</th>
                        <th>View/Download</th>
                    </tr>
                </thead>
                <tbody>

                <?php
				$result = $db->prepare("SELECT * FROM model_question");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
                ?> 

                    <tr>
                        <td><?php echo $row['semester'];?></td>
                        <td><?php echo $row['s_name'];?></td>
                        <td><?php echo $row['year'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><a href="uploads/question/<?php echo $row['file'];?>"><i class="fa fa-eye" aria-hidden="true"></i>Model
                            </a></td>
                    </tr> <?php } ?>
                </tbody>
            </table>

        </div>
    </section>


</body>

</html>