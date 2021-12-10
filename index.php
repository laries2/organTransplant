<html>
<head>
    <title>OTMIS Login</title>
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
    <h3 class="text-center">Organ Transplant Management Information System (OTMIS) Login</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" action="">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">Username : </label>
                        </td>
                        <td>
                            <input type="text" name="username" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Password : </label>
                        </td>
                        <td>
                            <input type="password" name="password" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">User Group : </label>
                        </td>
                        <td>
                            <select name="usergroup" id="usergroup" class="form-control" required>
                                <option value="Systems Administrator">Systems Administrator</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Front Office">Front Office</option>
                                <option value="Doctors">Doctors</option>
                                <option value="Laboratory">Laboratory</option>
                                <option value="Transplant">Transplant</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <input type="submit" name="submit" value="Login" class="btn btn-primary">
<!--                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                            <a href="users.php" class="btn btn-dark">New User</a>-->
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

<?php
session_start();

if(isset($_POST['submit'])){
    include 'db_connect.php';

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $usergroup = mysqli_real_escape_string($db,$_POST['usergroup']);

    $qry=mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='$usergroup'");
    $row = mysqli_fetch_array($qry,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username,$password and $usertype, table row must be 1 row

    if($count == 1) {

        if (!empty($username) && !empty($password) && !empty($usergroup=='Systems Administrator')){
            header("LOCATION:sysadmin_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && !empty($usergroup=='Accounts')){
            header("LOCATION:accounts_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && !empty($usergroup=='Front Office')){
            header("LOCATION:fOffice_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && !empty($usergroup=='Doctors')){
            header("LOCATION:doctors_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && !empty($usergroup=='Laboratory')){
            header("LOCATION:lab_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && !empty($usergroup=='Transplant')){
            header("LOCATION:transplant_dashboard.php");
        }

    }else
        {
        header("LOCATION:login_error.php");
    }
}
?>