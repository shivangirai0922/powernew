<?php
include('connect.php');
ob_start();
session_start();
if(!isset($_SESSION['userid']) && !isset($_SESSION['password']))
{
  header("location:index.php");
}
else
{
$email=$_SESSION['userid'];
$qry=mysqli_query($con,"select * from admin where userid='$email'");
$row=mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<head>
<title><?php echo $row['userid'];?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/lightbox.css">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/samples/js/sample.js"></script>
<script type="text/javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.min.js">
	</script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include('top.php');?>
<!--header end-->
<!--sidebar start-->
<aside>
    <?php include('sidebar.php');?>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">		
		<div class="row">
         <div class="col-lg-2"></div>
        <div class="col-lg-8">
        <section class="panel">
                        <header class="panel-heading">
                        Update  Employee Details
                        </header>
                        
                        <?php 
			  $a=$_REQUEST['id'];
			  $qr=mysqli_query($con,"select * from employee_entry where id='$a'");
              $rw=mysqli_fetch_array($qr);
			 $empid=$rw['empid'];
			  $empname=$rw['empname'];
			   $email=$rw['email'];
			   $mobile=$rw['mobile'];
			  $dept=$rw['dept'];
			   $des=$rw['des'];
			   $dob=$rw['dob'];
			  $gender=$rw['gender'];
			   $sports=$rw['sports'];
			  
			  ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Update Emp Id</label>
                 <input type="text" name="empid" readonly class="form-control" value="<?php  echo $rw['empid']?>" ></div>
                 <div class="form-group">
                                    <label for="exampleInputEmail1">Update Emp Name</label>
                 <input type="text" name="empname" readonly class="form-control" value="<?php  echo $rw['empname']?>" ></div>
                 
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Update Emp Name</label>
                 <input type="email" name="email" readonly class="form-control" value="<?php  echo $rw['email']?>" ></div>
                 
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Update Mobile</label>
                 <input type="text" name="mobile" readonly class="form-control" value="<?php  echo $rw['mobile']?>" ></div>
                 
                 
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Update Department</label>
                 <input type="text" name="dept" class="form-control" value="<?php  echo $rw['dept']?>" ></div>
                 
                 
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Update Desiginition</label>
                 <input type="text" name="des" class="form-control" value="<?php  echo $rw['des']?>" ></div>
                 
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Update Dob</label>
                 <input type="text" name="dob" readonly class="form-control" value="<?php  echo $rw['dob']?>" ></div>
                 
                 <div class="form-group">
                                    <label for="exampleInputEmail1">Update Gender</label>
                 <input type="text" name="gender" readonly class="form-control" value="<?php  echo $rw['gender']?>" ></div>
                 
                 <div class="form-group">
                                    <label for="exampleInputEmail1">Update Sports</label>
                 <input type="text" name="sports" class="form-control" value="<?php  echo $rw['sports']?>" ></div>
                 
                 
                 
                 <button type="submit" name="submit" class="btn btn-info">Submit</button>
                 <a href="selected-employee.php" class="btn btn-default">Back</a>
                            </form>
                            
                             <?php
							include('connect.php'); 
	if(isset($_POST['submit']))
	{    
	   
	    $name1=$_POST['empid']; 
		$name2=$_POST['empname']; 
		$name3=$_POST['email']; 
		$name4=$_POST['mobile']; 
		$name5=$_POST['dept']; 
		$name6=$_POST['des']; 
		$name7=$_POST['dob']; 
		$name8=$_POST['gender']; 
		$name9=$_POST['sports']; 
			
		$qry=mysqli_query($con,"update  employee_entry set empid='$name1',empname='$name2',email='$name3',mobile='$name4',dept='$name5',des='$name6',dob='$name7',gender='$name8',sports='$name9' where id=".$a );
		if($qry)
		{
			
		$msg="Succussfully Update"	;
		}
		else
		{
		$msg="Error";	
		}
		
	}

?>
                            </div>

                        </div>
                    </section>
        </div>
        
        </div>
        
        <div class="row">
        <div class="col-lg-10">   
        
       <div class="panel panel-default">
        <div class="panel-heading">
     Updated Table 
    </div>
    <div style="padding:10px"><br>
      <table class="table table-striped table-bordered" id="example" >
        <thead>
          <tr>
            <th>Emp Id</th>
            <th>Emp Name</th>
             <th>Email</th>
              <th>Mobile</th> 
               <th>Dept</th>
            <th>Des</th>
             <th>Dob</th>
              <th>Gender</th> 
               <th>Sports</th>
                     
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		$k=1; 
		$qry2=mysqli_query($con,"select * from employee_entry order by id desc");
        while($row2=mysqli_fetch_array($qry2)){
		?>
          <tr>
            
            <td><?php echo $row2['empid'];?></td>
            <td><?php echo $row2['empname'];?></td>
            <td><?php echo $row2['email'];?></td>
             <td><?php echo $row2['mobile'];?></td>
            <td><?php echo $row2['dept'];?></td>
            <td><?php echo $row2['des'];?></td>
             <td><?php echo $row2['dob'];?></td>
            <td><?php echo $row2['gender'];?></td>
            <td><?php echo $row2['sports'];?></td>
            
            <td class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-danger" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="update-selected-employee.php?id=<?php echo $row2['id'] ?>"  data-toggle="modal">Update</a></li>
           
           <li><a href="delete-select-employee.php?id=<?php echo $row2['id'] ?>" onClick="return confirm('Are you sure you want to delete this ?');" >Delete</a></li>
          </ul>
        </td>
          </tr> 
          
         
            

        <?php }?>        
        </tbody>
      </table>
    </div>
  </div>  
        </div>
        
        </div>
       
        <br>
    
</section>
 <!-- footer -->
		   <div class="footer">
			<div class="wthree-copyright">
			  <p>© All rights reserved | Powered by <a href="#"></a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script>
	initSample();
</script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
</body>
</html>
<?php }?>
