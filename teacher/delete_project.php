<?php	

include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM project WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
         header("location:projects.php?success=true");
        }
        else
        {
            header("location:projects.php?failed=true");
        } 
		
?>