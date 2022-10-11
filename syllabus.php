<?php

include "header.php";

?>


<div style="margin-top:10em;margin-bottom:8em;color:blue;">
        <center>
        <h1 >Syllabus</h1>
    <table border ="1">
        <thead>
            <tr>
                <th>Subject name</th>
                <th>Subject code</th>
                <th>View/Download</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $result = $db->prepare("SELECT * FROM syllabus");
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){   
            // $a = $row['sem_id'];
            // $b = $row['sub_id'];
        ?> 

            <tr>
                <td><?php echo $row['s_name'];?></td>
                <td><?php echo $row['s_code'];?></td>
                <td><a href="uploads/presentation/<?php echo $row['file'];?>" target =_blank><i class="fa fa-eye" aria-hidden="true" ></i>Click Me</a></td>
            </tr> <?php } ?>
        </tbody>
    </table>
 </center>
</div>


<?php
include "footer.php";
?>
</body>

</html>