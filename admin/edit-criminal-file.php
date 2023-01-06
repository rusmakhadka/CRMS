<?php 
$title = "Edit View Delete";
include 'include/head.php';
$editId = $_GET['id'];
$errors =array();
$sql = "SELECT * FROM criminal_record WHERE id = $editId";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $Offensetype = $row['offense_type'];
    $Offensedescription = $row['offense_description'];  
    $punishmentType = $row['punishment_type'];  
    $punishmentDate = $row['punishment_date_start'];
    $courtcasenumber = $row['court_case_number'];
    $casefile = $row['case_file'];  
    $currentStatus = $row['current_status'];
    $punishmentdateend = $row['punishment_date_end'];
    $prisonLocation = $row['prison_location'];
    $prisonContact = $row['prison_contact'];
    $stationName = $row['station_name'];
    $stationAddress = $row['station_address'];
    $stationNumber = $row['station_number'];
}
if (isset($_POST['update'])) { 
    $Offensetype = $_POST['offense_type'];
    $Offensedescription = $_POST['offense_description'];  
    $punishmentType = $_POST['punishment_type'];  
    $punishmentDate = $_POST['punishment_date_start'];
    $courtcasenumber = $_POST['court_case_number'];
    $casefile = $_POST['case_file'];  
    $currentStatus = $_POST['current_status'];
    $punishmentdateend = $_POST['punishment_date_end'];
    $prisonLocation = $_POST['prison_location'];
    $prisonContact = $_POST['prison_contact'];
    $stationName = $_POST['station_name'];
    $stationAddress = $_POST['station_address'];
    $stationNumber = $_POST['station_number'];

    if (empty($Offensetype)){
        array_push($errors,"Offense Type is Required");
    }
    
    if (empty($Offensedescription)){
        array_push($errors,"Offense Description is Required");
    }
    if (empty($punishmentType)){
        array_push($errors,"Punishment Type is Required");
    }
    if (empty($punishmentDate)){
        array_push($errors,"Punishment Date is Required");
    }
    if (empty($courtcasenumber)){
        array_push($errors,"Court Case Number is Required");
    }
    if (empty($casefile)){
        array_push($errors,"Case File is Required");
    }
    if (empty($currentStatus)){
        array_push($errors,"Current Status is Required");
    }
    if (empty($punishmentdateend)){
        array_push($errors,"Punishment End Date is Required");
    }
    if (empty($prisonLocation)){
        array_push($errors,"Prison  Location is Required");
    }
    if (empty($prisonContact)){
        array_push($errors,"Prison Contact is Required");
    }
    if (empty($stationName)){
        array_push($errors,"Station Name is Required");
    }
    if (empty($stationAddress)){
        array_push($errors,"station Addressr is Required");
    }
    if (empty($stationNumber)){
        array_push($errors,"Station Number is Required");
    }

    $sql = "UPDATE criminal_record SET offense_type ='". $Offensetype."', offense_description = '".$Offensedescription. "', punishment_type ='". $punishmentType."',punishment_date_start ='". $punishmentDate."', court_case_number = '".$courtcasenumber. "', case_file ='". $casefile."', current_status ='". $currentStatus."',punishment_date_end ='". $punishmentdateend."', prison_location = '".$prisonLocation. "', prison_contact = '".$prisonContact. "', station_name = '".$stationName. "', station_address = '".$stationAddress. "', station_number = '".$stationNumber. "' WHERE id = '". $editId."'";
    if (mysqli_query($conn, $sql)) {
        $success = " Criminal Files  Updates Created Successfully !";
     } else {
            echo mysqli_error($conn);
        }
        mysqli_close($conn);
    
}

?>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <?php include 'include/navbar.php';?>
            <!-- /.navbar-top-links -->

            <?php include 'include/sidebar.php';?>

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Edit Criminal File</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-sm-12">
            <?php 
                if (!empty($success)) { ?>
                    <div class="alert alert-success">
                        <?php echo $success;  ?>
                    </div>
                    <?php } ?>
                <?php if (count($errors)> 0 ){ 
                 foreach ($errors as $error) {  ?>
                   <div class="alert alert-danger">
                        <?php echo $error;  ?>
                    </div>
                <?php } } ?>
            </div>

            <form action="edit-criminal-file.php?id=<?php echo $editId;?>" method="post">
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>offense_type</label>
                        <input value="<?php echo $Offensetype; ?>" class="form-control" name="offense_type" placeholder="offense Type">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Offense Description</label>
                        <input  value="<?php echo $Offensedescription; ?>" class="form-control" name="offense_description" placeholder="Middle Name">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Punishment Type</label>
                        <input  value="<?php echo $punishmentType; ?>" class="form-control" name="punishment_type" placeholder="Last Name">
                    </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Punishment Date start</label>
                        <input  value="<?php echo $punishmentDate; ?>" class="form-control" name="punishment_date_start" placeholder="punishment_date_start">
                    </div>
                    </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Court case number</label>
                        <input  value="<?php echo $courtcasenumber; ?>" class="form-control" name="court_case_number" placeholder="Temporary Address">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Case File</label>
                        <input  value="<?php echo $casefile; ?>" class="form-control" name="case_file" placeholder="Permanent Address">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Current Status</label>
                        <input  value="<?php echo $currentStatus; ?>" class="form-control" name="current_status" placeholder="current Status">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Punishment Date End</label>
                        <input  value="<?php echo $punishmentdateend; ?>" class="form-control" name="punishment_date_end" placeholder="punishment Date End">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Prison Location</label>
                        <input  value="<?php echo $prisonLocation; ?>" class="form-control" name="prison_location" placeholder="prison location">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Prison Contact</label>
                        <input  value="<?php echo $prisonContact; ?>" class="form-control" name="prison_contact" placeholder="prisoncontact">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>station Name</label>
                        <input  value="<?php echo $stationName; ?>" class="form-control" name="station_name" placeholder="stationname">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Station Address</label>
                        <input  value="<?php echo $stationAddress; ?>" class="form-control" name="station_address" placeholder="station address ">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Station Number</label>
                        <input  value="<?php echo $stationNumber; ?>" class="form-control" name="station_number" placeholder="station number">
                    </div>
                </div>
            
                <div class="col-sm-12">
                    <button type="submit" name="update" class="btn btn-success">
                        Update
                    </button>
                    <a href="list-criminal-record.php" class="btn btn-primary">All Criminal Records</a>
                </div>
            </form>

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'include/footer.php';?>

</body>

</html>