<?php

include "header.php";
    $a = $_GET['id'];
    
?>

<div class="container">
    <div class="row">
    <div style="margin-top:10em;margin-bottom:8em;color:blue;">
    <center>
    <h1 > Data According to Subject</h1>
    <!-- Model Question -->
    <div align = "left">
        <h1 > Model Question</h1>
        <table border ="1">
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
            $result = $db->prepare("SELECT * FROM model_question WHERE sub_id = $a");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){   
                $a = $row['sem_id'];
                $b = $row['sub_id'];
            ?> 

                <tr>
                <td><?php  $data = $con->query("SELECT s_name FROM semester where id = $a"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                    <td><?php  $data = $con->query("SELECT s_name FROM subject where id = $b"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                    <td><?php echo $row['year'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><a href="uploads/question/<?php echo $row['file'];?>" target =_blank><i class="fa fa-eye" aria-hidden="true" ></i>Question pdf</a></td>
                </tr> <?php } ?>
            </tbody>
        </table>
    </div>


    <!-- presentation -->
    <br>
    <hr>
    <div align = "right">
        <h1 > Presentation</h1>
        <table border ="1" >
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
            $result = $db->prepare("SELECT * FROM model_question WHERE sub_id = $a");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){   
                $a = $row['sem_id'];
                $b = $row['sub_id'];
            ?> 

                <tr>
                <td><?php  $data = $con->query("SELECT s_name FROM semester where id = $a"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                    <td><?php  $data = $con->query("SELECT s_name FROM subject where id = $b"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                    <td><?php echo $row['year'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><a href="uploads/question/<?php echo $row['file'];?>" target =_blank><i class="fa fa-eye" aria-hidden="true" ></i>Question pdf</a></td>
                </tr> <?php } ?>
            </tbody>
        </table>
    </div>
    
    <!-- Notes -->
    <br>
    <hr>
    <div align="left"> 
        <h1 > Notes</h1>
        <table border ="1" >
            <thead>
                <tr>
                    <th>Sem</th>
                    <th>Subject</th>
                    <th>View/Download</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $result = $db->prepare("SELECT * FROM notes WHERE sub_id = $a");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){   
                $a = $row['sem_id'];
                $b = $row['sub_id'];
            ?> 

                <tr>
                <td><?php  $data = $con->query("SELECT s_name FROM semester where id = $a"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                    <td><?php  $data = $con->query("SELECT s_name FROM subject where id = $b"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                    <td><a href="uploads/question/<?php echo $row['file'];?>" target =_blank><i class="fa fa-eye" aria-hidden="true" ></i>Question pdf</a></td>
                </tr> <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Project -->
    <br>
    <hr>
    <div align = "right">
        <h1 > Project</h1>
        <table border ="1" >
            <thead>
                <tr>
                    <th>Sem</th>
                    <th>Subject</th>
                    <th>Title</th>
                    <th>View/Download</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $result = $con->query("SELECT * FROM project WHERE sub_id = $a");
            for($i=0; $row = mysqli_fetch_assoc($result); $i++){   
                $a = $row['sem_id'];
                $b = $row['sub_id'];
            ?> 

                <tr>
                <td><?php  $data = $con->query("SELECT s_name FROM semester where id = $a"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                    <td><?php  $data = $con->query("SELECT s_name FROM subject where id = $b"); $datas = mysqli_fetch_row($data); echo implode($datas)?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><a href="uploads/question/<?php echo $row['file'];?>" target =_blank><i class="fa fa-eye" aria-hidden="true" ></i>Question pdf</a></td>
                </tr> <?php } ?>
            </tbody>
        </table>
    </div>
 </center>
</div>
    </div>
</div>


<?php
include "footer.php";
?>
</body>

</html>