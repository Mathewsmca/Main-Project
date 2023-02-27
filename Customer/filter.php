<div>

        <div>
            <form action="products.php" method="POST">
               
                    <h4>Filters</h4>
                    <p>Select you desired Cab to filters and view.</p>
                    <select name="filters" id="filters">
                        <option value="" selected disabled>Select a Cab</option>

                        <?php
                            $filter_opt_sql= mysqli_query($conn,"SELECT distinct(cab_name) FROM tbl_cab");
                            if($filter_opt_sql){
                                while ($row = mysqli_fetch_array($filter_opt_sql)) {
                                    echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                                }
                            }
                        ?>
                    </select>

                    <input type="submit" name="filters_submitbtn" id="filters_submitbtn" class="btn btn-primary">
             
            </form>
            <hr>
        </div>