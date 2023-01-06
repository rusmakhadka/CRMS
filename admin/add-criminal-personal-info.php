<?php 
$title = "Add Criminal Personal Info"; 
include 'include/head.php';
$errors = array();

if (isset($_POST['save'])) {
    $firstName = $_POST['first_name'];
    $middleName = $_POST['middle_name'];  
    $lastName = $_POST['last_name'];  
    $Gender = $_POST['gender'];
    $Dateofbirth = $_POST['date_of_birth'];
    $Tempaddress = $_POST['temp_address'];
    $Permaaddress = $_POST['perma_address'];
    $Nationality = $_POST['nationality'];
    $Religion = $_POST['religion'];
    $Citizenshipno = $_POST['citizenship_no'];
    $Citizenshipissuedate = $_POST['citizenship_issue_date'];
    $Citizenshipissuedistrict = $_POST['citizenship_issue_district'];



    if (empty($firstName)){
        array_push($errors,"First Name is Required");
    }
    
    if (empty($lastName)){
        array_push($errors,"Last Name is Required");
    }
    if (empty($Gender)){
        array_push($errors,"Gender is Required");
    }
    if (empty($Dateofbirth)){
        array_push($errors,"Date Of Birth is Required");
    }
    if (empty($Tempaddress)){
        array_push($errors,"Temp Address is Required");
    }
    if (empty($Permaaddress)){
        array_push($errors,"Perma Address is Required");
    }
    if (empty($Nationality)){
        array_push($errors,"Nationality is Required");
    }
    if (empty($Religion)){
        array_push($errors,"Religion is Required");
    }
    if (empty($Citizenshipno)){
        array_push($errors,"Citizenship Number is Required");
    }
    if (empty($Citizenshipissuedate)){
        array_push($errors,"Citizenship Issue Date is Required");
    }
    if (empty($Citizenshipissuedistrict)){
        array_push($errors,"Citizenship Issue District is Required");
    }
    
    
    $sql = "INSERT INTO criminal_personal_info (first_name,middle_name,last_name,gender,date_of_birth,temp_address,perma_address,nationality,religion,citizenship_no,citizenship_issue_date,citizenship_issue_district) VALUE('$firstName','$middleName','$lastName', '$Gender' ,'$Dateofbirth','$Tempaddress','$Permaaddress','$Nationality','$Religion','$Citizenshipno','$Citizenshipissuedate', '$Citizenshipissuedistrict')";
    
    if (count($errors) == 0){
    mysqli_query($conn, $sql);
    $_SESSION['success'] = "Personal Info Created Successfully !";
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
                    <h2 class="page-header">Add Criminal Personal Info</h2>
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

            <form action="add-criminal-personal-info.php" method="post">
                <div class="col-lg-6 col-md-8">
                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control" name="first_name" placeholder="First Name">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="form-group">
                    <sup class="text-danger">*</sup>
                        <label>Middle Name</label>
                        <input class="form-control" name="middle_name" placeholder="Middle Name">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control" name="last_name" placeholder="Last Name">
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
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_of_birth" class="label-control">
                                Date of Birth
                            </label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Temporary Address </label>
                        <input class="form-control" name="temp_address" placeholder="tempaddress">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Permanent Address </label>
                        <input class="form-control" name="perma_address" placeholder="permaaddress">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Nationality </label>
                        <input class="form-control" name="nationality" placeholder="nationality">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Religion </label>
                        <input class="form-control" name="religion" placeholder="Religion">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Citizenship Number </label>
                        <input class="form-control" name="citizenship_no" placeholder="Citizenship Number">
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_of_birth" class="label-control">
                                Citizenship Issue Date
                            </label>
                            <input type="date" name="citizenship_issue_date" id="citizenship_issue_date" class="form-control">
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Citizenship Issue District </label>
                        <input class="form-control" name="citizenship_issue_district" placeholder="Citizenship Issue District">
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

