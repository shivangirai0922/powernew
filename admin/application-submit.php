<?php
include('connect.php');
$login_id=$_POST['login_id'];

$empname=$_POST['empname'];

$email=$_POST['email'];

$mobile=$_POST['mobile'];
$dept=$_POST['dept'];
$des=$_POST['des'];

$dob=$_POST['dob'];
$gender=$_POST['gender'];
$s=$_POST['sports'];
$sports=implode(',',$s);
 $hod=$_POST{'hod'};
 
 $name=$_FILES['photo']['name'];
 $type=$_FILES['photo']['type'];

 date_default_timezone_set("Asia/kolkata");
        $d=date("Y-m-d h:i:sa");




$qr=mysqli_query($con,"insert into form_submit(login_id,empname,email,mobile,dept,des,dob,gender,sports,photo,date)
values('$login_id','$empname','$email','$mobile','$dept','$des','$dob','$gender','$sports','$name','hod','$d')")or die(mysqli_error());


if($qr)

{
		 $target = "images/";
         $target = $target . $_FILES['photo']['name'] ;
         move_uploaded_file($_FILES['photo']['tmp_name'], $target);
		 
		 echo"<script>alert('Thank You!You Have Sucessfully Fill The Form!');</script>";
		 
	echo	$msg="Thank You!You Have Sucessfully Fill The Form!"	;
		header("Location:index.php");
		}
		else
		{
		$msg="Error"	;	
		}

?>
