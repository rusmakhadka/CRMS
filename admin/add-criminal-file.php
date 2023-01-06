<?php 
$title = "Add Criminal File"; 
include 'include/head.php';
$errors = array();
$infoId = $_GET['id'];

if (isset($_POST['save'])) {
    $Offensetype = $_POST['offense_type'];
    $Offensedescription = $_POST['offense_description'];  
    $punishmentType = $_POST['punishment_type'];  
    $punishmentDate = $_POST['punishment_date'];
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
   
    
    
    $sql = "INSERT INTO criminal_record (criminal_personal_info_id, offense_type,offense_description,punishment_type,punishment_date_start,court_case_number,case_file,current_status,punishment_date_end,prison_location,prison_contact,station_name,station_address,station_number) VALUE('$infoId','$Offensetype','$Offensedescription','$punishmentType','$punishmentDate','$courtcasenumber','$casefile','$currentStatus','$punishmentdateend','$prisonLocation','$prisonContact','$stationName','$stationAddress','$stationNumber')";
    
    if (count($errors) == 0){
    mysqli_query($conn, $sql);
    $_SESSION['success'] = "Criminal Files Created Successfully !";
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
                <div class="col-lg-6">
                    <h2 class="page-header">Add Criminal File</h2>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-sm-6">
            
            <?php 
                if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success">
                        <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success'])
                         ?>
                    </div>
                    
                <?php } ?>

                <?php 
                if (count($errors)> 0 ){ 
                 foreach ($errors as $error) {  
                ?> 
                    <div class="alert alert-danger">
                        <?php echo $error;  
                        ?>
                    </div>
                <?php } } ?>
            </div>

            <form action="add-criminal-file.php?id=<?php echo $infoId;?>" method="post">
                <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>Offense Type</label>
                        <input class="form-control" name="offense_type" placeholder="offense_type">
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="form-group">
                        <label>Offense Description</label>
                        <input class="form-control" name="offense_description" placeholder="Offense Description">
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_of_birth" class="label-control">
                                Offense Date
                            </label>
                            <input type="date" name="offense_date" id="offense_date" class="form-control">
                        </div>
                    </div>
                <div class="col-lg-2 col-md-4">
                    <div class="form-group">
                        <label>Punishment Type</label>
                        <input class="form-control" name="punishment_type" placeholder="Punishment Type">
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_of_birth" class="label-control">
                                Punishment Date
                            </label>
                            <input type="date" name="punishment_date" id="punishment_date" class="form-control">
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Court Case Number </label>
                        <input class="form-control" name="court_case_number" placeholder="Court Case Number">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Case File </label>
                        <input class="form-control" name="case_file" placeholder="Case File">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Current Status </label>
                        <input class="form-control" name="current_status" placeholder="Current Status">
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_of_birth" class="label-control">
                                Punishment Date End
                            </label>
                            <input type="date" name="punishment_date_end" id="punishment_date_end" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Prison Location</label>
                        <input class="form-control" name="prison_location" placeholder="prison location">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Prison Contact</label>
                        <input class="form-control" name="prison_contact" placeholder="prisoncontact">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>station Name</label>
                        <input  class="form-control" name="station_name" placeholder="stationname">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Station Address</label>
                        <input  class="form-control" name="station_address" placeholder="station address ">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Station Number</label>
                        <input  class="form-control" name="station_number" placeholder="station number">
                    </div>
                </div>
                <div class="col-sm-4">
                    <button type="submit" name="save" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="list-criminal-record.php" class="btn btn-danger">All Criminal Record</a>
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

