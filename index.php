<?php

include "header.php";

// $current_session_id = session_id();

?>


<div class="table-my">


<table>
    <thead>
        <tr>
            <th>Students Name</th>
            <th>Semester</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody> <?php
            $result = $db->prepare("SELECT * FROM student");
                $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){   
                        ?> 
                    <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['sem'];?></td>
                <td><?php echo $row['email'];?></td>
            </tr>
                    <?php } ?>
                </tbody>
</table>

</div>
</section>


</body>

</html>