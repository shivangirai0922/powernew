<?php 
$id=$_GET['id'];
	include('connect.php');
	$run=mysqli_query($con,"delete from add_games where id=".$id);
	if($run)
	{
	echo("<script>alert('Succufully Deleted..');</script>")	;
	header("location:add-games.php");
	}
	else
	{
	echo("<script>alert('Error..');window.loacation='add-games.php'</script>");	
	}
?>