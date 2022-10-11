<?php

/* cause yeah yeah yeah 
meet @amit budhachhetri in 
www.amitbudhachhetri.com.np
*/

session_id('session1');
session_start();
include('../connect.php');
$a = $_POST['sem'];
// query

  //do your write to the database filename and other details   
$sql = "INSERT INTO semester (s_name) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a));
if($q){
      header("location:update_sem.php?success=true");
        }else{
            header("location:update_sem.php?failed=true");
} 

?>