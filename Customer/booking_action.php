<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cab Details</title>
</head>
<body bgcolor="#DEFCFD">
<?php
//include("header.php");
include("dbconn.php");
$id=$_GET["p_id"];
$result=mysqli_query($conn,"SELECT * from tbl_cab c inner join  tbl_customer cm on c.customer_id=cm.customer_id where c.cab_id='$id'");
$row=mysqli_fetch_array($result);
?>
<form action="booknowaction.php" style="padding-top: 15%;" method="post">
  <div  style="margin-left:100px; margin-bottom:5%;padding-left:-25px;  border-radius: 4px; top: 14px;padding-top:20%;background-image:url(images/account-bg.jpg);background-color:"#DEFCFD">
    <h2 style="text-align: center;margin-left: 1%;margin-bottom: -8%;margin-top: 0%;font-family: fantasy;"><?php echo $row['cab_number'] ?></h2>
    <br>
    <div class="row">
      <div class="col-md-9" style="margin-top: 15%;margin-left: 6%;"> <img src="../img/<?php echo $row['image'] ?>" width="400px" style="box-shadow: 2px 2px 10px #000000; border-radius:  44%;"/> </div>
      <div class="col-md-6" style="margin-top: -6%;margin-left: 45%;">
        <input type="hidden" value="<?php echo $row['cab_id']?>" name="hiddenpid" />
        <p style="color:black;font-size: larger;">Cab Number:</p>
        <p style="color:green"><b>
          <?php  echo $row['cab_number']?>
          </b> </p>
          <p style="color:black;font-size: larger;">Cab Name:</p>
        <p style="color:green"><b>
          <?php  echo $row['cab_name']?>
          </b> </p>
          <p style="color:black;font-size: larger;">Type:</p>
        <p style="color:green"><b>
          <?php  echo $row['type']?>
          </b> </p>
 
      </div>
    </div>
    <br />
  </div>
  </div>
</form>
</body>
</html>
 <?php
// include("footer.php");
?>