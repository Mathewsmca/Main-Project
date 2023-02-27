
<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<?php
include("dbconn.php");
if(isset($_GET["model_id"]))
{
	$model_id=$_GET["model_id"];
	$sql=mysqli_query($conn,"SELECT * FROM tbl_model WHERE model_id='$model_id'");
	$display=mysqli_fetch_array($sql);
}
?>
<form action="" method="POST"> 
<div class="container" style="width:100%;margin-left:%;margin-bottom: 5%;padding-top:10%" >

  <div class="row">
  <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 14px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
  </div>
<h2 style="text-align: center;margin-top: 6%;">MODEL EDIT</h2>
  <br>
   <div class="row">
     <div class="col-md-3" style="text-align:left">
        <label>Model</label>
      </div>
      
      <div class="col-md-6">
        <input type="text" class="form-control" name="txt_model" style="width:500px;" value="<?php echo $display["model"] ?>">
      </div>
    </div>
    
   <br>
     <div class="row">
     <div class="col-md-3" style="text-align:left">
         <label>Description</label>
      </div>
      <div class="col-md-6">
         <input type="text" class="form-control"name="txt_Description"style="width:500px;" value="<?php echo $display['Description'];?>"required />
         </div>
        </div>
        <br />
         <div class="row">
      <input type="submit" name="btnsubmit" value="Update" class="btn btn-primary" style="margin-left:63%">
    </div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST["btnsubmit"]))
{
	$modelname=$_POST['txt_model'];
	$model=$_POST['txt_model'];
	$modeldescription=$_POST['txt_Description'];
	$sql=mysqli_query($conn,"UPDATE tbl_model SET model='$modelname',Description='$modeldescription'WHERE model_id='$model_id'");
	if($sql)
	{
		echo "<script>alert( 'Model Details Updated Succesfully!!');location='view_model.php'</script>";
	}
}
?>
