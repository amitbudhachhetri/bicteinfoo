<?php

/* cause yeah yeah yeah 
meet @amit budhachhetri in 
www.amitbudhachhetri.com.np
*/

session_id('session1');
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['code'];
$c = $_POST['c_hrs'];
// query
if($a !=null && $b!=null && $c !=null)
  {

      //do your write to the database filename and other details   
    $sql = "INSERT INTO subject (s_name,s_code,s_c_hour) VALUES (:a,:b,:c)";
    $q = $db->prepare($sql);
    $q->execute(array(':a'=>$a,':b'=>$b,':c' => $c));
    if($q){
          header("location:update_sub.php?success=true");
            }else{
                header("location:update_sub.php?failed=true");
    } 
  }
  else
  {
    header("location:update_sub.php?failed=true"); 
  }
?>