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
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link rel="stylesheet" href="css/monthly.css">
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
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
        <div class="col-lg-12">        
       <div class="panel panel-default">
        <div class="panel-heading">
     Employee <b>[ Employee Selected ]</b>
    </div>
    <div style="padding:10px"><br>
      <table class="table table-striped table-bordered" id="example" >
        <thead>
          <tr>
            <th>S.No</th>
            <th>Emp Id</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Mobile</th>
                     
            <th>Department</th>
            <th>Desiginition</th> 
            <th>Dob</th>
            <th>Gender</th>          
            <th>Password</th>
          
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		$k=1; 
		$qry2=mysqli_query($con,"select * from emp_entry order by id desc");
        while($row2=mysqli_fetch_array($qry2)){
		

		?>
          <tr>
            <td><?php echo $k++;?></td>
            <td><?php echo $row2['empid'] ?></td>           
            <td><?php echo $row2['empname'];?></td>
            <td><?php echo $row2['email'];?></td>
            <td><?php echo $row2['mobile'];?></td>
             <td><?php echo $row2['dept'];?></td>
            <td><?php echo $row2['des'];?></td>
            <td><?php echo $row2['dob'];?></td>
            <td><?php echo $row2['gender'];?></td>
            <td><?php echo $row2['password'];?></td>
           
                      
            <td class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-danger" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="#myModal1<?php echo $row2['id']; ?>"  data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Update Detail</a></li>
         
        
            
            <li><a href="delete-empdetail.php?id=<?php echo $row2['id'];?>" onClick="return confirm('Are you sure you want to delete this ?');"><i class="fa fa-ban" aria-hidden="true"></i>&nbsp;&nbsp;Delete</a></li>

            
          </ul>
          
          </td>
          </tr>
         <div class="modal fade" id="myModal1<?php echo $row2['id']; ?>" role="dialog">
           <div class="modal-dialog">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Employee Detail</h4>
            </div>
            <div class="modal-body">
               
                                         <form action="" method="post">
                                           <div class="form-group">
                                            <label class="control-label">Emp Id</label>
                                             <input type="text" name="empid" class="form-control" value="<?php echo $row2['empid'];?>">
                                            
                                        </div>
                                            <div class="form-group">
                                            <label class="control-label">Emp Name</label>
                                            <input type="text" name="empname" class="form-control" value="<?php echo $row2['empname'];?>">
                                        </div>
                                    
                                         <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $row2['email'];?>">
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label">Mobile</label>
                                            <input type="text" name="mobile" class="form-control" value="<?php echo $row2['mobile'];?>">
                                        </div>
  
                                 <div class="form-group">
                                        <label>Department</label>
                                   <input type="text" name="dept" class="form-control" value="<?php echo $row2['dept'];?>">
                                           </div>
 
                                         
                                                                                                                                                            
                                        
                                        <div class="form-group">
                                            <label class="control-label">Designation</label>
                                            <input type="text" name="des" class="form-control" value="<?php echo $row2['des'];?>">
                                        </div>
                                      
                                      
                                      <div class="form-group">
                                            <label class="control-label">Dob</label>
                                            <input type="date" name="dob" class="form-control" value="<?php echo $row2['dob'];?>">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label">Gender</label>
                                            <input type="text" name="gender" class="form-control" value="<?php echo $row2['gender'];?>">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input type="text" name="password" class="form-control" value="<?php echo $row2['password'];?>">
                                        </div>
                                     
                                        
                                       
                                        
                                         
                                        
                                          
                                        
  
  <div class="form-group">
  <button type="submit" name="update" class="btn btn-primary">Update</button>
  </div>
  <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

  </form>
  
<?php
include('connect.php');
if(isset($_POST['update']))
{

$empid=$_POST['empid'];
$name1=$_POST['empname'];
$name2=$_POST['email'];
$name3=$_POST['mobile'];
$name4=$_POST['dept'];
$name5=$_POST['des'];
$name6=$_POST['dob'];
$name7=$_POST['gender'];
$name8=$_POST['password'];


$qry=mysqli_query($con,"update emp_entry set empid='$empid',empname='$name1', email='$name2', mobile='$name3', dept='$name4',des='$name5',dob='$name6', gender='$name7',password='$name8' where id='$id'");
    if($qry)
    {
   echo "<script>
			   alert('Updated Successfully');
window.location.href='show-employeedetail.php';
</script>";
			 
			       }
			    else
			       {
			        echo"failed";
			       }
			}
?>			




            </div>
            
        </div>
   </div>
</div>
          
           <?php }?>
        </tbody>
       
      </table>
    </div>
  </div>  
        </div>
        </div>
</section>
 <!-- footer -->
		  <?php include('footer.php')?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
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
