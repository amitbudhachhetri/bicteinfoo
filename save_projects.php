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
$c = $_POST['title'];
$d = $_POST['deadline'];
// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'abc_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/project/'.$file_name_new;
    /* check if the file uploaded successfully */
if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) 
{
  //do your write to the database filename and other details   
    $sql = "INSERT INTO project (s_name,semester,title,deadline,file) VALUES (:a,:b,:c,:d,:e)";
    $q = $db->prepare($sql);
    $q->execute(array(':a'=>$a,':b'=>$b,':c' => $c,':d'=>$d,':e'=>$file_name_new));
    if($q)
    {
        header("location:upload_projects.php?success=true");
    }
    else
    {
        header("location:upload_projects.php?failed=true");
    } 
}
else
{
    echo " It cames to the else part";
}

?>