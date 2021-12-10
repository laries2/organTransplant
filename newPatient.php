<html>
<head>
    <title>Success</title>
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
    <h3 class="text-center">Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost","root","","organTransplant");
    if (!$conn){
        die("Database Connection Error : " . mysqli_connect_error());
    }
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
    $nokRelationship = mysqli_real_escape_string($conn,$_POST['nokRelationship']);
    $sql = "insert into patient_details(attendance_date,first_name,middle_name,last_name,gender,marital_status,birth_date,age,physical_location,county_of_birth,telephone_number,email,next_of_kin,nok_phone_number,nok_relationship)
values ('$attendanceDate','$firstName','$middleName','$lastName','$gender','$maritalStatus','$birthDate','$age','$physicalLocation','$birthCounty','$telephoneNumber','$emailAddress','$nextOfKin','$nokTelNumber','$nokRelationship')";
    if ($conn->query($sql) == true){
        print "<p>Patient details added successfully</p>";
        print "<a href='patientDetails.php' class='btn btn-outline-primary'>Add New Patient</a>";
    }
    else{
        print "<p>Patient details not added</p>";
        print "<a href='patientDetails.php' class='btn btn-danger'>Try Again.</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>