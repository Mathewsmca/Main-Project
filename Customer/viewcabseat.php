<?php
include "dbconn.php";
// echo "<script>alert(hi);</script>";
// if(isset($_POST['cart'])&&isset($_POST['quantity']))
// {


$search = $_POST["search"];

// echo "<script>alert($cart)/<script>" ;
// echo "<script>alert('a');</script>";
$sql = "SELECT tbl_cab.*,tbl_model.* FROM `tbl_cab` inner join tbl_model on tbl_cab.si_no=tbl_model.model_id where tbl_cab.si_no='$search'";
$run = mysqli_query($conn, $sql);

?>
  <div class="row">
    <h3 style="text-align: center;;margin-left: 20%;margin-top:10%;padding-bottom:5%;margin-right:20%">View Details</h3>
    <br>
    <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%;margin-left: -21%">
       <thead>
        <tr>
           
           <th>Cab Number</th>
           <th>Cab Name </th>
           <th>Model</th>
           <th>Image </th>
         </tr>
      </thead>
       <?php
while ($ru = mysqli_fetch_assoc($run)) {
								
	
	echo "<td>".$ru["cab_number"]."</td>";
   echo "<td>".$ru["cab_name"]."</td>";
	echo "<td>".$ru["model"]."</td>";
	echo "<td><img src='../img/".$ru["image"]."'height='150'width='200'/></td>";
	echo "</tr>";
								
							}
						?>
     </table>
  </div>