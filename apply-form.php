<?php
 session_start();
 if($_SESSION["email"]==""){
 header("location:login.php");
 
 }else{
 include("connect.php");
  $email=$_SESSION["email"];
 
 $qry=mysqli_query($con,"select * from emp_entry where email='$email'");
 $row=mysqli_fetch_array($qry);
 $password=$row['empid'];
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
<img src="images/logo.png" style="margin-left:400px; margin-top:25px; ">
</div>
<div class="w3ls-main">
<h2>Application Form</h2>
<p>Complete the form below to sign up for our membership service.</p>
<div class="w3ls-form" style="margin-left:200px;">
 <form action="application-submit.php" method="post" enctype="multipart/form-data">
<ul class="fields">
<div class="Refer_w3l">
<h3>Your details</h3>

     <li>	
		<label class="w3ls-opt">employee id :<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
        
        
        
			<input type="text" name="login_id"  placeholder="employee id"  value="<?php echo $row['empid']; ?>" readonly/>
		</div>
	</li>

	<li>	
		<label class="w3ls-opt">employee name :<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
        
        
        
			<input type="text" name="empname"  placeholder="employee name"  value="<?php echo $row['empname']; ?>" readonly/>
		</div>
	</li>
	
	<li>
		<div class="mail">
			<label class="w3ls-opt">e-mail :<span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="email" name="email" placeholder="Enter your e-mail" value="<?php echo $row['email']; ?>" readonly/>
			</span>
		</div>
	</li>
    <li>
		<div class="mail">
			<label class="w3ls-opt">mobile :<span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="text" name="mobile" placeholder="enter mobile no." value="<?php echo $row['mobile']; ?>" readonly/>
			</span>
		</div>
	</li>
    <li>
		<div class="mail">
			<label class="w3ls-opt">department :<span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="text" name="dept" placeholder="department"  value="<?php echo $row['dept']; ?>" readonly/>
			</span>
		</div>
	</li>
	<li>
		<label class="w3ls-opt">designation :<span class="w3ls-star"> * </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="text" name="des" placeholder="designation" value="<?php echo $row['des']; ?>" readonly/>
			</span>
	</li>
   <li>
							<label class="w3ls-opt">Birth Date :<span class="w3ls-star"> * </span></label>	
							<span class="w3ls-text w3ls-name">
				<input type="date" name="dob" placeholder="Dob" value="<?php echo $row['dob']; ?>" readonly/>
			</span>
						</li>
     
	
    
    <li>
							<label class="w3ls-opt">gender :<span class="w3ls-star"> * </span></label>	
							<div class="w3ls-text w3ls-name">
								<span class="agile_sub-label">
									
							<input type="text" name="gender" placeholder="Gender" value="<?php echo $row['gender']; ?>" readonly/>		
								</span>
								
								
								<div class="clear"></div>
							</div>
						</li>
                        
                      
		<li>
		<label class="w3ls-opt">select sports :<span class="w3ls-star"> * </span></label>
        
        <?php 
   
 
    $qry2=mysqli_query($con,"select * from add_games");
   
   

    while($row=mysqli_fetch_array($qry2)){
   
?>	
        
            <span class="w3ls-text w3ls-name">
        
           
            <span><?php echo $row['gname']; ?></span>
            
            <input type="checkbox" name="sports[]" value="<?php echo $row['gname']; ?> "   />
            
            
           
          </span>
            <?php }?>     
	</li>
     
      
	<br>	   
                     
     
     
     <li>
		
        <label class="w3ls-opt"> file upload :<span class="w3ls-star">  </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="file" name="photo" />
                
               
                
                
			</span>
	</li>    
     
						
	</div>
     <li>	
		<label class="w3ls-opt">H.O.D number:<span class="w3ls-star">  </span></label>
		<div class="w3ls-name">	
        
        
        
			<input type="text" name="hod"  placeholder="H.O.D id number"  />
		</div>
	</li>
     
    
	<div class="Refer_w3l">
	<h3>Selection Process:</h3>
	
	<p>1. Name of only one or two excellent players in each game has to be selected .</p>
	
	<p>2. The names of those personnel should be sent who can be released from the jurisdiction <br>for the relevant competition.  </p>
	
	</div>
	<p></p>
</ul>
<div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" value="Submit "> 
	
                    </div>
                                          

    <li style="font-size:24px; margin-top:30px;">
                    <a href="logout.php">
                        <i class="fa fa-user"></i>
                        <span>LogOut</span>
                    </a>
                </li>
                
</form>
</div>
</div>
<footer>2018 Sports Requisition Form. All Rights Reserved | Designed by Anu Shivangi & Avneet</footer>
</html>
  
