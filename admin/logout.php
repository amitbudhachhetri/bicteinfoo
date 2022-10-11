<?php
/* cause yeah yeah yeah 
meet @amit budhachhetri in 
www.amitbudhachhetri.com.np
*/


session_id("session1");
session_start();
session_destroy();
header("location: login.php");
?>