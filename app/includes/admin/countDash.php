<div class="cards mt-3">
    <div class="row gx-5  gy-3 justify-content-center">
        <div class="col-lg-6">
            <div class="card text-center border-success">
                <div class="card-header bg-success text-white fw-bold
                                            text-uppercase font-title fs-4">
                    <i class="fa-solid fa-user-injured"></i>
                    <span class="ms-3">patients </span>
                </div>
                <div class="card-body py-4">
                    <h1 class="card-title fw-bold"><?php echo $totalPatients;?> </h1>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card text-center border-primary">
                <div class="card-header bg-primary text-white fw-bold
                                            text-uppercase font-title fs-4">
                    <i class="fa-solid fa-file-medical"></i>
                    <span class="ms-3">consultations</span>

                </div>
                <div class="card-body py-4">
                    <h1 class="card-title fw-bold"><?php echo $totalConsultations;?></h1>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card text-center border-warning">
                <div class="card-header bg-warning text-white fw-bold
                                            text-uppercase font-title fs-4">
                    <i class="fa-solid fa-user"></i>
                    <span class="ms-3"> staff</span>

                </div>
                <div class="card-body py-4">
                    <h1 class="card-title fw-bold"><?php echo $totalStaff;?></h1>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card text-center border-info">
                <div class="card-header bg-info text-white fw-bold
                                            text-uppercase font-title fs-4">
                    <i class="fa-solid fa-user-nurse"></i>
                    <span class="ms-3"> nurse </span>
                </div>
                <div class="card-body py-4">
                    <h1 class="card-title fw-bold"><?php echo $totalNurse;?></h1>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card text-center border-danger">
                <div class="card-header bg-danger text-white fw-bold
                                            text-uppercase font-title fs-4">
                    <i class="fa-solid fa-users-medical"></i>
                    <span class="ms-3"> accounts </span>

                </div>
                <div class="card-body py-4">
                    <h1 class="card-title fw-bold"><?php echo $totalAccounts;?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
