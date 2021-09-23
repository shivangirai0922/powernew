<?php 
ob_start();
$id=$_GET['id'];
	include('connect.php');
	$run=mysqli_query($con,"delete from employee_entry where id=".$id);
	if($run)
	{
	echo("<script>alert('Succufully Deleted..');</script>")	;
	header("location:selected-employee.php");
	}
	else
	{
	echo("<script>alert('Error..');window.loacation='selected-employee.php'</script>");	
	}
?>