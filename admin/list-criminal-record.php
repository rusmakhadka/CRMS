<?php 
$title = "Criminal Personal Information List";
include 'include/head.php';

$sql = "SELECT * FROM criminal_personal_info";
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
                    <h2 class="page-header"> Criminal Record</h2>
                    <a href="add-criminal-personal-info.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Criminal Personal Info</a>
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
                            <th>Full Name</th>
                                <th>Citizenship Detail</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Religion</th>
                                <th>Nationality</th>
                                <th>Action</th>
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
                                    <?php echo $row['first_name'];?>
                                <?php echo $row['middle_name'];?>
                                <?php echo $row['last_name'];?>
                                </td>
                                <td>
                                   Citizenship no: <?php echo $row['citizenship_no'];?>
                                <br>Citizenship issue date: <?php echo $row['citizenship_issue_date'];?>
                                <br>Citizenship issue district:<?php echo $row['citizenship_issue_district'];?>
                            </td>
                            <td>
                               Temporary Address: <?php echo $row['temp_address'];?><br>
                               Permanent Adress: <?php echo $row['perma_address'];?>
                            </td>
                                <td>
                                    <?php echo $row['gender'];?>
                                </td>
                                <td>
                                    <?php echo $row['religion'];?>
                                </td>
                                <td>
                                    <?php echo $row['nationality'];?>
                                </td>
                               <td>
                                <a href="edit-criminal-personal-info.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-success ">Edit</a>
                                <a href="delete-criminal-personal-info.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger ">Delete</a></br></br>
                                <a href="list-view-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-success ">View Detail</a></br></br>
                               <a href="add-criminal-file.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger ">Add Criminal File</a>
                            </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
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
