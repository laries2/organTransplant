<html>
<head>
    <title>Billing</title>
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
    <h3 class="text-center">Billing</h3>
</div>
<hr>
<div class="container">
    <form action="newBilling.php" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Billing Date</b></label>
                        </td>
                        <td>
                            <input type="date" name="billDate" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Transplant ID</b></label>
                        </td>
                        <td>
                            <input type="number" name="tPlantID" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Patient Number</b></label>
                        </td>
                        <td>
                            <input type="number" name="patNumber" class="form-control" required>
                        </td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>First Name</b></label>
                        </td>
                        <td>
                            <input type="text" name="fName" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Middle Name</b></label>
                        </td>
                        <td>
                            <input type="text" name="mName" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Last Name</b></label>
                        </td>
                        <td>
                            <input type="text" name="lName" class="form-control" required>
                        </td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Consultation Fees</b></label>
                        </td>
                        <td>
                            <input type="number" name="consFees" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Laboratory Fees</b></label>
                        </td>
                        <td>
                            <input type="number" name="labFees" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Transplant Charges</b></label>
                        </td>
                        <td>
                            <input type="number" name="tCharges" class="form-control" required>
                        </td>
                    </div>
                </div>
            </tr>

        </table>
        <div style="display: flex;align-items: center;justify-content: center;">
            <button class="btn btn-outline-success" type="submit">Add New</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-outline-primary">Update</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-outline-danger">Delete</a>
        </div>
    </form>
</div>
</body>
</html>