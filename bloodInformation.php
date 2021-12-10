<html>
<head>
    <title>Blood Information</title>
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
    <h3 class="text-center">Blood Information</h3>
</div>
<hr>
<div class="container">
    <form action="newBlood.php" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Blood Group</b></label>
                        </td>
                        <td>
                            <select name="bloodGroup" id="" class="form-control" required>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Issue Date</b></label>
                        </td>
                        <td>
                            <input type="date" name="issueDate" class="form-control" required>
                        </td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Owner ID/Passport Number</b></label>
                        </td>
                        <td>
                            <input type="text" name="ownerIDPass" class="form-control" required>
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
                            <label for=""><b>Age</b></label>
                        </td>
                        <td>
                            <input type="number" name="age" class="form-control" required min="0" max="120">
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
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Email Address</b></label>
                        </td>
                        <td>
                            <input type="email" name="emailAddress" class="form-control" required>
                        </td>
                    </div>
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
                            <label for=""><b>NOK Telephone NUmber</b></label>
                        </td>
                        <td>
                            <input type="tel" name="nokPhoneNumber" class="form-control" required>
                        </td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>NOK Relationship</b></label>
                        </td>
                        <td>
                            <input type="text" name="nokRelationship" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">

                    </div>

                </div>
            </tr>
            <tr>

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