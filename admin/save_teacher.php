<?php

/* cause yeah yeah yeah 
meet @amit budhachhetri in 
www.amitbudhachhetri.com.np
*/

session_id('session1');
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['username'];
$d = $_POST['email'];
$e = $_POST['password'];
// query

  //do your write to the database filename and other details   
$sql = "INSERT INTO teacher (name,address,username,email,password) VALUES (:a,:b,:c ,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c' => $c,':d'=>$d,':e'=>$e));
if($q){
      header("location:add_teacher.php?success=true");
        }else{
            header("location:add_teacher.php?failed=true");
} 

?>