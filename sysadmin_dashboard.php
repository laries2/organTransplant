<html>
<head>
    <title>Systems Administrator Dashboard</title>
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

    <!-- Toggler/collapsibe Button -->
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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Doctors
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="searchPatientDoctor.php">See Patient</a>
                <a class="dropdown-item" href="searchDonorDoctor.php">See Donor</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="searchPatientDoctorLab.php">Laboratory</a>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Transplant
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="organInformation.php">Organ Information</a>
                <a class="dropdown-item" href="bloodInformation.php">Blood Information</a>
                <a class="dropdown-item" href="transplant.php">Transplant</a>
            </div>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Accounts
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="billing.php">Billing</a>
                <a class="dropdown-item" href="receipt.php">Receipt</a>
            </div>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Reports
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Patients Details Report</a>
                <a class="dropdown-item" href="#">Doctors Report</a>
                <a class="dropdown-item" href="#">Laboratory Report</a>
                <a class="dropdown-item" href="#">Transplant Report</a>
                <a class="dropdown-item" href="#">Patients Outstanding Balances</a>
            </div>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Users
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="users.php">New User</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
    </ul>
    </div>
</nav>
<div class="container">
    <h3 class="text-center">Systems Administrator Dashboard</h3>
    <div class="row">
        <div class="col-sm-6">
            <p class="text-justify">Welcome to the Systems Administrator Dashboard, which
                gives the Systems Administrator full privileges of the system. This dashboard
                should only be used by users classified as System Administrators, especially
                those in the hospital's ICT Department. This user can access all the modules
                of the system; this user has to be careful and strict with the system, failure
                to which the Organ Transplant's MIS operations may fail if he/she doesn't
                manage it well.</p>
            <p class="text-justify">For a user to manage this type of a system, he/she
                must have good ICT background, especially in areas of Software Development
                and networking. Since this is a multi-user system, network issues may arise.
                Therefore, he/she must be proficient in Computer Networking. If there are
                Network Support Professionals in the hospital, this user must work closely
                with them to ensure that the system works seamlessly with no errors.</p>
        </div>
        <div class="col-sm-6">
            <img src="images/ict1.webp" alt="Systems Administrator Image" width="100%" height="330">
        </div>
    </div>
</div>
</body>
</html>