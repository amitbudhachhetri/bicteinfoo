<?php

/* cause yeah yeah yeah 
@amit budhachhetri in 
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
$i = $_POST['id'];
// query

// echo $a,$b,$c,$d,$e;
// echo $i;
  //do your write to the database filename and other details   
$sql = "UPDATE teacher Set name=?,address=?,username=?,email=?,password=? WHERE id = ?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$i));
if($q){
      header("location:teacher_info.php?success=true");
        }else{
            header("location:teacher_info.php?failed=true");
} 

?>