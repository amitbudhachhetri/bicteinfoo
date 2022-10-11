<?php	

include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM notes WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
         header("location:notes.php?success=true");
        }
        else
        {
            header("location:notes.php?failed=true");
        } 
		
?>