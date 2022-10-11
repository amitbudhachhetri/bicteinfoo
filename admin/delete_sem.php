<?php	

include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM semester WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
         header("location:sem_details.php?success=true");
        }
        else
        {
            header("location:sem_details.php?failed=true");
        } 
		
?>