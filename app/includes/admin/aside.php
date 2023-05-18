<aside class=" asidebar d-block" id="asidebar">
    <div class=" brand bg-white d-flex justify-content-center align-items-center flex-row">
        <img src="../assets/images/logo/logo.svg" alt="" class="brand-logo">
        <div class="brand-span d-none ms-2">
            <h2 class="brand-name text-dark text-uppercase font-brand fw-bold m-0 p-0 lh-1">Brgy.&nbsp;Tinaogan</h2>
            <h6 class="brand-slogan text-uppercase font-title fw-bolder m-0 p-0 fs-8">
                Health center Management System
            </h6>
        </div>
    </div>
    <div class="bg-danger hr-2"></div>
    <ul class="sidebar d-flex justify-content-start flex-column p-0 m-0">
        <!-- dashboard -->
        <li class="sidebar-list d-block border-bottom cursor-pointer 
                    <?php if ($title == 'Dashboard') {echo 'active';} ?> ">
            <a class="sidebar-link d-block p-3 text-decoration-none text-white fw-bold text-uppercase "
                href="index.php">
                <i class="fas fa-home"></i>
                <span class="ms-3">dashboard</span>
            </a>
        </li>
        <!-- end of dashboard -->

        <!-- patients -->
        <li class="sidebar-list d-block border-bottom cursor-pointer
                <?php if ($title == 'Patients' || $title == "Patient's Records" ) {echo 'active';} ?>">
            <a class=" sidebar-link d-block p-3 text-decoration-none text-white fw-bold text-uppercase "
                href="patients.php">
                <i class="fa-solid fa-user-injured"></i>
                <span class="ms-3">patients </span>
            </a>
        </li>

        <!-- accounts -->
        <li class="list-unstyled sidebar-list d-block cursor-pointer
            <?php if ($title == 'Account - Staff' || $title == 'Account - Admin') {echo 'active';}?> ">
            <button class=" d-block text-main border-bottom outline-0 border-0 bg-transparent p-3 text-white w-100"
                type="button" data-bs-toggle="collapse" data-bs-target="#accountsAccordion" aria-expanded="true"
                aria-controls="accountsAccordion">
                <div id="accountsTab" class="">
                    <div
                        class="font-title sidebar-button w-100 d-flex justify-content-between align-items-center flex-row ">
                        <div>
                            <i class="fa-solid fa-users-medical"></i>
                            <span class="ms-2 text-uppercase fw-bold text-decoration-none"> accounts </span>
                        </div>
                        <!-- <span class="">
                            accounts
                        </span> -->
                        <i class="fa-solid fa-angle-down w-10"></i>
                    </div>
                </div>
            </button>
            <div id="accountsAccordion"
                class="collapse bg-white
                    <?php if ($title == 'Account - Staff' || $title == 'Account - Nurse' || $title == 'Account - Admin' ) {echo 'show';}?> "
                aria-labelledby="accountTab" data-bs-parent="#accordionExample">

                <a class="sidebar-link-items d-block py-2 px-4 text-uppercase fw-bold 
                        <?php if ($title == 'Account - Staff') {echo 'active';} ?>" href="account-staff.php">
                    <!-- staff -->
                    <i class="fa-solid fa-user"></i>
                    <span class="ms-2"> staff </span>
                </a>


                <a class=" sidebar-link-items d-block py-2  px-4 text-uppercase fw-bold 
                        <?php if ($title == 'Account - Nurse') {echo 'active';} ?>" href="account-nurse.php">
                    <i class="fa-solid fa-user-nurse"></i>
                    <span class="ms-2"> nurse </span>

                </a>


                <a class=" sidebar-link-items d-block py-2  px-4 text-uppercase fw-bold 
                        <?php if ($title == 'Account - Admin') {echo 'active';} ?>" href="account-admin.php">
                    <i class="fa-solid fa-user-shield"></i>
                    <span class="ms-2"> admin </span>

                </a>


            </div>
        </li>

        <!-- end of accounts -->


        <!-- manage -->
        <li
            class="list-unstyled sidebar-list d-block cursor-pointer
            <?php if ($title == 'Manage - Patient Category' || $title == 'Manage - Patient Report') {echo 'active';}?> ">
            <button class=" d-block text-main border-bottom outline-0 border-0 bg-transparent p-3 text-white w-100"
                type="button" data-bs-toggle="collapse" data-bs-target="#manageAccordion" aria-expanded="true"
                aria-controls="manageAccordion">
                <div id="manageTab" class="">
                    <div
                        class="font-title sidebar-button w-100 d-flex justify-content-between align-items-center flex-row ">
                        <div>
                            <i class="fa-solid fa-gear"></i>
                            <span class="ms-2 text-uppercase fw-bold text-decoration-none"> manage </span>
                        </div>
                        <!-- <span class="">
                            manage
                        </span> -->
                        <i class="fa-solid fa-angle-down w-10"></i>
                    </div>
                </div>
            </button>
            <div id="manageAccordion"
                class="collapse bg-white
                    <?php if ($title == 'Manage - Patient Category' || $title == 'Manage - Report Type' || $title == 'Manage - Delivery Type') {echo 'show';}?> "
                aria-labelledby="manageTab" data-bs-parent="#accordionExample">

                <a class="sidebar-link-items d-block py-2 px-4 text-uppercase fw-bold 
                        <?php if ($title == 'Manage - Patient Category') {echo 'active';} ?>"
                    href="manage-category.php">
                    <!-- staff -->
                    <i class="fa-solid fa-layer-group"></i>
                    <span class="ms-2"> Patient Category </span>
                </a>

                <a class=" sidebar-link-items d-block py-2  px-4 text-uppercase fw-bold 
                        <?php if ($title == 'Manage - Report Type') {echo 'active';} ?>" href="manage-report.php">
                    <i class="fa-solid fa-files-medical"></i>
                    <span class="ms-2"> Report Type</span>

                </a>
                <a class=" sidebar-link-items d-block py-2  px-4 text-uppercase fw-bold 
                        <?php if ($title == 'Manage - Delivery Type') {echo 'active';} ?>" href="manage-type.php">
                    <i class="fa-solid fa-file-contract"></i>
                    <span class="ms-2"> Delivery Type</span>

                </a>
            </div>
        </li>

        <!-- end of manage -->

    </ul>
</aside>
