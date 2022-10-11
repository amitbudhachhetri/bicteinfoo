<?php

/* cause yeah yeah yeah 
meet @amit budhachhetri in 
www.amitbudhachhetri.com.np
*/

session_id('session2');
session_start();
include('connect.php');
$a = $_POST['name'];
$b = $_POST['semester'];
$c = $_POST['url'];
// query

// $file_name  = strtolower($_FILES['file']['name']);
// $file_ext = substr($file_name, strrpos($file_name, '.'));
// $prefix = 'church_'.md5(time()*rand(1, 9999));
// $file_name_new = $prefix.$file_ext;
// $path = '../uploads/slider/'.$file_name_new;
//     /* check if the file uploaded successfully */
//     if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
$sql = "INSERT INTO notes (s_name,n_link,url) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c' => $c));
if($q){
      header("location:upload_notes.php?success=true");
        }else{
            header("location:upload_notes.php?failed=true");
} 

?>