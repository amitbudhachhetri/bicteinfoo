<?php 


include 'connect.php';
session_start();

/*function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return $str;
	}*/
	
	//Sanitize the POST values
	$login = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	
	
	//Create query
	$qry="SELECT * FROM teacher WHERE username='$login' AND password='$password'";
	$result=mysqli_query($con,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_id('session2');
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['email'];
			// $_SESSION['SESS_PRO_PIC'] = $member['file'];
			session_write_close();
			header("location: index.php");
			exit();
		}else {
			
            echo '<script language = "javascript">';
            // echo "window.location.href='login.php'"; 
            echo "alert('Something went wrong, Enter correct details');window.location.href='login.php'";
            echo '</script>';
                exit;
            // echo "<script language = 'javascript'> alert('Wrong Details');'</script>";
            }
	}else {
		die("Query failed");
	}
?>