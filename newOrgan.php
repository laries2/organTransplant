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
    $organName = mysqli_real_escape_string($conn,$_POST['orgName']);
    $organStatus = mysqli_real_escape_string($conn,$_POST['orgStatus']);
    $issueDate = mysqli_real_escape_string($conn,$_POST['issueDate']);
    $idPass = mysqli_real_escape_string($conn,$_POST['ownerIDPass']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $age = mysqli_real_escape_string($conn,$_POST['age']);
    $telephoneNumber = mysqli_real_escape_string($conn,$_POST['telNumber']);
    $email = mysqli_real_escape_string($conn,$_POST['emailAddress']);
    $nextOfKin = mysqli_real_escape_string($conn,$_POST['nok']);
    $nokTel = mysqli_real_escape_string($conn,$_POST['nokPhoneNumber']);
    $nokRShip = mysqli_real_escape_string($conn,$_POST['nokRelationship']);

    $sql = "insert into organ_information(organ_name,organ_status,issue_date,owner_id_number,first_name,middle_name,last_name,
                              age,telephone_number,email,next_of_kin,nok_phone_number,nok_relationship)
                              values ('$organName','$organStatus','$issueDate','$idPass','$firstName','$middleName',
                                      '$lastName','$age','$telephoneNumber','$email','$nextOfKin','$nokTel','$nokRShip')";
    if ($conn->query($sql) == true){
        print "<p>Organ Information added successfully</p>";
        print "<a href='organInformation.php' class='btn btn-outline-primary'>Add New Organ</a>";
    }
    else{
        print "<p>Organ information not added</p>";
        print "<a href='organInformation.php' class='btn btn-danger'>Try Again.</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>