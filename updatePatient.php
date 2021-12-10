<html>
<head>
    <title>Update Success</title>
    <link rel="icon" href="images/logo.webp">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/logo.webp" alt="Logo" width="150" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">Update Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost","root","","organTransplant");
    if (!$conn){
        die("Database Connection Error : " . mysqli_connect_error());
    }
    $patientNumber = mysqli_real_escape_string($conn,$_POST['patNumber']);
    $attendanceDate = mysqli_real_escape_string($conn,$_POST['attDate']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $maritalStatus = mysqli_real_escape_string($conn,$_POST['mStatus']);
    $birthDate = mysqli_real_escape_string($conn,$_POST['bDate']);
    $age = mysqli_real_escape_string($conn,$_POST['age']);
    $physicalLocation = mysqli_real_escape_string($conn,$_POST['pLocation']);
    $birthCounty = mysqli_real_escape_string($conn,$_POST['countyBirth']);
    $telephoneNumber = mysqli_real_escape_string($conn,$_POST['telNumber']);
    $emailAddress = mysqli_real_escape_string($conn,$_POST['email']);
    $nextOfKin = mysqli_real_escape_string($conn,$_POST['nok']);
    $nokTelNumber = mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
    $nokRelationship = mysqli_real_escape_string($conn,$_POST['nokRShip']);
    $sql = "update patient_details set attendance_date = '$attendanceDate',
first_name = '$firstName',middle_name = '$middleName',last_name = '$lastName',
gender = '$gender',marital_status = '$maritalStatus',birth_date = '$birthDate',
age = '$age',physical_location = '$physicalLocation',county_of_birth = '$birthCounty',
telephone_number = '$telephoneNumber',email = '$emailAddress',next_of_kin = '$nextOfKin',
nok_phone_number = '$nokTelNumber',nok_relationship = '$nokRelationship'
where patient_number = '$patientNumber'";
    if ($conn->query($sql) == true){
        print "<p>Patient details updated successfully</p>";
        print "<a href='patientDetails.php' class='btn btn-outline-primary'>Update another Patient</a>";
    }
    else{
        print "<p>Patient details not updated</p>";
        print "<a href='patientDetails.php' class='btn btn-danger'>Try Again.</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>