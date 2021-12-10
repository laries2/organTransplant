<html>
<head>
    <title>Transplant</title>
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
    <h3 class="text-center">Transplant</h3>
</div>
<hr>
<div class="container">
    <form action="" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Transplant Date</b></label>
                        </td>
                        <td>
                            <input type="date" name="tPlantDate" class="form-control" required>
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
                            <label for=""><b>Organ Name</b></label>
                        </td>
                        <td>
                            <input type="text" name="orgName" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Organ Status</b></label>
                        </td>
                        <td>
                            <select name="orgStatus" id="" class="form-control" required>
                                <option value="Healthy">Healthy</option>
                                <option value="Not Healthy">Not Healthy</option>
                            </select>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Blood Group</b></label>
                        </td>
                        <td>
                            <select name="bGroup" id="" class="form-control" required>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </td>
                    </div>

                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Any Match?</b></label>
                        </td>
                        <td>
                            <select name="anyMatch" id="" class="form-control" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Transplant Status</b></label>
                        </td>
                        <td>
                            <select name="tStatus" id="" class="form-control" required>
                                <option value="Successful">Successful</option>
                                <option value="Not Successful">Not Successful</option>
                            </select>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Transplant Doctor</b></label>
                        </td>
                        <td>
                            <select name="transDoctor" id="" class="form-control" required>
                                <option value="Dr. Mbugua">Dr. Mbugua</option>
                                <option value="Dr. Kevin">Dr. Kevin</option>
                                <option value="Dr. Gikonyo">Dr. Gikonyo</option>
                                <option value="Dr. Okal">Dr. Okal</option>
                                <option value="Dr. Mogire">Dr. Mogire</option>
                                <option value="Dr. Mwangi">Dr. Mwangi</option>
                                <option value="Dr. Johnstone">Dr. Johnstone</option>
                                <option value="Dr. Stephen">Dr. Stephen</option>
                                <option value="Dr. Dorine">Dr. Dorine</option>
                                <option value="Dr. Victoria">Dr. Victoria</option>
                            </select>
                        </td>
                    </div>
                </div>
            </tr>
            </div>
</td>
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