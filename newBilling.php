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
    $conn = mysqli_connect("localhost","root","","omsdb");
    if (!$conn){
        die("Database Connection Error : " . mysqli_connect_error());
    }
    $billingDate = mysqli_real_escape_string($conn,$_POST['billDate']);
    $transplantID = mysqli_real_escape_string($conn,$_POST['tPlantID']);
    $patientNumber = mysqli_real_escape_string($conn,$_POST['patNumber']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $consultationFees = mysqli_real_escape_string($conn,$_POST['consFees']);
    $laboratoryFees = mysqli_real_escape_string($conn,$_POST['labFees']);
    $transplantCharges = mysqli_real_escape_string($conn,$_POST['tCharges']);

    $sql = "insert into billing(billingDate,transplantId,patientNumber,
                                firstName,middleName,lastName,
                                consultationFees,labFees,transplantFees)
                                values ('$billingDate','$transplantID','$patientNumber',
                                        '$firstName','$middleName','$lastName',
                                        '$consultationFees','$laboratoryFees','$transplantCharges')";
    if ($conn->query($sql) == true){
        print "<p>Invoice posted successfully</p>";
        print "<a href='billing.php' class='btn btn-outline-primary'>Add New Invoice</a>";
        print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        print "<a href= 'printoutInvoice.php' class='btn btn-outline-info'>Print Invoice</a>";
    }
    else{
        print "<p>Invoice posting not successful</p>";
        print "<a href='billing.php' class='btn btn-danger'>Try Again.</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>