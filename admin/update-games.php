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
        <div class="col-lg-6">
        <section class="panel">
                        <header class="panel-heading">
                        Update  Course
                        </header>
                        
                        <?php 
			  $a=$_REQUEST['id'];
			  $qr=mysqli_query($con,"select * from add_games where id='$a'");
              $rw=mysqli_fetch_array($qr);
			 $gname=$rw['gname'];
			  $place=$rw['place'];
			   $pmonth=$rw['pmonth'];
			  
			  ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Game Name</label>
                 <input type="text" name="gname" class="form-control" value="<?php  echo $rw['gname']?>" ></div>
                 <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Place</label>
                 <input type="text" name="place" class="form-control" value="<?php  echo $rw['place']?>" ></div>
                 
                 <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Proposed Month</label>
                 <input type="text" name="pmonth" class="form-control" value="<?php  echo $rw['pmonth']?>" ></div>
                 <button type="submit" name="submit" class="btn btn-info">Submit</button>
                 <a href="add-games.php" class="btn btn-default">Back</a>
                            </form>
                            
                             <?php
							include('connect.php'); 
	if(isset($_POST['submit']))
	{    
	   
	    $name1=$_POST['gname']; 
		$name2=$_POST['place']; 
		$name3=$_POST['pmonth']; 
			
		$qry=mysqli_query($con,"update  add_games set gname='$name1',place='$name2',pmonth='$name3' where id=".$a );
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
        <div class="col-lg-6">   
        
       <div class="panel panel-default">
        <div class="panel-heading">
     Game Table 
    </div>
    <div style="padding:10px"><br>
      <table class="table table-striped table-bordered" id="example" >
        <thead>
          <tr>
            <th>ID</th>
            <th>Game Name</th>
             <th>Place</th>
              <th>Proposed Month</th>             
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		$k=1; 
		$qry2=mysqli_query($con,"select * from add_games order by id desc");
        while($row2=mysqli_fetch_array($qry2)){
		?>
          <tr>
            <td><?php echo $k++;?></td>
            <td><?php echo $row2['gname'];?></td>
            <td><?php echo $row2['place'];?></td>
            <td><?php echo $row2['pmonth'];?></td>
            
            <td class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-danger" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="update-games.php?id=<?php echo $row2['id'] ?>"  data-toggle="modal">Update</a></li>
           
           <li><a href="delete-games.php?id=<?php echo $row2['id'] ?>" onClick="return confirm('Are you sure you want to delete this ?');" >Delete</a></li>
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
