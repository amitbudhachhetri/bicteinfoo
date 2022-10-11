<?php	

include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM model_question WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
         header("location:model_questions.php?success=true");
        }
        else
        {
            header("location:model_questions.php?failed=true");
        } 
		
?>