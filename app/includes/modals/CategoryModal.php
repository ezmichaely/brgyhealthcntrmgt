<!-- ADD -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="AddCategoryForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        ADD NEW Category
                    </h5>
                    <button id="ModalCloseButtonAddCategoryOne" type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <!-- form alert -->
                    <ul id="alertAddCategorySuccess" role="alert"
                        class="addcategory d-none alert alert-success fw-bold fs-7 py-2 px-4">
                        <li id="succMsg" class="addcategory d-none"></li>
                    </ul>

                    <ul id="alertAddCategoryError" role="alert"
                        class="addcategory d-none alert alert-danger fw-bold fs-7 py-2 px-4">
                        <li id="errAll" class="addcategory d-none"></li>
                    </ul>

                    <div class="form-group">
                        <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title"> Type
                            <span class="text-danger"> * </span></label>
                        <input type="text" name="category_type" id="category_type" class="addcategory form-control" />
                    </div>

                </div>

                <div class="modal-footer">
                    <button id="ModalCloseButtonAddCategoryTwo" type="button" class="close btn btn-danger"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        <span class="ms-1">CLOSE</span>
                    </button>

                    <button type="submit" name="AddCategory" id="AddCategory" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        <span class="ms-1">SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- VIEW -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="content-data"></div>
        </div>
    </div>
</div>
