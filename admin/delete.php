<?php 
$id=$_GET['id'];
	include('connect.php');
	$run=mysqli_query($con,"delete from register where id=".$id);
	if($run)
	{
	echo("<script>alert('Succufully Deleted..');</script>")	;
	header("location:admin-profile.php");
	}
	else
	{
	echo("<script>alert('Error..');window.loacation='admin-profile.php'</script>");	
	}
?>