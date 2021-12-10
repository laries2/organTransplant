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
    <table class="table table-bordered table-striped table-responsive-sm">
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>User Group</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "organTransplant");
        if (!$conn) {
            die("Database Connection Error : " . mysqli_connect_error());
        }
        $userGroup = mysqli_real_escape_string($conn,$_POST['usergroup']);
        $sql = "select * from users where user_group = '$userGroup'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)// If the table courses has data
        {
            while ($row = $result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $row['user_id'];?></td>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['middle_name'];?></td>
                    <td><?php echo $row['last_name'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['user_group'];?></td>
                </tr>
                <?php
            }
        }
        mysqli_close($conn);
        ?>
    </table>
    <div class="buttons">
        <a href="usersRepGroup.php" class="btn btn-info">Select another User Group</a>
    </div>
</div>
</body>
</html>


