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
// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'abc_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/syllabus/'.$file_name_new;
    /* check if the file uploaded successfully */
    if($a !=null && $b!=null && $file_name!=null)
    {

        if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) 
        {
        //do your write to the database filename and other details   
            $sql = "INSERT INTO syllabus (s_name,s_code,s_file) VALUES (:a,:b,:c)";
            $q = $db->prepare($sql);
            $q->execute(array(':a'=>$a,':b'=>$b,':c' =>$file_name_new));
            if($q)
            {
                header("location:update_syllabus.php?success=true");
            }
            else
            {
                header("location:update_syllabus.php?failed=true");
            } 
        }
    
        else
        {
            header("location:update_syllabus.php?failed=true");
        }
    }
    else
    {
        header("location:update_syllabus.php?failed=true");
    }


?>