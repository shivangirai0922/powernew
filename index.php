
<!DOCTYPE html>
<html>
<head>
<title>Power Grid Corporation Of India Limited</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">

<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="row">
<div class="col-lg-12">
<img src="images/logo.png" style="margin-left:400px; margin-top:25px; ">
</div>
<div class="w3ls-main">
<h2><u>Instructions</u></h2>
<p>Central Human Resource Department is conducting an inter-office memorandum welfare sports competition<br> 2018-19 from 27th April 2018.</p>
<p>The following table includes the different sports,places and the proposed months respectively.</p>

 <table class="table table-bordered">
    <thead>
      <tr style="color:#FFFFFF;">
        <th style="font-size:16px">S.No.</th>
        <th style="font-size:16px">Name of Sports</th>
        <th style="font-size:16px">Place</th>
        <th style="font-size:16px">Months</th>
      </tr>
    </thead>
    <tbody>
     <?php
	 include('connect.php');
		$k=1; 
		$qry2=mysqli_query($con,"select * from add_games");
        while($row2=mysqli_fetch_array($qry2)){
		?>
    
      <tr style="color:#FFFFFF;">
        <td ><?php echo $k++;?></td>
        <td ><?php echo $row2['gname'];?></td>
        <td ><?php echo $row2['place'];?></td>
        <td ><?php echo $row2['pmonth'];?></td>
      </tr>
      <?php }?>   
      
     </tbody>
  </table>
<p>All Divisional Heads/Incharges/Head of the Office are requested that please operate the above Sports Calendar in all the personnel.</p>
<p>Interested personnel/skilled workers who have played the above mentioned sports at the school/college<br> or at the Power Grid level ,their details should be sent in emobodied format filled perfectly, to Human Resource Department-Patna as soon as possible.  </p>
<div class="row">


<h4 style="color:#D26900; margin-right:20px;"><a href="login.php">Click Here to Login</a></h4>

</div>
</div>
</div>
<footer>2018 Sports Requisition Form. All Rights Reserved | Designed by Anu Shivangi & Avneet</footer>
</body>
</html>