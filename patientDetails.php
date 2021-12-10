<html>
<head>
    <title>Patient Details</title>
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
    <h3 class="text-center">Patient Details</h3>
</div>
<hr>
<div class="container">
    <form action="newPatient.php" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Attendance Date</b></label>
                        </td>
                        <td>
                            <input type="date" name="attDate" class="form-control" required>
                        </td>
                    </div>
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
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Last Name</b></label>
                        </td>
                        <td>
                            <input type="text" name="lName" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Gender</b></label>
                        </td>
                        <td>
                            <select name="gender" id="" class="form-control" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Transgender">Transgender</option>
                            </select>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Marital Status</b></label>
                        </td>
                        <td>
                            <select name="mStatus" id="" class="form-control" required>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                            </select>
                        </td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Birth Date</b></label>
                        </td>
                        <td>
                            <input type="date" name="bDate" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Age</b></label>
                        </td>
                        <td>
                            <input type="number" name="age" class="form-control" required min="0" max="120">
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Physical Location</b></label>
                        </td>
                        <td>
                            <input type="text" name="pLocation" class="form-control" required>
                        </td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>County of birth</b></label>
                        </td>
                        <td>
                            <select name="countyBirth" id="" class="form-control" required>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Kisumu">Kisumu</option>
                                <option value="Uasin Gishu">Uasin Gishu</option>
                                <option value="Meru">Meru</option>
                                <option value="Embu">Embu</option>
                                <option value="Garissa">Garissa</option>
                                <option value="Mandera">Mandera</option>
                                <option value="Turkana">Turkana</option>
                                <option value="Laikipia">Laikipia</option>
                                <option value="Machakos">Machakos</option>
                            </select>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Telephone Number</b></label>
                        </td>
                        <td>
                            <input type="tel" name="telNumber" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Email Address</b></label>
                        </td>
                        <td>
                            <input type="text" name="email" class="form-control" required>
                        </td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Next of Kin (NOK)</b></label>
                        </td>
                        <td>
                            <input type="text" name="nok" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>NOK Phone Number</b></label>
                        </td>
                        <td>
                            <input type="tel" name="nokTelNumber" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>NOK Relationship</b></label>
                        </td>
                        <td>
                            <select name="nokRelationship" id="" class="form-control" required>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Aunt">Aunt</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Friend">Friend</option>
                                <option value="Relative">Relative</option>
                                <option value="Others">Others</option>
                            </select>
                        </td>
                    </div>
                </div>
            </tr>
        </table>
        <div style="display: flex;align-items: center;justify-content: center;">
            <button class="btn btn-outline-success" type="submit">Add New</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="searchpatientDetailsU.php" class="btn btn-outline-primary">Update</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="searchpatientDetailsD.php" class="btn btn-outline-danger">Delete</a>
        </div>
    </form>
</div>
</body>
</html>