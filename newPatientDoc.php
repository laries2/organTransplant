<!DOCTYPE html>
<html lang="en">
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
    $conn = mysqli_connect("localhost","root","","bloodlab");
    if (!$conn){
        die("Database Connection Error : " . mysqli_connect_error());
    }
    $patientIdNumber = mysqli_real_escape_string($conn,$_POST['patIDNumber']);
    $attendanceDate = mysqli_real_escape_string($conn,$_POST['attDate']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $maritalStatus = mysqli_real_escape_string($conn,$_POST['mStatus']);
    $birthDate = mysqli_real_escape_string($conn,$_POST['bDate']);
    $age = mysqli_real_escape_string($conn,$_POST['age']);
    $physicalLocation = mysqli_real_escape_string($conn,$_POST['pLocation']);
    $countyOfBirth = mysqli_real_escape_string($conn,$_POST['birthCounty']);
    $telephoneNumber = mysqli_real_escape_string($conn,$_POST['telNumber']);
    $emailAddress = mysqli_real_escape_string($conn,$_POST['email']);
    $nextOfKin = mysqli_real_escape_string($conn,$_POST['nok']);
    $nokPhoneNumber = mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
    $nokRelationship = mysqli_real_escape_string($conn,$_POST['nokRelationship']);
    $temperature = mysqli_real_escape_string($conn,$_POST['temp']);
    $weightKg = mysqli_real_escape_string($conn,$_POST['weight']);
    $anyComplications = mysqli_real_escape_string($conn,$_POST['anyComplications']);
    $anyLifestyleDisease = mysqli_real_escape_string($conn,$_POST['anyLifestyleDisease']);
    $fitLabTest = mysqli_real_escape_string($conn,$_POST['fitLabTest']);
    $doctorOnDuty = mysqli_real_escape_string($conn,$_POST['docOnDuty']);
    $sql = "insert into doctors(pat_id_number,attendance_date,first_name,middle_name,last_name,gender,
                    marital_status,birth_date,age,physical_location,county_of_birth,telephone_number,
                    email,next_of_kin,nok_phone_number,nok_relationship,temperature,weight_kg,
                    any_complications,any_lifestyle_disease,fit_for_lab_test,doctor_on_duty)
                    values ('$patientIdNumber','$attendanceDate','$firstName','$middleName',
                            '$lastName','$gender','$maritalStatus','$birthDate','$age','$physicalLocation',
                            '$countyOfBirth','$telephoneNumber','$emailAddress','$nextOfKin','$nokPhoneNumber',
                            '$nokRelationship','$temperature','$weightKg','$anyComplications','$anyLifestyleDisease',
                            '$fitLabTest','$doctorOnDuty')";
    if ($conn -> query($sql) == true){
        print "<p>Consultation details added successfully</p>";
        print "<a href='doctors_dashboard.php' class='btn btn-outline-primary'>Add new consultation</a>";
    }
    else{
        print "<p>Consultation details not added</p>";
        print "<a href='doctors_dashboard.php' class='btn btn-outline-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>