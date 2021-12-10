<html>
<head>
    <title>Patient Details Report</title>
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
    <h3 class="text-center">Patient Details Report</h3>
</div>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-responsive-sm">
        <tr>
            <th>Patient Number</th>
            <th>Attendance Date</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Marital Status</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Physical Location</th>
            <!--        <th>County of Birth</th>-->
            <!--        <th>Telephone Number</th>-->
            <!--        <th>Email Address</th>-->
            <!--        <th>Next of Kin</th>-->
            <!--        <th>NOK Telephone Number</th>-->
            <!--        <th>NOK Relationship</th>-->
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "organTransplant");
        if (!$conn) {
            die("Database Connection Error : " . mysqli_connect_error());
        }
        $userGroup = mysqli_real_escape_string($conn,$_POST['usergroup']);
        $sql = "select * from patient_details";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)// If the table courses has data
        {
            while ($row = $result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $row['patient_number'];?></td>
                    <td><?php echo $row['attendance_date'];?></td>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['middle_name'];?></td>
                    <td><?php echo $row['last_name'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['marital_status'];?></td>
                    <td><?php echo $row['birth_date'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['physical_location'];?></td>
                    <!--                <td>--><?php //echo $row['county_of_birth'];?><!--</td>-->
                    <!--                <td>--><?php //echo $row['telephone_number'];?><!--</td>-->
                    <!--                <td>--><?php //echo $row['email'];?><!--</td>-->
                    <!--                <td>--><?php //echo $row['next_of_kin'];?><!--</td>-->
                    <!--                <td>--><?php //echo $row['nok_phone_number'];?><!--</td>-->
                    <!--                <td>--><?php //echo $row['nok_relationship'];?><!--</td>-->
                </tr>
                <?php
            }
        }
        mysqli_close($conn);
        ?>
    </table>
</div>
</body>
</html>


