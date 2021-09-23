<?php
include('connect.php');
if(isset($_GET['payment_status']))
{
$status1=$_GET['payment_status'];
$select=mysqli_query($con,"select * from jobs_seeker where id='$status1'");
while($row=mysqli_fetch_object($select))
{
$status_var=$row->payment_status;

if($status_var=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}
date_default_timezone_set("Asia/kolkata");
$exp = date('Y-m-d', strtotime('+1 years'));
$update=mysqli_query($con,"update jobs_seeker set payment_status='$status_state', reg_exp='$exp' where id='$status1' ");
if($update)
{
echo "<script>window.location.href='new-regst.php'</script>";
}
else
{
echo mysqli_error();
}
}
?>
<?php
}
?>