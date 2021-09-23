<?php 
ob_start();
$id=$_GET['id'];
	include('connect.php');
	$run=mysqli_query($con,"delete from form_submit where id=".$id);
	if($run)
	{
	echo("<script>alert('Succufully Deleted..');</script>")	;
	header("location:unreg_employee.php");
	}
	else
	{
	echo("<script>alert('Error..');window.loacation='unreg_employee.php'</script>");	
	}
?>