<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
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
    <h3 class="text-center">Register User</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newUser.php" method="post">
                <label for=""><b>First Name</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
                <br>
                <label for=""><b>Middle Name</b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required>
                <br>
                <label for=""><b>Last Name</b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required>
                <br>
                <label for=""><b>Username</b></label>
                <br>
                <input type="text" name="uName" class="form-control" placeholder="* Username Here" required>
                <br>
                <label for=""><b>Password</b></label>
                <br>
                <input type="password" name="passwd" class="form-control" placeholder="* Password Here" required>
                <br>
                <label for=""><b>User Group</b></label>
                <br>
                <select name="usergroup" id="usergroup" class="form-control" required>
                    <option value="Systems Administrator">Systems Administrator</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Front Office">Front Office</option>
                    <option value="Doctors">Doctors</option>
                    <option value="Laboratory">Laboratory</option>
                    <option value="Transplant">Transplant</option>
                </select>
                <br>
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Register</button>
                    &nbsp;
                    <a href="index.php" class="btn btn-primary">Login</a>
                </div>
                <br>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>