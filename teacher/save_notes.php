<?php

/* cause yeah yeah yeah 
meet @amit budhachhetri in 
www.amitbudhachhetri.com.np
*/

session_id('session2');
session_start();
include('connect.php');
$a = $_POST['sub_id'];
$b = $_POST['sem_id'];
$c = $_POST['url'];
// query


if($a !=null && $b!=null && $c !=null)
  {
    //do your write to the database filename and other details  
    
    $sql = "INSERT INTO notes (sub_id,sem_id,url) VALUES (:a,:b,:c)";
    $q = $db->prepare($sql);
    $q->execute(array(':a'=>$a,':b'=>$b,':c' => $c));
    if($q){
          header("location:upload_notes.php?success=true");
            }
            else
            {
                header("location:upload_notes.php?failed=true");
            } 
}
else
{
  header("location:upload_notes.php?failed=true"); 
}


?>