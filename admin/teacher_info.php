<?php
include 'header.php';

?>

<div class="add-btn">
            <a href="add_teacher.php" class="add-teacher-btn">Add Teacher <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </div>

        <div class="table-my">


            <table>
                <thead>
                    <tr>
                        <th>Teacher Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                <?php
            $result = $db->prepare("SELECT * FROM teacher");
                $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){   
                        ?> 
                    <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['address'];?></td>
                <!-- <td><a href="edit_teacher.php?id=<?//=$row['id'] ?>">edit</a></td> -->
                <td><a href="delete_teacher.php?id=<?=$row['id'] ?>">delete</a></td>
            </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </section>


</body>

</html>