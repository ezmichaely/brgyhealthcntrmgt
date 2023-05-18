$(document).ready(function () {
    // ADD Delivery
    $("#AddDelivery").click(function (e) {
        e.preventDefault();
        const delivery_date = $('#delivery_date.adddelivery').val();
        const delivery_temp = $('#delivery_temperature.adddelivery').val();
        const delivery_rr = $('#delivery_rr.adddelivery').val();
        const delivery_hr = $('#delivery_hr.adddelivery').val();
        const delivery_bp = $('#delivery_bp.adddelivery').val();
        const delivery_age = $('#delivery_age.adddelivery').val();
        const delivery_babiesno = $('#delivery_babiesno.adddelivery').val();
        const delivery_gender = $('#delivery_gender.adddelivery').val();

        var errAll = '';
        var errDate = '';
        var errTemp = '';
        var errRR = '';
        var errHR = '';
        var errBP = '';
        var errAge = '';
        var errBabiesNo = '';
        var errGender = '';

        if (delivery_date.length == '' && delivery_temp.length == '' && delivery_rr.length == '' &&
            delivery_hr.length == '' && delivery_bp.length == '' &&
            delivery_age.length == '' && delivery_babiesno.length == '' && delivery_gender.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.adddelivery").removeClass("d-none");
            $("#errAll.adddelivery").addClass("d-block");
            $("#errAll.adddelivery").html(errAll);

        } else {
            errAll = '';
            $("#errAll.adddelivery").addClass("d-none");
            $("#errAll.adddelivery").removeClass("d-block");
            $("#errAll.adddelivery").html(errAll);

            if (delivery_date.length == '') {
                errDate = '<li> Date is required! </li>';
                $("#errDate.adddelivery").removeClass("d-none");
                $("#errDate.adddelivery").addClass("d-block");
                $("#errDate.adddelivery").html(errDate);
            } else {
                errDate = '';
                $("#errDate.adddelivery").addClass("d-none");
                $("#errDate.adddelivery").removeClass("d-block");
                $("#errDate.adddelivery").html(errDate);
            }

            if (delivery_temp.length == '') {
                errTemp = '<li> Temperature is required! </li>';
                $("#errTemp.adddelivery").removeClass("d-none");
                $("#errTemp.adddelivery").addClass("d-block");
                $("#errTemp.adddelivery").html(errTemp);
            } else {
                errTemp = '';
                $("#errTemp.adddelivery").addClass("d-none");
                $("#errTemp.adddelivery").removeClass("d-block");
                $("#errTemp.adddelivery").html(errTemp);
            }

            if (delivery_rr.length == '') {
                errRR = '<li> Respiratory rate is required! </li>';
                $("#errRR.adddelivery").removeClass("d-none");
                $("#errRR.adddelivery").addClass("d-block");
                $("#errRR.adddelivery").html(errRR);
            } else {
                errRR = '';
                $("#errRR.adddelivery").addClass("d-none");
                $("#errRR.adddelivery").removeClass("d-block");
                $("#errRR.adddelivery").html(errRR);

            }

            if (delivery_hr.length == '') {
                errHR = '<li> Heart Rate is required! </li>';
                $("#errHR.adddelivery").removeClass("d-none");
                $("#errHR.adddelivery").addClass("d-block");
                $("#errHR.adddelivery").html(errHR);
            } else {
                errHR = '';
                $("#errHR.adddelivery").addClass("d-none");
                $("#errHR.adddelivery").removeClass("d-block");
                $("#errHR.adddelivery").html(errHR);
            }


            if (delivery_bp.length == '') {
                errBP = '<li> Blood pressure is required! </li>';
                $("#errBP.adddelivery").removeClass("d-none");
                $("#errBP.adddelivery").addClass("d-block");
                $("#errBP.adddelivery").html(errBP);
            } else {
                errBP = '';
                $("#errBP.adddelivery").addClass("d-none");
                $("#errBP.adddelivery").removeClass("d-block");
                $("#errBP.adddelivery").html(errBP);
            }

            if (delivery_age.length == '') {
                errAge = '<li> Age of delivery is required! </li>';
                $("#errAge.adddelivery").removeClass("d-none");
                $("#errAge.adddelivery").addClass("d-block");
                $("#errAge.adddelivery").html(errAge);
            } else {
                errAge = '';
                $("#errAge.adddelivery").addClass("d-none");
                $("#errAge.adddelivery").removeClass("d-block");
                $("#errAge.adddelivery").html(errAge);
            }

            if (delivery_babiesno.length == '') {
                errBabiesNo = '<li>No. of babies is required! </li>';
                $("#errBabiesNo.adddelivery").removeClass("d-none");
                $("#errBabiesNo.adddelivery").addClass("d-block");
                $("#errBabiesNo.adddelivery").html(errBabiesNo);
            } else {
                errBabiesNo = '';
                $("#errBabiesNo.adddelivery").addClass("d-none");
                $("#errBabiesNo.adddelivery").removeClass("d-block");
                $("#errBabiesNo.adddelivery").html(errBabiesNo);
            }

            if (delivery_gender.length == '') {
                errGender = '<li>Gender of the baby is required! </li>';
                $("#errGender.adddelivery").removeClass("d-none");
                $("#errGender.adddelivery").addClass("d-block");
                $("#errGender.adddelivery").html(errGender);
            } else {
                errGender = '';
                $("#errGender.adddelivery").addClass("d-none");
                $("#errGender.adddelivery").removeClass("d-block");
                $("#errGender.adddelivery").html(errGender);
            }
        }

        if (errAll != '' || errDate != '' || errTemp != '' || errRR != '' ||
            errHR != '' || errBP != '' || errAge != '' || errBabiesNo != '' || errGender != '') {

            $("#alertAddDeliveryError.adddelivery").addClass("d-block");
            $("#alertAddDeliveryError.adddelivery").removeClass("d-none");

            return false;
        } else {

            $("#alertAddDeliveryError.adddelivery").removeClass("d-block");
            $("#alertAddDeliveryError.adddelivery").addClass("d-none");

            if (delivery_date.length != '' && delivery_temp.length != '' &&
                delivery_rr.length != '' && delivery_hr.length != '' && delivery_bp.length != '' &&
                delivery_age.length != '' && delivery_babiesno.length != '' && delivery_gender.length != '') {

                //ajax
                var formData = $('#AddDeliveryForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/report/crudDelivery.php',
                    data: formData + '&action=AddDelivery',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddDeliveryError.adddelivery").addClass("d-block");
                            $("#alertAddDeliveryError.adddelivery").removeClass("d-none");

                            $("#errAll.adddelivery").removeClass("d-none");
                            $("#errAll.adddelivery").addClass("d-block");
                            $("#errAll.adddelivery").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertAddDeliverySuccess.adddelivery").removeClass("d-none");
                            $("#alertAddDeliverySuccess.adddelivery").addClass("d-block");

                            $("#succMsg.adddelivery").removeClass("d-none");
                            $("#succMsg.adddelivery").addClass("d-block");
                            $("#succMsg.adddelivery").html(feedback.message);
                            $("#AddDeliveryForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertAddDeliverySuccess.adddelivery");
                                let alertLi = $("#succMsg.adddelivery");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddDeliveryOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonAddDeliveryTwo").click(function () {
                                location.reload()
                            });

                            $('#addDeliveryModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });


    // EDIT Delivery
    $(document).on('click', '#EditDelivery', function (e) {
        e.preventDefault();
        const delivery_date = $('#delivery_date.editdelivery').val();
        const delivery_temp = $('#delivery_temperature.editdelivery').val();
        const delivery_rr = $('#delivery_rr.editdelivery').val();
        const delivery_hr = $('#delivery_hr.editdelivery').val();
        const delivery_bp = $('#delivery_bp.editdelivery').val();
        const delivery_age = $('#delivery_age.editdelivery').val();
        const delivery_babiesno = $('#delivery_babiesno.editdelivery').val();
        const delivery_gender = $('#delivery_gender.editdelivery').val();

        var errAll = '';
        var errDate = '';
        var errTemp = '';
        var errRR = '';
        var errHR = '';
        var errBP = '';
        var errAge = '';
        var errBabiesNo = '';
        var errGender = '';

        if (delivery_date.length == '' && delivery_temp.length == '' && delivery_rr.length == '' &&
            delivery_hr.length == '' && delivery_bp.length == '' &&
            delivery_age.length == '' && delivery_babiesno.length == '' && delivery_gender.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.editdelivery").removeClass("d-none");
            $("#errAll.editdelivery").addClass("d-block");
            $("#errAll.editdelivery").html(errAll);

        } else {
            errAll = '';
            $("#errAll.editdelivery").addClass("d-none");
            $("#errAll.editdelivery").removeClass("d-block");
            $("#errAll.editdelivery").html(errAll);

            if (delivery_date.length == '') {
                errDate = '<li> Date is required! </li>';
                $("#errDate.editdelivery").removeClass("d-none");
                $("#errDate.editdelivery").addClass("d-block");
                $("#errDate.editdelivery").html(errDate);
            } else {
                errDate = '';
                $("#errDate.editdelivery").addClass("d-none");
                $("#errDate.editdelivery").removeClass("d-block");
                $("#errDate.editdelivery").html(errDate);
            }

            if (delivery_temp.length == '') {
                errTemp = '<li> Temperature is required! </li>';
                $("#errTemp.editdelivery").removeClass("d-none");
                $("#errTemp.editdelivery").addClass("d-block");
                $("#errTemp.editdelivery").html(errTemp);
            } else {
                errTemp = '';
                $("#errTemp.editdelivery").addClass("d-none");
                $("#errTemp.editdelivery").removeClass("d-block");
                $("#errTemp.editdelivery").html(errTemp);
            }

            if (delivery_rr.length == '') {
                errRR = '<li> Respiratory rate is required! </li>';
                $("#errRR.editdelivery").removeClass("d-none");
                $("#errRR.editdelivery").addClass("d-block");
                $("#errRR.editdelivery").html(errRR);
            } else {
                errRR = '';
                $("#errRR.editdelivery").addClass("d-none");
                $("#errRR.editdelivery").removeClass("d-block");
                $("#errRR.editdelivery").html(errRR);

            }

            if (delivery_hr.length == '') {
                errHR = '<li> Heart Rate is required! </li>';
                $("#errHR.editdelivery").removeClass("d-none");
                $("#errHR.editdelivery").addClass("d-block");
                $("#errHR.editdelivery").html(errHR);
            } else {
                errHR = '';
                $("#errHR.editdelivery").addClass("d-none");
                $("#errHR.editdelivery").removeClass("d-block");
                $("#errHR.editdelivery").html(errHR);
            }


            if (delivery_bp.length == '') {
                errBP = '<li> Blood pressure is required! </li>';
                $("#errBP.editdelivery").removeClass("d-none");
                $("#errBP.editdelivery").addClass("d-block");
                $("#errBP.editdelivery").html(errBP);
            } else {
                errBP = '';
                $("#errBP.editdelivery").addClass("d-none");
                $("#errBP.editdelivery").removeClass("d-block");
                $("#errBP.editdelivery").html(errBP);
            }

            if (delivery_age.length == '') {
                errAge = '<li> Age of delivery is required! </li>';
                $("#errAge.editdelivery").removeClass("d-none");
                $("#errAge.editdelivery").addClass("d-block");
                $("#errAge.editdelivery").html(errAge);
            } else {
                errAge = '';
                $("#errAge.editdelivery").addClass("d-none");
                $("#errAge.editdelivery").removeClass("d-block");
                $("#errAge.editdelivery").html(errAge);
            }

            if (delivery_babiesno.length == '') {
                errBabiesNo = '<li>No. of babies is required! </li>';
                $("#errBabiesNo.editdelivery").removeClass("d-none");
                $("#errBabiesNo.editdelivery").addClass("d-block");
                $("#errBabiesNo.editdelivery").html(errBabiesNo);
            } else {
                errBabiesNo = '';
                $("#errBabiesNo.editdelivery").addClass("d-none");
                $("#errBabiesNo.editdelivery").removeClass("d-block");
                $("#errBabiesNo.editdelivery").html(errBabiesNo);
            }

            if (delivery_gender.length == '') {
                errGender = '<li>Gender of the baby is required! </li>';
                $("#errGender.editdelivery").removeClass("d-none");
                $("#errGender.editdelivery").addClass("d-block");
                $("#errGender.editdelivery").html(errGender);
            } else {
                errGender = '';
                $("#errGender.editdelivery").addClass("d-none");
                $("#errGender.editdelivery").removeClass("d-block");
                $("#errGender.editdelivery").html(errGender);
            }
        }

        if (errAll != '' || errDate != '' || errTemp != '' || errRR != '' ||
            errHR != '' || errBP != '' || errAge != '' || errBabiesNo != '' || errGender != '') {

            $("#alertEditDeliveryError.editdelivery").addClass("d-block");
            $("#alertEditDeliveryError.editdelivery").removeClass("d-none");

            return false;
        } else {

            $("#alertEditDeliveryError.editdelivery").removeClass("d-block");
            $("#alertEditDeliveryError.editdelivery").addClass("d-none");

            if (delivery_date.length != '' && delivery_temp.length != '' &&
                delivery_rr.length != '' && delivery_hr.length != '' && delivery_bp.length != '' &&
                delivery_age.length != '' && delivery_babiesno.length != '' && delivery_gender.length != '') {

                //ajax
                var formData = $('#EditDeliveryForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/report/crudDelivery.php',
                    data: formData + '&action=EditDelivery',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertEditDeliveryError.editdelivery").addClass("d-block");
                            $("#alertEditDeliveryError.editdelivery").removeClass("d-none");

                            $("#errAll.editdelivery").removeClass("d-none");
                            $("#errAll.editdelivery").addClass("d-block");
                            $("#errAll.editdelivery").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertEditDeliverySuccess.editdelivery").removeClass("d-none");
                            $("#alertEditDeliverySuccess.editdelivery").addClass("d-block");

                            $("#succMsg.editdelivery").removeClass("d-none");
                            $("#succMsg.editdelivery").addClass("d-block");
                            $("#succMsg.editdelivery").html(feedback.message);
                            // $("#EditDeliveryForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertEditDeliverySuccess.editdelivery");
                                let alertLi = $("#succMsg.editdelivery");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonEditDeliveryOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonEditDeliveryTwo").click(function () {
                                location.reload()
                            });

                            $('#editDeliveryModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    //DELETE Delivery
    $(document).on('click', '#DeleteDelivery', function (e) {
        e.preventDefault();

        $.ajax({
            method: 'post',
            url: '/bhcm.com/app/controllers/report/crudDelivery.php',
            data: 'delivery_id=' + $('#delivery_id').val() +
                '&action=DeleteDelivery',
            dataType: 'JSON',
            success: function (feedback) {
                if (feedback.status === "error") {
                    $("#alertDeleteDeliveryError.deletedelivery").addClass(
                        "d-block");
                    $("#alertDeleteDeliveryError.deletedelivery").removeClass(
                        "d-none");

                    $("#errAll.deletedelivery").removeClass("d-none");
                    $("#errAll.deletedelivery").addClass("d-block");
                    $("#errAll.deletedelivery").html(feedback.errAll);
                } else if (feedback.status === "success") {
                    $("#warningDeliverySuccess.deletedelivery").removeClass('d-block');
                    $("#warningDeliverySuccess.deletedelivery").addClass('d-none');

                    $("#alertDeliverySuccess.deletedelivery").removeClass('d-none');
                    $("#alertDeliverySuccess.deletedelivery").addClass('d-block');

                    $("#succMsg.deletedelivery").html(feedback.message);

                    $("#prenatalModalFooterOne").removeClass('d-block');
                    $("#prenatalModalFooterOne").addClass('d-none');

                    $("#prenatalModalFooterTwo").removeClass('d-none');
                    $("#prenatalModalFooterTwo").addClass('d-block');

                    $("#ModalCloseButtonDeleteDeliverylOne").click(function () {
                        location.reload()
                    });

                    $("#ModalCloseButtonDeleteDeliveryTwo").click(function () {
                        location.reload()
                    });

                    $('#deleteDeliveryModal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                }
            }
        });
    });

});