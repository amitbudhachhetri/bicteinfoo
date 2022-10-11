<?php


include 'connect.php';
session_id('session2');
session_start();
if(!isset($_SESSION['SESS_FIRST_NAME'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="../assets/plugins/select2/select2.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>

<body>
    <section id="sidemenue">
        <div class="logo">
            <img src="../assets/img/logo.png" alt="" srcset="">
            <h2>BICTINFOO</h2>
        </div>
        <div class="items">
            <ul>

                <!-- Can hide (optional) this for Students and show for the teachers from permissions -->
                
                <li class>
                    <a href="index.php"><i class='fa fa-user'aria-hidden="true"></i>
                        Dashboard</a>
                </li>

                
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
                    <a href="logout.php"><i class='fa fa-power-off'></i>Logout</a>
                </li>

                


            </ul>
        </div>
    </section>

    <section id="right-space">
        <div class="top-space">

            <div class="search">
                <i class></i> 
            </div>

            <div class="user">
                <p>Username (Teacher)</p>
            </div>
        </div>

        
        
        