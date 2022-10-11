<?php

include "header.php";

?>


<div style="margin-top:10em;margin-bottom:8em;color:blue;">
        <center>
        <h1 >Project</h1>
    <table border ="1">
        <thead>
            <tr>
                <th>Sem</th>
                <th>Subject</th>
                <th>Title</th>
                <th>View/Download</th>
            </tr>
        </thead> <br
 <br
 <br
 <br
 <br
        <tbody>

        <?php
        $result = $db->prepare("SELECT * FROM project");
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){   
            $a = $row['sem_id'];
            $b = $row['sub_id'];
        ?> 

            <tr>
            <td><?php  $data = $con->query("SELECT s_name FROM semester where id = $a"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                <td><?php  $data = $con->query("SELECT s_name FROM subject where id = $b"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                <td><?php echo $row['title'];?></td>
                <td><a href="uploads/question/<?php echo $row['file'];?>" target =_blank><i class="fa fa-eye" aria-hidden="true" ></i>Click me</a></td>
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