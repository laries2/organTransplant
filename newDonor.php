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
    $idPass = mysqli_real_escape_string($conn,$_POST['idPassNumber']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $maritalStatus = mysqli_real_escape_string($conn,$_POST['mStatus']);
    $birthDate = mysqli_real_escape_string($conn,$_POST['bDate']);
    $age = mysqli_real_escape_string($conn,$_POST['age']);
    $telephoneNumber = mysqli_real_escape_string($conn,$_POST['telNumber']);
    $email = mysqli_real_escape_string($conn,$_POST['emailAddress']);
    $nextOfKin = mysqli_real_escape_string($conn,$_POST['nok']);
    $nokTel = mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
    $nokRShip = mysqli_real_escape_string($conn,$_POST['nokRelationship']);
    $donorHivStatus = mysqli_real_escape_string($conn,$_POST['donorHivStatus']);
    $donorHealthStatus = mysqli_real_escape_string($conn,$_POST['donorHStatus']);
    $itemToDonate = mysqli_real_escape_string($conn,$_POST['donateItem']);
    $sql = "insert into donor_information(attendance_date,id_number,first_name,middle_name,last_name,
                              gender,marital_status,birth_date,age,telephone_number,email,next_of_kin,
                              nok_phone_number,nok_relationship,patient_hiv_status,patient_health_status,
                              item_to_donate)
                              values ('$attendanceDate','$idPass','$firstName','$middleName','$lastName',
                                      '$gender','$maritalStatus','$birthDate','$age','$telephoneNumber',
                                      '$email','$nextOfKin','$nokTel','$nokRShip','$donorHivStatus',
                                      '$donorHealthStatus','$itemToDonate')";
    if ($conn->query($sql) == true){
        print "<p>Donor Information added successfully</p>";
        print "<a href='donorInformation.php' class='btn btn-outline-primary'>Add New Donor</a>";
    }
    else{
        print "<p>Donor information not added</p>";
        print "<a href='donorInformation.php' class='btn btn-danger'>Try Again.</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>