$(document).ready(function () {

    //ADD CATEGORY
    $("#AddCategory").click(function (e) {
        e.preventDefault();
        const addcat = $('#category_type.addcategory').val();
        var errAll = '';

        if (addcat.length == '') {
            errAll = '<li> Field is empty! </li>';
            $("#errAll.addcategory").removeClass("d-none");
            $("#errAll.addcategory").addClass("d-block");
            $("#errAll.addcategory").html(errAll);

        } else {
            errAll = '';
            $("#errAll.addcategory").addClass("d-none");
            $("#errAll.addcategory").removeClass("d-block");
            $("#errAll.addcategory").html(errAll);
        }

        if (errAll != '') {
            $("#alertAddCategoryError.addcategory").addClass("d-block");
            $("#alertAddCategoryError.addcategory").removeClass("d-none");

            return false;
        } else {
            $("#alertAddCategoryError.addcategory").removeClass("d-block");
            $("#alertAddCategoryError.addcategory").addClass("d-none");

            if (addcat.length != '') {

                //ajax
                var formData = $('#AddCategoryForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/manage/crudCategory.php',
                    data: formData + '&action=AddCategory',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddCategoryError.addcategory").addClass("d-block");
                            $("#alertAddCategoryError.addcategory").removeClass("d-none");

                            $("#errAll.addcategory").removeClass("d-none");
                            $("#errAll.addcategory").addClass("d-block");
                            $("#errAll.addcategory").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertAddCategorySuccess.addcategory").removeClass("d-none");
                            $("#alertAddCategorySuccess.addcategory").addClass("d-block");

                            $("#succMsg.addcategory").removeClass("d-none");
                            $("#succMsg.addcategory").addClass("d-block");
                            $("#succMsg.addcategory").html(feedback.message);
                            $("#AddCategoryForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertAddCategorySuccess.addcategory");
                                let alertLi = $("#succMsg.addcategory");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddCategoryOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonAddCategoryTwo").click(function () {
                                location.reload()
                            });

                            $('#addCategoryModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    // EDIT CATEGORY
    $(document).on('click', '#EditCategory', function (e) {
        e.preventDefault();
        e.preventDefault();
        const editcat = $('#category_type.editcategory').val();

        var errAll = '';

        if (editcat.length == '') {
            errAll = '<li> Field is empty! </li>';
            $("#errAll.editcategory").removeClass("d-none");
            $("#errAll.editcategory").addClass("d-block");
            $("#errAll.editcategory").html(errAll);

        } else {
            errAll = '';
            $("#errAll.editcategory").addClass("d-none");
            $("#errAll.editcategory").removeClass("d-block");
            $("#errAll.editcategory").html(errAll);
        }

        if (errAll != '') {
            $("#alertEditCategoryError.editcategory").addClass("d-block");
            $("#alertEditCategoryError.editcategory").removeClass("d-none");

            return false;
        } else {
            $("#alertEditCategoryError.editcategory").removeClass("d-block");
            $("#alertEditCategoryError.editcategory").addClass("d-none");

            if (editcat.length != '') {

                //ajax
                var formData = $('#EditCategoryForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/manage/crudCategory.php',
                    data: formData + '&action=EditCategory',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertEditCategoryError.editcategory").addClass("d-block");
                            $("#alertEditCategoryError.editcategory").removeClass("d-none");

                            $("#errAll.editcategory").removeClass("d-none");
                            $("#errAll.editcategory").addClass("d-block");
                            $("#errAll.editcategory").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertEditCategorySuccess.editcategory").removeClass("d-none");
                            $("#alertEditCategorySuccess.editcategory").addClass("d-block");

                            $("#succMsg.editcategory").removeClass("d-none");
                            $("#succMsg.editcategory").addClass("d-block");
                            $("#succMsg.editcategory").html(feedback.message);

                            setTimeout(function () {
                                let alertUl = $(
                                    "#alertEditCategorySuccess.editcategory");
                                let alertLi = $("#succMsg.editcategory");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonEditCategoryOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonEditCategoryTwo").click(function () {
                                location.reload()
                            });

                            $('#editCategoryModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    //ADD REPORT
    $("#AddReport").click(function (e) {
        e.preventDefault();
        const addcat = $('#report_type.addreport').val();

        var errAll = '';

        if (addcat.length == '') {
            errAll = '<li> Field is empty! </li>';
            $("#errAll.addreport").removeClass("d-none");
            $("#errAll.addreport").addClass("d-block");
            $("#errAll.addreport").html(errAll);

        } else {
            errAll = '';
            $("#errAll.addreport").addClass("d-none");
            $("#errAll.addreport").removeClass("d-block");
            $("#errAll.addreport").html(errAll);
        }

        if (errAll != '') {
            $("#alertAddReportError.addreport").addClass("d-block");
            $("#alertAddReportError.addreport").removeClass("d-none");

            return false;
        } else {
            $("#alertAddReportError.addreport").removeClass("d-block");
            $("#alertAddReportError.addreport").addClass("d-none");

            if (addcat.length != '') {

                //ajax
                var formData = $('#AddReportForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '../app/controllers/manage/crudReport.php',
                    data: formData + '&action=AddReport',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddReportError.addreport").addClass("d-block");
                            $("#alertAddReportError.addreport").removeClass("d-none");

                            $("#errAll.addreport").removeClass("d-none");
                            $("#errAll.addreport").addClass("d-block");
                            $("#errAll.addreport").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertAddReportSuccess.addreport").removeClass("d-none");
                            $("#alertAddReportSuccess.addreport").addClass("d-block");

                            $("#succMsg.addreport").removeClass("d-none");
                            $("#succMsg.addreport").addClass("d-block");
                            $("#succMsg.addreport").html(feedback.message);
                            $("#AddReportForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertAddReportSuccess.addreport");
                                let alertLi = $("#succMsg.addreport");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddReportOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonAddReportTwo").click(function () {
                                location.reload()
                            });

                            $('#addReportModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });


    // EDIT REPORT
    $(document).on('click', '#EditReport', function (e) {
        e.preventDefault();
        e.preventDefault();
        const editcat = $('#report_type.editreport').val();

        var errAll = '';

        if (editcat.length == '') {
            errAll = '<li> Field is empty! </li>';
            $("#errAll.editreport").removeClass("d-none");
            $("#errAll.editreport").addClass("d-block");
            $("#errAll.editreport").html(errAll);

        } else {
            errAll = '';
            $("#errAll.editreport").addClass("d-none");
            $("#errAll.editreport").removeClass("d-block");
            $("#errAll.editreport").html(errAll);
        }

        if (errAll != '') {
            $("#alertEditReportError.editreport").addClass("d-block");
            $("#alertEditReportError.editreport").removeClass("d-none");

            return false;
        } else {
            $("#alertEditReportError.editreport").removeClass("d-block");
            $("#alertEditReportError.editreport").addClass("d-none");

            if (editcat.length != '') {

                //ajax
                var formData = $('#EditReportForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '../app/controllers/manage/crudReport.php',
                    data: formData + '&action=EditReport',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertReportError.editreport").addClass("d-block");
                            $("#alertReportError.editreport").removeClass("d-none");

                            $("#errAll.editreport").removeClass("d-none");
                            $("#errAll.editreport").addClass("d-block");
                            $("#errAll.editreport").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertEditReportSuccess.editreport").removeClass("d-none");
                            $("#alertEditReportSuccess.editreport").addClass("d-block");

                            $("#succMsg.editreport").removeClass("d-none");
                            $("#succMsg.editreport").addClass("d-block");
                            $("#succMsg.editreport").html(feedback.message);

                            setTimeout(function () {
                                let alertUl = $(
                                    "#alertEditReportSuccess.editreport");
                                let alertLi = $("#succMsg.editreport");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonEditReportOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonEditReportTwo").click(function () {
                                location.reload()
                            });

                            $('#editReportModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    //ADD DELIVERY Type
    $("#AddDeliveryType").click(function (e) {
        e.preventDefault();
        const adddeliverytype = $('#dtype_name.adddeliverytype').val();

        var errAll = '';

        if (adddeliverytype.length == '') {
            errAll = '<li> Field is empty! </li>';
            $("#errAll.adddeliverytype").removeClass("d-none");
            $("#errAll.adddeliverytype").addClass("d-block");
            $("#errAll.adddeliverytype").html(errAll);

        } else {
            errAll = '';
            $("#errAll.adddeliverytype").addClass("d-none");
            $("#errAll.adddeliverytype").removeClass("d-block");
            $("#errAll.adddeliverytype").html(errAll);
        }

        if (errAll != '') {
            $("#alertAddDeliveryTypeError.adddeliverytype").addClass("d-block");
            $("#alertAddDeliveryTypeError.adddeliverytype").removeClass("d-none");

            return false;
        } else {
            $("#alertAddDeliveryTypeError.adddeliverytype").removeClass("d-block");
            $("#alertAddDeliveryTypeError.adddeliverytype").addClass("d-none");

            if (adddeliverytype.length != '') {

                //ajax
                var formData = $('#AddDeliveryTypeForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '../app/controllers/manage/crudDeliveryType.php',
                    data: formData + '&action=AddDeliveryType',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddDeliveryTypeError.adddeliverytype").addClass("d-block");
                            $("#alertAddDeliveryTypeError.adddeliverytype").removeClass("d-none");

                            $("#errAll.adddeliverytype").removeClass("d-none");
                            $("#errAll.adddeliverytype").addClass("d-block");
                            $("#errAll.adddeliverytype").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertAddDeliveryTypeSuccess.adddeliverytype").removeClass("d-none");
                            $("#alertAddDeliveryTypeSuccess.adddeliverytype").addClass("d-block");

                            $("#succMsg.adddeliverytype").removeClass("d-none");
                            $("#succMsg.adddeliverytype").addClass("d-block");
                            $("#succMsg.adddeliverytype").html(feedback.message);
                            $("#AddDeliveryTypeForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertAddDeliveryTypeSuccess.adddeliverytype");
                                let alertLi = $("#succMsg.adddeliverytype");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddDeliveryTypeOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonAddDeliveryTypeTwo").click(function () {
                                location.reload()
                            });

                            $('#addDeliveryTypeModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    // EDIT DELIVERY
    $(document).on('click', '#EditDeliveryType', function (e) {
        e.preventDefault();
        e.preventDefault();
        const editdeliverytype = $('#dtype_name.editdeliverytype').val();

        var errAll = '';

        if (editdeliverytype.length == '') {
            errAll = '<li> Field is empty! </li>';
            $("#errAll.editdeliverytype").removeClass("d-none");
            $("#errAll.editdeliverytype").addClass("d-block");
            $("#errAll.editdeliverytype").html(errAll);

        } else {
            errAll = '';
            $("#errAll.editdeliverytype").addClass("d-none");
            $("#errAll.editdeliverytype").removeClass("d-block");
            $("#errAll.editdeliverytype").html(errAll);
        }

        if (errAll != '') {
            $("#alertEditDeliveryTypeError.editdeliverytype").addClass("d-block");
            $("#alertEditDeliveryTypeError.editdeliverytype").removeClass("d-none");

            return false;
        } else {
            $("#alertEditDeliveryTypeError.editdeliverytype").removeClass("d-block");
            $("#alertEditDeliveryTypeError.editdeliverytype").addClass("d-none");

            if (editdeliverytype.length != '') {

                //ajax
                var formData = $('#EditDeliveryTypeForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '../app/controllers/manage/crudDeliveryType.php',
                    data: formData + '&action=EditDeliveryType',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertEditDeliveryTypeError.editdeliverytype").addClass("d-block");
                            $("#alertEditDeliveryTypeError.editdeliverytype").removeClass("d-none");

                            $("#errAll.editdeliverytype").removeClass("d-none");
                            $("#errAll.editdeliverytype").addClass("d-block");
                            $("#errAll.editdeliverytype").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertEditDeliveryTypeSuccess.editdeliverytype").removeClass("d-none");
                            $("#alertEditDeliveryTypeSuccess.editdeliverytype").addClass("d-block");

                            $("#succMsg.editdeliverytype").removeClass("d-none");
                            $("#succMsg.editdeliverytype").addClass("d-block");
                            $("#succMsg.editdeliverytype").html(feedback.message);

                            setTimeout(function () {
                                let alertUl = $(
                                    "#alertEditDeliveryTypeSuccess.editdeliverytype");
                                let alertLi = $("#succMsg.editdeliverytype");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonEditDeliveryTypeOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonEditDeliveryTypeTwo").click(function () {
                                location.reload()
                            });

                            $('#editEditDeliveryTypeModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });
});