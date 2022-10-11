<?php

include "header.php";

$current_session_id = session_id();

?>
<?php
        $result = $db->prepare("SELECT count(*) as total FROM student");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){


               ?>

        <div class="dash-basic">
            <!-- <div class="dash-card">
                <h2><?php echo $row['total']; ?> </h2>
                    <?php }?>
                <p>Students</p>
            </div> -->

            <?php
        $result = $db->prepare("SELECT count(*) as total FROM teacher");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){


               ?>
            <div class="dash-card">
                <h2><?php echo $row['total']; ?> </h2>
                <?php }?>
                <p>Teachers</p>
            </div>

            <div class="dash-card">
                <h2>3</h2>
                <p>Categories</p>
            </div>
            
        </div>

<div class="table-my">
<script>
  $(document).ready(function(){
    $(".select2").select2();
  });

</script>
<div>

           <center> <h1 style="margin-top:8em; color:blue;"><b> Welcome To Teacher Dashboard</b></h1></center>
</div>
<!-- <table>
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
</table> -->

</div>
</section>


</body>

</html>