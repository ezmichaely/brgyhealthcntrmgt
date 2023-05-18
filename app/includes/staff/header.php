<header class="animate__animated animate__slideInDown backend-header container-fluid fluid-padding bg-white">
    <a href="index.php">
        <div class="brand d-flex justify-content-start align-items-center flex-row">
            <img src="../assets/images/logo/logo.svg" alt="" class="brand-logo">
            <div class="brand-span ms-2">
                <h2 class="brand-name text-dark text-uppercase font-brand fw-bold m-0 p-0 lh-1">Brgy.&nbsp;Tinaogan
                </h2>
                <h6 class="brand-slogan text-dark text-uppercase font-title fw-bolder m-0 p-0 fs-8">
                    Health center Management System
                </h6>
            </div>
        </div>
    </a>

    <a href="index.php" class="fw-bold text-uppercase">SEARCH PATIENTS</a>
    <?php if (isset($_SESSION['id'])): ?>
    <div class="session-profile btn-group">
        <button type="button"
            class=" dropdown-btn d-flex flex-row align-items-center btn btn-primary dropdown-toggle ps-3 pe-3 "
            data-bs-toggle="dropdown" aria-expanded="false">

            <span class="font-title fw-bold text-uppercase pe-1">
                <?php echo $_SESSION['username']; ?>
            </span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li class="dropdown-list">
                <button class="dropdown-item" type="button">
                    <a href="index.php" class="dropdown-link fw-bold">
                        <i class="fa fa-home"></i>
                        <span class="text-uppercase ms-1"> HOME </span>
                    </a>
                </button>
            </li>
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
