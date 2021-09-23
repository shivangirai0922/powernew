<?php 
$id=$_GET['id'];
	include('connect.php');
	$run=mysqli_query($con,"delete from emp_entry where id=".$id);
	if($run)
	{
	echo("<script>alert('Succufully Deleted..');</script>")	;
	header("location:show-employee.php");
	}
	else
	{
	echo("<script>alert('Error..');window.loacation='show-employee.php'</script>");	
	}
?>