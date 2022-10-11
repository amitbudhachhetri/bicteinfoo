<?php	

include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM presentation WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
         header("location:presentations.php?success=true");
        }
        else
        {
            header("location:presentations.php?failed=true");
        } 
		
?>