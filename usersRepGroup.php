<html>
<head>
    <title>Users Report by User Group</title>
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
    <h3 class="text-center">Users Report by User Group</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="usersReportUserGroup.php" method="post">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">User Group : </label>
                        </td>
                        <td>
                            <select name="usergroup" id="" class="form-control" required>
                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "organTransplant");
                                if (!$conn) {
                                    die("Database Connection Error : " . mysqli_connect_error());
                                }
                                $sql = "select distinct user_group from users";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0)// If the table courses has data
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        ?>
                                        <option value="<?php echo $row['user_group'];?>"><?php echo $row['user_group'];?></option>
                                        <?php
                                    }
                                }
                                mysqli_close($conn);
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button type="submit" class="btn btn-success">View Report</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>