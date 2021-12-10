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
    $transplantDate = mysqli_real_escape_string($conn,$_POST['tPlantDate']);
    $patientNumber = mysqli_real_escape_string($conn,$_POST['patNumber']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $organName = mysqli_real_escape_string($conn,$_POST['orgName']);
    $organStatus = mysqli_real_escape_string($conn,$_POST['orgStatus']);
    $bloodGroup = mysqli_real_escape_string($conn,$_POST['bGroup']);
    $anyMatch = mysqli_real_escape_string($conn,$_POST['anyMatch']);
    $transplantStatus = mysqli_real_escape_string($conn,$_POST['tStatus']);
    $transDoctor = mysqli_real_escape_string($conn,$_POST['transDoctor']);

    $sql = "insert into transplant(transplant_date,patient_number,first_name,middle_name,last_name,
                              organ_name,organ_status,blood_group,any_match,
                       transplant_status,transplant_doctor)
                              values ('$transplantDate','$patientNumber','$firstName','$middleName',
                                      '$lastName','$organName','$organStatus','$bloodGroup','$anyMatch',
                                      '$transplantStatus','$transDoctor')";
    if ($conn->query($sql) == true){
        print "<p>Transplant added successfully</p>";
        print "<a href='transplant.php' class='btn btn-outline-primary'>Add New Transplant</a>";
    }
    else{
        print "<p>Transplant not added</p>";
        print "<a href='transplant.php' class='btn btn-danger'>Try Again.</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>