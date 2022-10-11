<?php	

include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM teacher WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
         header("location:teacher_info.php?success=true");
        }
        else
        {
            header("location:teacher_info.php?failed=true");
        } 
		
?>