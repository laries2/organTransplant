<html>
<head>
    <title>Laboratory Dashboard</title>
    <link rel="icon" href="images/logo.webp">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark" style="background: #ad1515;">
    <!-- Brand -->
    <a class="navbar-brand" href="#">
        <img src="images/logo.webp" alt="Logo" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <!-- Dropdown -->
<!--        <li class="nav-item dropdown">-->
<!--            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">-->
<!--                Front Office-->
<!--            </a>-->
<!--            <div class="dropdown-menu">-->
<!--                <a class="dropdown-item" href="#">Patient Details</a>-->
<!--                <a class="dropdown-item" href="#">Donor Information</a>-->
<!--            </div>-->
<!--        </li>-->
        <!-- Dropdown -->
<!--        <li class="nav-item dropdown">-->
<!--            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">-->
<!--                Doctors-->
<!--            </a>-->
<!--            <div class="dropdown-menu">-->
<!--                <a class="dropdown-item" href="#">See Patient</a>-->
<!--                <a class="dropdown-item" href="#">See Donor</a>-->
<!--            </div>-->
<!--        </li>-->
        <li class="nav-item">
            <a class="nav-link" href="searchPatientDoctorLab.php">Laboratory</a>
        </li>
        <!-- Dropdown -->
<!--        <li class="nav-item dropdown">-->
<!--            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">-->
<!--                Transplant-->
<!--            </a>-->
<!--            <div class="dropdown-menu">-->
<!--                <a class="dropdown-item" href="#">Organ Information</a>-->
<!--                <a class="dropdown-item" href="#">Blood Information</a>-->
<!--                <a class="dropdown-item" href="#">Transplant</a>-->
<!--            </div>-->
<!--        </li>-->
        <!-- Dropdown -->
<!--        <li class="nav-item dropdown">-->
<!--            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">-->
<!--                Accounts-->
<!--            </a>-->
<!--            <div class="dropdown-menu">-->
<!--                <a class="dropdown-item" href="#">Billing</a>-->
<!--                <a class="dropdown-item" href="#">Receipt</a>-->
<!--            </div>-->
<!--        </li>-->
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Reports
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <!-- Dropdown -->
<!--        <li class="nav-item dropdown">-->
<!--            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">-->
<!--                Users-->
<!--            </a>-->
<!--            <div class="dropdown-menu">-->
<!--                <a class="dropdown-item" href="#">New User</a>-->
<!--            </div>-->
<!--        </li>-->
    </ul>
    </div>
</nav>
<div class="container">
    <h3 class="text-center">Laboratory Dashboard</h3>
    <div class="row">
        <div class="col-sm-6">
            <hr>
            <p class="text-justify">Welcome to the Laboratory Dashboard, a section
                that enables Lab Technicians to enter data pertaining lab tests
                for patients and donors. This information is then shared to the
                doctors and users in the Transplant Department.</p>
            <p class="text-justify">For a user to manage this type of a system, he/she
                must have at least three years experience in the Laboratory Industry.</p>
        </div>
        <div class="col-sm-6">
            <img src="images/laboratory.png" alt="Laboratory Image" width="100%" height="500">
        </div>
    </div>
</div>
</body>
</html>