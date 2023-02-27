<?php
include("dbconn.php");
session_start();
$username=$_POST["email"];
$password=mysqli_real_escape_string($conn,md5($_POST["password"]));
$sql=mysqli_query($conn,"SELECT * FROM tbl_customer where email='$username' and password='$password'");
$display=mysqli_fetch_array($sql);
if($display>0)
{
	$_SESSION["cus_id"]=$display["customer_id"];
	header("location:../Customer/index.php");

}
else
{
echo "<script>alert('Invalid Username/Password!!');window.location='#'</script>";
}?>