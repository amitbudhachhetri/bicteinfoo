<?php	

include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM subject WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
         header("location:subject_detail.php?success=true");
        }
        else
        {
            header("location:subject_detail.php?failed=true");
        } 
		
?>