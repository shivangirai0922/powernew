
<?php
include('connect.php');
session_start();
if($_SESSION['hod']) 
{
  header("location:hod-profile.php");
}
else
{
$hod=$_SESSION['hod'];
$qry=mysqli_query($con,"select * from form_submit where hod='$hod'");
$row=mysqli_fetch_array($qry);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Power Grid Corporation Of India Limited</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sports Club Membership Registration form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
<!--online_fonts-->
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet"><!--online_fonts-->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
<div class="col-lg-12">
<img src="images/logo.png" style="margin-left:200px; margin-top:25px; ">
</div>
<div class="w3ls-main">
<h2>Welcome H.O.D</h2>

<h1><?php echo $row['hod']; ?></h1>
<table class="table  table-bordered" style="margin-top:50px;">
    <thead>
      <tr style="color:#FFFFFF;">
       
         <th style="font-size:16px">Emp Id</th>
        <th style="font-size:16px">Employee Name</th>
        <th style="font-size:16px">Gender</th>
        <th style="font-size:16px">Name of sports</th>
          <th style="font-size:16px">Status</th>
          
      </tr>
    </thead>
     <tbody>
        
   
    
   
      <tr style="color:#FFFFFF;">

        <td ><?php echo $row['login_id']; ?></td>
        <td ><?php echo $row['empname']; ?></td>
        
         <td ><?php echo $row['gender']; ?></td>
         <td ><?php echo $a=$row['sports']; ?></td>
        
         <?php
						include('connect.php');
 $run1=mysqli_query($con,"select * from add_games where gname='$a'");
  $row=mysqli_fetch_array($run1);
  
  

   ?>
        
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="1">&nbsp;&nbsp;select</td>
      </tr>
   
   </tbody>
  </table>
  
    <li style="font-size:24px; margin-top:30px;">
                    <a href="logout.php">
                        <i class="fa fa-user"></i>
                        <span>LogOut</span>
                    </a>
 
 
 
                </li>
                
                <div class="row" style="margin-top:30px;">
                
                <button class="btn btn-primary" onClick="myFunction()">Print this page</button>
                
                
                </div>

<script>
function myFunction() {
    window.print();
}
</script>                
</div>
</div>
<footer>2018 Sports Requisition Form. All Rights Reserved | Designed by Anu Shivangi & Avneet</footer>
</html>