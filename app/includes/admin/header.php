<header class=" backend-header bg-white fluid-padding d-flex justify-content-between align-items-center ">
    <div class="sidebar-toggler btn btn-primary" id="sidebar-btn">
        <i class="fa fa-bars "></i>
    </div>


    <?php if (isset($_SESSION['id'])): ?>
    <div class="session-profile btn-group d-block">
        <button type="button "
            class=" dropdown-btn d-flex flex-row align-items-center btn btn-primary dropdown-toggle ps-3 pe-3 "
            data-bs-toggle="dropdown" aria-expanded="false">

            <span class="font-title fw-bold text-uppercase pe-1">
                <?php echo $_SESSION['username']; ?>
            </span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li class="dropdown-list">
                <button class="dropdown-item" type="button">
                    <a href="profile.php" class="dropdown-link fw-bold">
                        <i class="fa fa-user"></i>
                        <span class="text-uppercase ms-1"> PROFILE </span>
                    </a>
                </button>
            </li>

            <li class="dropdown-list">
                <button class="dropdown-item" type="button">
                    <a href="../app/controllers/logout.php" class="dropdown-link fw-bold">
                        <i class="fas fa-power-off"></i>
                        <span class="text-uppercase ms-1"> LOG OUT </span>
                    </a>
                </button>
            </li>
        </ul>
    </div>
    <?php endif; ?>
</header>
<div class="bg-danger hr-2"></div>
