<?php 
$title = "Edit Criminal Personal Info";
include 'include/head.php';
$editId = $_GET['id'];
$errors =array();
$sql = "SELECT * FROM criminal_personal_info WHERE id = $editId";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $firstName = $row['first_name'];
    $middleName = $row['middle_name'];
    $lastName = $row['last_name'];   
    $Gender = $row['gender'];
    $dateOfBirth = $row['date_of_birth'];
    $tempAddress = $row['temp_address'];
    $permaAddress = $row['perma_address'];
    $nationality = $row['nationality'];
    $religion = $row['religion'];
    $citizenshipNo = $row['citizenship_no'];
    $citizenshipIssueDate = $row['citizenship_issue_date'];
    $citizenshipIssueDistrict = $row['citizenship_issue_district'];
}
if (isset($_POST['update'])) { 
    $Name = $_POST['first_name'];
    $Middle = $_POST['middle_name'];
    $LastName = $_POST['last_name'];
    $Gender = $_POST['gender'];
    $dateOfBirth = $_POST['date_of_birth'];
    $tempAddress = $_POST['temp_address'];
    $permaAddress = $_POST['perma_address'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $citizenshipNo = $_POST['citizenship_no'];
    $citizenshipIssueDate = $_POST['citizenship_issue_date'];
    $citizenshipIssueDistrict = $_POST['citizenship_issue_district'];

    if (empty($Name)){
        array_push($errors,"Name Type is Required");
    }
    
    if (empty($LastName)){
        array_push($errors,"LastName Description is Required");
    }
    if (empty($Gender)){
        array_push($errors,"Gender Type is Required");
    }
    if (empty($dateOfBirth)){
        array_push($errors,"dateOfBirth Date is Required");
    }
    if (empty($tempAddress)){
        array_push($errors,"tempAddress Case Number is Required");
    }
    if (empty($permaAddress)){
        array_push($errors,"permaAddress File is Required");
    }
    if (empty($nationality)){
        array_push($errors,"nationality Status is Required");
    }
    if (empty($religion)){
        array_push($errors,"religion End Date is Required");
    }
    if (empty($citizenshipNo)){
        array_push($errors,"citizenshipNo End Date is Required");
    }
    if (empty($citizenshipIssueDate)){
        array_push($errors,"citizenshipIssueDate End Date is Required");
    }
    if (empty($citizenshipIssueDistrict)){
        array_push($errors,"citizenshipIssueDistrict End Date is Required");
    }
   
    if (count($errors) == 0){
        $sql = "UPDATE criminal_personal_info SET first_name ='". $Name."', middle_name = '".$Middle. "', last_name ='". $LastName."',gender ='". $Gender."', date_of_birth = '".$dateOfBirth. "', temp_address ='". $tempAddress."',perma_address ='". $permaAddress."', nationality = '".$nationality. "', religion ='". $religion."',citizenship_no ='". $citizenshipNo."', citizenship_issue_date ='". $citizenshipIssueDate."',citizenship_issue_district ='". $citizenshipIssueDistrict."' WHERE id = '". $editId."'";
        if (mysqli_query($conn, $sql)) {
            $success = " Criminal Personal Info  Updates Created Successfully !";
        } else {
            echo mysqli_error($conn);
        }
        mysqli_close($conn);
    }
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
                    <h2 class="page-header">Edit Criminal Personal Info</h2>
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

            <form action="edit-criminal-personal-info.php?id=<?php echo $editId;?>" method="post">
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>First Name</label>
                        <input value="<?php echo $firstName; ?>" class="form-control" name="first_name" placeholder="First Name">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input  value="<?php echo $middleName; ?>" class="form-control" name="middle_name" placeholder="Middle Name">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input  value="<?php echo $lastName; ?>" class="form-control" name="last_name" placeholder="Last Name">
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                                </select>

                            </div>
                </div>
                    <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input  value="<?php echo $dateOfBirth; ?>" class="form-control" name="date_of_birth" placeholder="date_of_birth">
                    </div>
                    </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Temporary Address</label>
                        <input  value="<?php echo $tempAddress; ?>" class="form-control" name="temp_address" placeholder="Temporary Address">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Permanent Address</label>
                        <input  value="<?php echo $permaAddress; ?>" class="form-control" name="perma_address" placeholder="Permanent Address">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Nationality</label>
                        <input  value="<?php echo $nationality; ?>" class="form-control" name="nationality" placeholder="Nationality">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Religion</label>
                        <input  value="<?php echo $religion; ?>" class="form-control" name="religion" placeholder="Religion">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Citizenship No</label>
                        <input  value="<?php echo $citizenshipNo; ?>" class="form-control" name="citizenship_no" placeholder="citizenship_no">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>citizenship Issue Date</label>
                        <input  value="<?php echo $citizenshipIssueDate; ?>" class="form-control" name="citizenship_issue_date" placeholder="citizenshipIssueDate">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>citizenship Issue District</label>
                        <input  value="<?php echo $citizenshipIssueDistrict; ?>" class="form-control" name="citizenship_issue_district" placeholder="citizenshpIssueDistrict">
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" name="update" class="btn btn-success">
                        Update
                    </button>
                    <a href="list-criminal-record.php" class="btn btn-primary">All Criminal Personal Information</a>
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