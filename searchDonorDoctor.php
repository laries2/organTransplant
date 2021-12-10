<html>
<head>
    <title>Donor ID Number</title>
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
    <h3 class="text-center">Donor ID Number</h3>
</div>
<hr>
<div class="container">
    <form action="doctorsD.php" method="post">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <input type="number" name="donorIdNumber" class="form-control" placeholder="* Enter Donor ID Number" required min="0" max="120">
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>