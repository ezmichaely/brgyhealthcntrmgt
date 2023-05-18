<form method="POST" data-id="<?php echo $category_id; ?>" id="EditCategoryForm">

    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            EDIT Category
        </h5>
        <button id="ModalCloseButtonEditCategoryOne" type="button" class="btn-close btn-close-white me-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">

        <!-- form alert -->
        <ul id="alertEditCategorySuccess" role="alert"
            class="editcategory d-none alert alert-success fw-bold fs-7 py-2 px-4">
            <li id="succMsg" class="editcategory d-none"></li>
        </ul>

        <ul id="alertEditCategoryError" role="alert"
            class="editcategory d-none alert alert-danger fw-bold fs-7 py-2 px-4">
            <li id="errAll" class="editcategory d-none"></li>
        </ul>

        <div class="form-group">

            <div class="form-group d-none">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    category id <span class="text-danger">*</span>
                </label>
                <input type="text" id="category_id" name="category_id" class="form-control editcategory"
                    value='<?php echo $category_id ?>' readonly />
            </div>


            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title"> Type
                <span class="text-danger"> * </span></label>
            <input type="text" name="category_type" id="category_type" value="<?php echo $category_type ?>"
                class="editcategory form-control" />
        </div>

    </div>

    <div class="modal-footer">
        <button id="ModalCloseButtonEditCategoryTwo" type="button" class="close btn btn-danger" data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>

        <button type="submit" id="EditCategory" name="EditCategory" class="btn btn-primary"
            data-id="<?php echo $category_id; ?>">
            <i class="fas fa-save"></i>
            <span class="ms-1">SAVE</span>
        </button>
    </div>

</form>
