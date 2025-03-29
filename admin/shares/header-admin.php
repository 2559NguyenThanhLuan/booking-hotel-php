

<div class="container-fluid bg-primary text-white p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="mb-0 text-white">ADMIN PANEL</h3>
    <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
</div>

<div class="col-lg-2 bg-primary border-top border-3 border-white text-white" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-primary ">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-white">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="setting.php">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>