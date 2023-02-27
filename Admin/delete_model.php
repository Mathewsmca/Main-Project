<?php
include("dbconn.php");
if(isset($_GET["model_id"]))
{
$model_id=$_GET["model_id"];
mysqli_query($conn,"delete from tbl_model where model_id=$model_id");
echo "<script> alert('type Deleted Successfully!!');window.location='view_model.php'</script>";
}
?>