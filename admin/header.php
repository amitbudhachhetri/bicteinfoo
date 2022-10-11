<?php


include '../connect.php';
session_id('session1');
session_start();
if(!isset($_SESSION['SESS_ADMIN_NAME'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>
    <section id="sidemenue">
        <div class="logo">
            <img src="../assets/img/logo.png" alt="" srcset="">
            <h2>BICTINFOO</h2>
        </div>
        <div class="items">
            <ul>
                <li class="">
                    <a href="index.php"><i class='fa fa-user'></i>Dashboard</a>
                </li>

                <li>
                    <a href="teacher_info.php"><i class='fa fa-edit'></i>Teacher</a>
                </li>

                <li>
                    <a href="syllabus_detail.php"><i class='fa fa-edit'></i>Syllabus</a>
                </li>
                <li>
                    <a href="category_info.php"><i class='fa fa-folder-open'></i>Category</a>
                </li>


                <li>
                    <a href="logout.php"><i class='fa fa-power-off'></i>Logout</a>
                </li>


            </ul>
        </div>
    </section>

    <section id="right-space">
        <div class="top-space">

            <div class="">
                <i class=''></i> 
            </div>

            <div class="user">
                <p>Username (Admin)</p>
            </div>
        </div>

    
        </div>