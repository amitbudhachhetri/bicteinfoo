<?php

include "connect.php";
    session_id('session2');
	session_start();
	if(isset($_SESSION['SESS_FIRST_NAME'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/admin_style.css">
</head>
<body style="background: yellow;">

<nav>
    Welcome to the BICTEINFOO Portal
</nav>


<section id="admin-form" style="background: lightblue">

    <div class="a-form-box">
        <form action="process_login.php" method="post">
            
            <label for="">Username</label>
            <input type="text" class="user" name="username"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
									
            <br>

            <label for="">Password</label>
            <input type="password" class="lock"  name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
									
            <br>
            <input type="submit" value="Login to Teacher admin Area">

            <p style="padding-top: 24px;">No account?
                <a href="register.html">Register</a>
            </p>
        </form>
    </div>
</section>
    
</body>
</html>
