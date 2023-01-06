<?php 
$title = "View Details";
include 'include/head.php';
$viewId = $_GET['id'];
$sql = "SELECT * FROM criminal_record where criminal_personal_info_id = $viewId";
$results = mysqli_query($conn, $sql);

?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php include 'include/navbar.php';?>
            <?php include 'include/sidebar.php';?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"> Criminal File</h2>
                    <a href="add-criminal-file.php?id=<?php echo $viewId;?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add Crime File</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="margin-top:20px;">
                <div class="col-sm-12">

                <?php 
                if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                        ?>
                    </div>
                    
                <?php } ?>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>offense</th>
                                <th>Punishment </th>
                                <th>Court Case Number</th>
                                <th>Case File</th>
                                <th>Current Status</th>
                                <th>Prison</th>
                                <th>Station</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($results) > 0){
                            while ($row = mysqli_fetch_array
                            ($results)){ 
                        ?>
                            <tr>   
                                <td>
                                   Offense Type: <?php echo $row['offense_type'];?>
                                <br>offense description: <?php echo $row['offense_description'];?>
                                <br>offense Date:<?php echo $row['offense_date'];?>
                            </td>
                            <td>
                               Punishment Date Start: <?php echo $row['punishment_date_start'];?><br>
                               Punishment Type: <?php echo $row['punishment_type'];?><br>
                               Punishment Date End: <?php echo $row['punishment_date_end'];?><br>
                            </td>
                                <td>
                                   Court Case Number: <?php echo $row['court_case_number'];?>
                                </td>
                                <td>
                                  Court File: <?php echo $row['case_file'];?>
                                </td>
                                <td>
                                   Court Status: <?php echo $row['current_status'];?>
                                </td>
                                <td>
                                   Location: <?php echo $row['prison_location'];?>
                                <br>Contact: <?php echo $row['prison_contact'];?>
                            </td>
                            <td>
                                  Name: <?php echo $row['station_name'];?>
                                <br>Address: <?php echo $row['station_address'];?>
                                <br>Number:<?php echo $row['station_number'];?>
                            </td>
                               <td>
                                <a href="edit-criminal-file.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-success ">Edit</a>
                                <br> <a href="delete-criminal-file.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger ">Delete</a>
                                
                            </td> 
                           
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                    <button type="submit" name="update" class="btn btn-success">
                            <a href="list-criminal-record.php" class="btn btn-primary">All Criminal Records</a> 
                    </button>
            </div>
                </div>
                 
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    
    <!-- /#wrapper -->

    <!-- /#wrapper -->
    <?php include 'include/footer.php';?>
</body>

</html>
