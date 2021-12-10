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
    $receiptDate = mysqli_real_escape_string($conn,$_POST['rcptDate']);
    $billingID = mysqli_real_escape_string($conn,$_POST['billID']);
    $patientNumber = mysqli_real_escape_string($conn,$_POST['patNumber']);
    $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
    $consultationFees = mysqli_real_escape_string($conn,$_POST['consFees']);
    $laboratoryFees = mysqli_real_escape_string($conn,$_POST['labFees']);
    $transplantCharges = mysqli_real_escape_string($conn,$_POST['tCharges']);
    $totAmount = mysqli_real_escape_string($conn,$_POST['totAmount']);
    $amountPaid = mysqli_real_escape_string($conn,$_POST['amntPaid']);

    $sql = "insert into receipt(receipt_date,billing_id,patient_id,
                                first_name,middle_name,last_name,
                                consultation_fees,lab_fees,transplant_charges,
                    total_amount,amount_paid)
                                values ('$receiptDate','$billingID','$patientNumber',
                                        '$firstName','$middleName','$lastName',
                                        '$consultationFees','$laboratoryFees','$transplantCharges',
                                        '$totAmount','$amountPaid')";
    if ($conn->query($sql) == true){
        print "<p>Payment posted successfully</p>";
        print "<a href='receipt.php' class='btn btn-outline-primary'>Add New Receipt</a>";
        print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        print "<a href= 'printoutReceipt.php' class='btn btn-outline-info'>Print Receipt</a>";
    }
    else{
        print "<p>Payment posting not successful</p>";
        print "<a href='receipt.php' class='btn btn-danger'>Try Again.</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>