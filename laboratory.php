<?php
$conn=mysqli_connect("localhost","root","","organTransplant");
if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Removing SQL Injection
$doctorAttendanceID = mysqli_real_escape_string($conn,$_POST['docAttendanceId']);
$sql="SELECT * FROM doctors WHERE doctor_attendance_id='$doctorAttendanceID'";
//Execute the query in $sql above
$result=$conn->query($sql);
if ($result->num_rows > 0)// If the table courses has data
{
while ($row=$result->fetch_assoc())
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laboratory</title>
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
    <h3 class="text-center">Laboratory</h3>
</div>
<hr>
<div class="container">
    <form action="" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <div class="row">
                    <div class="col-sm-6">
                        <td class="text-right">
                            <label for=""><b>Doctor ID</b></label>
                        </td>
                        <td>
                            <input type="number" name="docID" class="form-control" required value="<?php echo $row['doctor_attendance_id'];?>">
                        </td>
                    </div>
                    <div class="col-sm-6">
                        <td class="text-right">
                            <label for=""><b>Patient/ID Number</b></label>
                        </td>
                        <td>
                            <input type="number" name="patIDNumber" class="form-control" required value="<?php echo $row['pat_id_number'];?>">
                        </td>
                    </div>

                </div>
            </tr>
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
                            <input type="text" name="fName" class="form-control" required value="<?php echo $row['first_name'];?>">
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Middle Name</b></label>
                        </td>
                        <td>
                            <input type="text" name="mName" class="form-control" required value="<?php echo $row['middle_name'];?>">
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
                            <input type="text" name="lName" class="form-control" required value="<?php echo $row['last_name'];?>">
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Gender</b></label>
                        </td>
                        <td>
                            <input type="text" name="gender" class="form-control" required value="<?php echo $row['gender'];?>">
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Marital Status</b></label>
                        </td>
                        <td>
                            <input type="text" name="mStatus" class="form-control" required value="<?php echo $row['marital_status'];?>">
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
                            <input type="date" name="bDate" class="form-control" required value="<?php echo $row['birth_date'];?>">
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Age</b></label>
                        </td>
                        <td>
                            <input type="number" name="age" class="form-control" required min="0" max="120" value="<?php echo $row['age'];?>">
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Physical Location</b></label>
                        </td>
                        <td>
                            <input type="text" name="pLocation" class="form-control" required value="<?php echo $row['physical_location'];?>">
                        </td>
                    </div>

            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>County of birth</b></label>
                        </td>
                        <td>
                            <input type="text" name="birthCounty" class="form-control" required value="<?php echo $row['county_of_birth'];?>">
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Temperature</b></label>
                        </td>
                        <td>
                            <input type="text" name="temp" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Weight(Kg)</b></label>
                        </td>
                        <td>
                            <input type="text" name="weight" class="form-control" required>
                        </td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Any Complications?</b></label>
                        </td>
                        <td>
                            <input type="text" name="anyComplications" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Any Lifestyle Disease?</b></label>
                        </td>
                        <td>
                            <input type="text" name="anyLifestyleDisease" class="form-control" required>
                        </td>
                    </div>
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
                </div>
            </tr>
            <tr>
                <div class="row">
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>HIV Test Results</b></label>
                        </td>
                        <td>
                            <select name="hivTestResults" id="" class="form-control" required>
                                <option value="Positive">Positive</option>
                                <option value="Negative">Negative</option>
                            </select>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Blood Test Results</b></label>
                        </td>
                        <td>
                            <input type="text" name="bloodTestResults" class="form-control" required>
                        </td>
                    </div>
                    <div class="col-sm-4">
                        <td class="text-right">
                            <label for=""><b>Lab Technician on duty</b></label>
                        </td>
                        <td>
                            <select name="labTechOnDuty" id="" class="form-control" required>
                                <option value="Lameck">Lameck</option>
                                <option value="Gladys">Gladys</option>
                                <option value="Ann">Ann</option>
                                <option value="Brandon">Brandon</option>
                            </select>
                        </td>
                    </div>
                    <div class="col-sm-8" style="display: flex;align-items: center;justify-content: center;">
                        &nbsp;
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
    <?php
}
}
mysqli_close($conn);
?>