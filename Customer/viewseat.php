<?php
include("dbconn.php");
?>
<!doctype html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Cab view</title> 
 <style>
td, th {
	width: 200px
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 </head>
 
 <body style="background-image: url('images/cabs.jpg');background-repeat: no-repeat;background-size: cover;">

<script type="text/javascript">
   $(document).ready(function () {
      $("#seat_name").change(function () {
         var search = $("#seat_name").val();
         console.log(search);
         // alert(search);
         $.ajax({
            url: "viewcabseat.php",
            type: "POST",
            data: {
            search: search,
            },
            success: function (response) {
            // $(input).val(quantity);
            console.log(response);
            //alert(response);
            $("#searched").html(response);
            }
         });

      });
      });
</script>
   <div class="col-md-9" style="box-shadow: 2px 2px 10px #000000; border-radius:0px; top: 14px;background-color:#808080; margin-left: 1%;">
   <div class="container" style="width:50%; margin-left:12% ;box-sizing:border-box; margin-bottom:2%;padding:30px 40px 30px 120px; margin-top: 10%;">
   <div class="row" style="margin-left: -173%;margin-top: 10%;margin-bottom: -5%;">
  </div>
   <h2 style="text-align: center;margin-top: 7%;margin-left:10%;">Cab Details</h2>
   <br>
   <div class="row">
    <div class="col-md-3" style="text-align:left">
       <label style="text-align: center;margin-left:-10%">Seating Details</label>
     </div>
    <div class="col-md-6">
       <select class="form-control" name="seat" id="seat_name" style="width:500px;" required autofocus onChange="populate()">
        <option value="0">--Select Seating Capacity--</option>
        <?php
		  $sql=mysqli_query($conn,"SELECT * FROM tbl_seat");
		  while($row=mysqli_fetch_array($sql))
		  {
			  ?>
        <option value="<?php echo $row['seat']; ?>"> <?php echo $row['seat']; ?> </option>
        <?php
		  }
		  
		?>
      </select>
     </div>
  </div>
   <br>
   <br />
   <br />
   <br />
   <!-- <div class="row" style="margin-left:51%;margin-top:-10%;margin-bottom:-5%">
    <div class="col-md-2">
       <input type="submit" name="View" value="View" class="btn btn-primary" onclick="view_seats()">
       &nbsp;&nbsp;&nbsp; 
      </div>
 
  </div> -->
<div class="container" style="width:100%;  margin-left: 81px;" id="searched">
   <div class="row">
    <h3 style="text-align: center;;margin-left: 20%;margin-top:10%;padding-bottom:5%;margin-right:20%">View Details</h3>
    <br>
    <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%;margin-left: -21%">
       <thead>
        <tr>
           <th scope="col">Sl No</th>
           <th>Cab Number</th>
           <th>Cab Name </th>
           <th>Model</th>
           <th>Image </th>
         </tr>
      </thead>
       <?php
if(isset($_POST['View']))
{
		$slno=1;
$sql=mysqli_query($conn,"SELECT * FROM `tbl_cab` AS c inner join tbl_model AS m on c.si_no=m.model_id where si_no='$seat'");
if(mysqli_num_rows($sql)>0)
echo "Query";
}							
while($display=mysqli_fetch_array($sql))
							{
								
	echo  "<tr>";
	echo "<td>".$display["cab_number"]."</td>";
   echo "<td>".$display["cab_name"]."</td>";
	echo "<td>".$display["model"]."</td>";
	echo "<td><img src='../img/".$display["image"]."'height='150'width='200'/></td>";
	echo "</tr>";
								
							}
						?>
     </table>
  </div>
 </div>
 </div>
</div>
</div>
</div>
<div></div>
</div>
</div>
</body>
 </html>

