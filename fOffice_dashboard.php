<html>
<head>
    <title>Front Office Dashboard</title>
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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Front Office
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="patientDetails.php">Patient Details</a>
                <a class="dropdown-item" href="donorInformation.php">Donor Information</a>
            </div>
        </li>
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
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="#">Laboratory</a>-->
<!--        </li>-->
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
    <h3 class="text-center">Front Office Dashboard</h3>
    <div class="row">
        <div class="col-sm-6">
            <p class="text-justify">Welcome to the Front Office Dashboard, which
                is the face of the hospital. This dashboard enables the front office users
                to handle and receive new patients and new donors. All the hospital's
            enquiries are done here, making it to be the starting point of the hospital's
            operations.</p>
            <p class="text-justify">For a user to manage this type of a system, he/she
                must have good experience in the Front Office industry. This user must
            be friendly to the patients and donors, and have a welcoming attitude and
            heart.</p>
        </div>
        <div class="col-sm-6">
            <img src="images/front-office.jpg" alt="Front Office Image" width="100%" height="300">
        </div>
    </div>
</div>
</body>
</html>