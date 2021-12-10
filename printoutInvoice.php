<?php
$conn=mysqli_connect("localhost","root","","organTransplant");
if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
$sql="SELECT * FROM billing order by billing_id asc limit 1";
//Execute the query in $sql above
$result=$conn->query($sql);
if ($result->num_rows > 0)// If the table courses has data
{
    while ($row=$result->fetch_assoc())
    {
        ?>
        <html>
        <head>
            <title>Invoice</title>
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
            <h3 class="text-center">Invoice</h3>
        </div>
        <hr>
        <div class="container">
            <form action="" method="post">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <div class="row">
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Invoice Number</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['billing_id']?></label>
                                </td>
                            </div>
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Invoice Date</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['billing_date']?></label>
                                </td>
                            </div>
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Transplant ID</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['transplant_ID']?></label>
                                </td>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="row">
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Patient Number</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['patient_number']?></label>
                                </td>
                            </div>
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>First Name</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['first_name']?></label>
                                </td>
                            </div>
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Middle Name</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['middle_name']?></label>
                                </td>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="row">
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Last Name</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['last_name']?></label>
                                </td>
                            </div>
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Consultation Fees</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['consultation_fees']?></label>
                                </td>
                            </div>
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Laboratory Fees</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['lab_fees']?></label>
                                </td>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="row">
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Transplant Charges</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['transplant_fees']?></label>
                                </td>
                            </div>
                            <div class="col-sm-4">
                                <td class="text-right">
                                    <label for=""><b>Total Amount</b></label>
                                </td>
                                <td>
                                    <label for=""><?php echo $row['total_amount']?></label>
                                </td>
                            </div>
                            <div class="col-sm-4">

                            </div>
                        </div>
                    </tr>
                </table>
            </form>
        </div>
        </body>
        </html>
        <?php
    }
}
mysqli_close($conn);
?>