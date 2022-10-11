<?php


include 'connect.php';
// session_id('session2');
// session_start();
// if(!isset($_SESSION['SESS_FIRST_NAME'])){
//     header("location: login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>

<body>
    <section id="sidemenue">
        <div class="logo">
            <img src="assets/img/logo.png" alt="" srcset="">
            <h2>BICTINFOO</h2>
        </div>
        <div class="items">
            <ul>

                <!-- Can hide (optional) this for Students and show for the teachers from permissions -->
                
                <li class="active">
                    <a href="index.php"><i class='fa fa-user'></i>
                        Students</a>
                </li>

                <!-- hide (optional) part end -->

                <li>
                    <a href="model_questions.php"><i class="fa fa-question" aria-hidden="true"></i>
                        Model Questions</a>
                </li>
                

                <li>
                    <a href="presentations.php"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
                        Presentations</a>
                </li>


                <li>
                    <a href="notes.php"><i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                        Notes</a>
                </li>

                <li>
                    <a href="projects.php"><i class="fa fa-tasks" aria-hidden="true"></i>
                        Projects</a>
                </li>

                <li>
                    <a href="category_info.php"><i class='fa fa-folder-open'></i>Category</a>
                </li>
                <!-- <li>
                    <a href="logout.php"><i class='fa fa-power-off'></i>Logout</a>
                </li> -->

                


            </ul>
        </div>
    </section>

    <section id="right-space">
        <div class="top-space">

            <div class="search">
                <i class='fa fa-search'></i> <input type="text">
            </div>

            <div class="user">
                <p>STUDENT</p>
            </div>
        </div>

        <?php
        $result = $db->prepare("SELECT count(*) as total FROM student");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){


               ?>

        <div class="dash-basic">
            <div class="dash-card">
                <h2><?php echo $row['total']; ?> </h2>
                    <?php }?>
                <p>Students</p>
            </div>

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