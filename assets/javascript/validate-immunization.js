$(document).ready(function () {
    // ADD IMMUNIZATION
    $("#AddImmunization").click(function (e) {
        e.preventDefault();
        const immu_date = $('#immunization_date.addimmunization').val();
        const immu_temp = $('#immunization_temperature.addimmunization').val();
        const immu_rr = $('#immunization_rr.addimmunization').val();
        const immu_hr = $('#immunization_hr.addimmunization').val();
        const immu_bp = $('#immunization_bp.addimmunization').val();
        const immu_weight = $('#immunization_weight.addimmunization').val();
        const immu_height = $('#immunization_height.addimmunization').val();
        const immu_vaccinetype = $('#immunization_vaccinetype.addimmunization').val();
        const immu_vaccinename = $('#immunization_vaccinename.addimmunization').val();

        var errAll = '';
        var errDate = '';
        var errTemp = '';
        var errRR = '';
        var errHR = '';
        var errBP = '';
        var errWeight = '';
        var errHeight = '';
        var errVaccinetype = '';
        var errVaccinename = '';

        if (immu_date.length == '' && immu_temp.length == '' && immu_rr.length == '' &&
            immu_hr.length == '' && immu_bp.length == '' &&
            immu_height.length == '' && immu_weight.length == '' &&
            immu_vaccinetype.length == '' && immu_vaccinename.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.addimmunization").removeClass("d-none");
            $("#errAll.addimmunization").addClass("d-block");
            $("#errAll.addimmunization").html(errAll);

        } else {
            errAll = '';
            $("#errAll.addimmunization").addClass("d-none");
            $("#errAll.addimmunization").removeClass("d-block");
            $("#errAll.addimmunization").html(errAll);

            if (immu_date.length == '') {
                errDate = '<li> Date is required! </li>';
                $("#errDate.addimmunization").removeClass("d-none");
                $("#errDate.addimmunization").addClass("d-block");
                $("#errDate.addimmunization").html(errDate);
            } else {
                errDate = '';
                $("#errDate.addimmunization").addClass("d-none");
                $("#errDate.addimmunization").removeClass("d-block");
                $("#errDate.addimmunization").html(errDate);
            }

            if (immu_temp.length == '') {
                errTemp = '<li> Temperature is required! </li>';
                $("#errTemp.addimmunization").removeClass("d-none");
                $("#errTemp.addimmunization").addClass("d-block");
                $("#errTemp.addimmunization").html(errTemp);
            } else {
                errTemp = '';
                $("#errTemp.addimmunization").addClass("d-none");
                $("#errTemp.addimmunization").removeClass("d-block");
                $("#errTemp.addimmunization").html(errTemp);
            }

            if (immu_rr.length == '') {
                errRR = '<li> Respiratory rate is required! </li>';
                $("#errRR.addimmunization").removeClass("d-none");
                $("#errRR.addimmunization").addClass("d-block");
                $("#errRR.addimmunization").html(errRR);
            } else {
                errRR = '';
                $("#errRR.addimmunization").addClass("d-none");
                $("#errRR.addimmunization").removeClass("d-block");
                $("#errRR.addimmunization").html(errRR);

            }

            if (immu_hr.length == '') {
                errHR = '<li> Heart Rate is required! </li>';
                $("#errHR.addimmunization").removeClass("d-none");
                $("#errHR.addimmunization").addClass("d-block");
                $("#errHR.addimmunization").html(errHR);
            } else {
                errHR = '';
                $("#errHR.addimmunization").addClass("d-none");
                $("#errHR.addimmunization").removeClass("d-block");
                $("#errHR.addimmunization").html(errHR);
            }


            if (immu_bp.length == '') {
                errBP = '<li> Blood pressure is required! </li>';
                $("#errBP.addimmunization").removeClass("d-none");
                $("#errBP.addimmunization").addClass("d-block");
                $("#errBP.addimmunization").html(errBP);
            } else {
                errBP = '';
                $("#errBP.addimmunization").addClass("d-none");
                $("#errBP.addimmunization").removeClass("d-block");
                $("#errBP.addimmunization").html(errBP);
            }

            if (immu_weight.length == '') {
                errWeight = '<li> Weight is required! </li>';
                $("#errWeight.addimmunization").removeClass("d-none");
                $("#errWeight.addimmunization").addClass("d-block");
                $("#errWeight.addimmunization").html(errWeight);
            } else {
                errWeight = '';
                $("#errWeight.addimmunization").addClass("d-none");
                $("#errWeight.addimmunization").removeClass("d-block");
                $("#errWeight.addimmunization").html(errWeight);
            }

            if (immu_height.length == '') {
                errHeight = '<li> Height is required! </li>';
                $("#errHeight.addimmunization").removeClass("d-none");
                $("#errHeight.addimmunization").addClass("d-block");
                $("#errHeight.addimmunization").html(errHeight);
            } else {
                errHeight = '';
                $("#errHeight.addimmunization").addClass("d-none");
                $("#errHeight.addimmunization").removeClass("d-block");
                $("#errHeight.addimmunization").html(errHeight);
            }

            if (immu_vaccinetype.length == '') {
                errVaccinetype = '<li> Vaccine type is required! </li>';
                $("#errVaccinetype.addimmunization").removeClass("d-none");
                $("#errVaccinetype.addimmunization").addClass("d-block");
                $("#errVaccinetype.addimmunization").html(errVaccinetype);
            } else {
                errVaccinetype = '';
                $("#errVaccinetype.addimmunization").addClass("d-none");
                $("#errVaccinetype.addimmunization").removeClass("d-block");
                $("#errVaccinetype.addimmunization").html(errVaccinetype);
            }

            if (immu_vaccinename.length == '') {
                errVaccinename = '<li> Vaccine name is required! </li>';
                $("#errVaccinename.addimmunization").removeClass("d-none");
                $("#errVaccinename.addimmunization").addClass("d-block");
                $("#errVaccinename.addimmunization").html(errVaccinename);
            } else {
                errVaccinename = '';
                $("#errVaccinename.addimmunization").addClass("d-none");
                $("#errVaccinename.addimmunization").removeClass("d-block");
                $("#errVaccinename.addimmunization").html(errVaccinename);
            }
        }

        if (errAll != '' || errDate != '' || errTemp != '' || errRR != '' ||
            errHR != '' || errBP != '' || errWeight != '' || errHeight != '' ||
            errVaccinename != '' || errVaccinetype != '') {

            $("#alertAddImmunizationError.addimmunization").addClass("d-block");
            $("#alertAddImmunizationError.addimmunization").removeClass("d-none");

            return false;
        } else {

            $("#alertAddImmunizationError.addimmunization").removeClass("d-block");
            $("#alertAddImmunizationError.addimmunization").addClass("d-none");

            if (immu_date.length != '' && immu_temp.length != '' &&
                immu_rr.length != '' && immu_hr.length != '' && immu_bp.length != '' &&
                immu_weight.length != '' && immu_height.length != '' &&
                immu_vaccinename.length != '' && immu_vaccinetype.length != '') {

                //ajax
                var formData = $('#AddImmunizationForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/report/crudImmunization.php',
                    data: formData + '&action=AddImmunization',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddImmunizationError.addimmunization").addClass("d-block");
                            $("#alertAddImmunizationError.addimmunization").removeClass("d-none");

                            $("#errAll.addimmunization").removeClass("d-none");
                            $("#errAll.addimmunization").addClass("d-block");
                            $("#errAll.addimmunization").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertAddImmunizationSuccess.addimmunization").removeClass("d-none");
                            $("#alertAddImmunizationSuccess.addimmunization").addClass("d-block");

                            $("#succMsg.addimmunization").removeClass("d-none");
                            $("#succMsg.addimmunization").addClass("d-block");
                            $("#succMsg.addimmunization").html(feedback.message);
                            $("#AddImmunizationForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertAddImmunizationSuccess.addimmunization");
                                let alertLi = $("#succMsg.addimmunization");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddImmunizationOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonAddImmunizationTwo").click(function () {
                                location.reload()
                            });

                            $('#addImmunizationModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    // EDIT IMMUNIZATION
    $(document).on('click', '#EditImmunization', function (e) {
        e.preventDefault();
        const immu_date = $('#immunization_date.editimmunization').val();
        const immu_temp = $('#immunization_temperature.editimmunization').val();
        const immu_rr = $('#immunization_rr.editimmunization').val();
        const immu_hr = $('#immunization_hr.editimmunization').val();
        const immu_bp = $('#immunization_bp.editimmunization').val();
        const immu_weight = $('#immunization_weight.editimmunization').val();
        const immu_height = $('#immunization_height.editimmunization').val();
        const immu_vaccinetype = $('#immunization_vaccinetype.editimmunization').val();
        const immu_vaccinename = $('#immunization_vaccinename.editimmunization').val();

        var errAll = '';
        var errDate = '';
        var errTemp = '';
        var errRR = '';
        var errHR = '';
        var errBP = '';
        var errWeight = '';
        var errHeight = '';
        var errVaccinetype = '';
        var errVaccinename = '';

        if (immu_date.length == '' && immu_temp.length == '' && immu_rr.length == '' &&
            immu_hr.length == '' && immu_bp.length == '' &&
            immu_height.length == '' && immu_weight.length == '' &&
            immu_vaccinetype.length == '' && immu_vaccinename.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.editimmunization").removeClass("d-none");
            $("#errAll.editimmunization").addClass("d-block");
            $("#errAll.editimmunization").html(errAll);

        } else {
            errAll = '';
            $("#errAll.editimmunization").addClass("d-none");
            $("#errAll.editimmunization").removeClass("d-block");
            $("#errAll.editimmunization").html(errAll);

            if (immu_date.length == '') {
                errDate = '<li> Date is required! </li>';
                $("#errDate.editimmunization").removeClass("d-none");
                $("#errDate.editimmunization").addClass("d-block");
                $("#errDate.editimmunization").html(errDate);
            } else {
                errDate = '';
                $("#errDate.editimmunization").addClass("d-none");
                $("#errDate.editimmunization").removeClass("d-block");
                $("#errDate.editimmunization").html(errDate);
            }

            if (immu_temp.length == '') {
                errTemp = '<li> Temperature is required! </li>';
                $("#errTemp.editimmunization").removeClass("d-none");
                $("#errTemp.editimmunization").addClass("d-block");
                $("#errTemp.editimmunization").html(errTemp);
            } else {
                errTemp = '';
                $("#errTemp.editimmunization").addClass("d-none");
                $("#errTemp.editimmunization").removeClass("d-block");
                $("#errTemp.editimmunization").html(errTemp);
            }

            if (immu_rr.length == '') {
                errRR = '<li> Respiratory rate is required! </li>';
                $("#errRR.editimmunization").removeClass("d-none");
                $("#errRR.editimmunization").addClass("d-block");
                $("#errRR.editimmunization").html(errRR);
            } else {
                errRR = '';
                $("#errRR.editimmunization").addClass("d-none");
                $("#errRR.editimmunization").removeClass("d-block");
                $("#errRR.editimmunization").html(errRR);

            }

            if (immu_hr.length == '') {
                errHR = '<li> Heart Rate is required! </li>';
                $("#errHR.editimmunization").removeClass("d-none");
                $("#errHR.editimmunization").addClass("d-block");
                $("#errHR.editimmunization").html(errHR);
            } else {
                errHR = '';
                $("#errHR.editimmunization").addClass("d-none");
                $("#errHR.editimmunization").removeClass("d-block");
                $("#errHR.editimmunization").html(errHR);
            }


            if (immu_bp.length == '') {
                errBP = '<li> Blood pressure is required! </li>';
                $("#errBP.editimmunization").removeClass("d-none");
                $("#errBP.editimmunization").addClass("d-block");
                $("#errBP.editimmunization").html(errBP);
            } else {
                errBP = '';
                $("#errBP.editimmunization").addClass("d-none");
                $("#errBP.editimmunization").removeClass("d-block");
                $("#errBP.editimmunization").html(errBP);
            }

            if (immu_weight.length == '') {
                errWeight = '<li> Weight is required! </li>';
                $("#errWeight.editimmunization").removeClass("d-none");
                $("#errWeight.editimmunization").addClass("d-block");
                $("#errWeight.editimmunization").html(errWeight);
            } else {
                errWeight = '';
                $("#errWeight.editimmunization").addClass("d-none");
                $("#errWeight.editimmunization").removeClass("d-block");
                $("#errWeight.editimmunization").html(errWeight);
            }

            if (immu_height.length == '') {
                errHeight = '<li> Height is required! </li>';
                $("#errHeight.editimmunization").removeClass("d-none");
                $("#errHeight.editimmunization").addClass("d-block");
                $("#errHeight.editimmunization").html(errHeight);
            } else {
                errHeight = '';
                $("#errHeight.editimmunization").addClass("d-none");
                $("#errHeight.editimmunization").removeClass("d-block");
                $("#errHeight.editimmunization").html(errHeight);
            }

            if (immu_vaccinetype.length == '') {
                errVaccinetype = '<li> Vaccine type is required! </li>';
                $("#errVaccinetype.editimmunization").removeClass("d-none");
                $("#errVaccinetype.editimmunization").addClass("d-block");
                $("#errVaccinetype.editimmunization").html(errVaccinetype);
            } else {
                errVaccinetype = '';
                $("#errVaccinetype.editimmunization").addClass("d-none");
                $("#errVaccinetype.editimmunization").removeClass("d-block");
                $("#errVaccinetype.editimmunization").html(errVaccinetype);
            }

            if (immu_vaccinename.length == '') {
                errVaccinename = '<li> Vaccine name is required! </li>';
                $("#errVaccinename.editimmunization").removeClass("d-none");
                $("#errVaccinename.editimmunization").addClass("d-block");
                $("#errVaccinename.editimmunization").html(errVaccinename);
            } else {
                errVaccinename = '';
                $("#errVaccinename.editimmunization").addClass("d-none");
                $("#errVaccinename.editimmunization").removeClass("d-block");
                $("#errVaccinename.editimmunization").html(errVaccinename);
            }
        }

        if (errAll != '' || errDate != '' || errTemp != '' || errRR != '' ||
            errHR != '' || errBP != '' || errWeight != '' || errHeight != '' ||
            errVaccinename != '' || errVaccinetype != '') {

            $("#alertEditImmunizationError.editimmunization").addClass("d-block");
            $("#alertEditImmunizationError.editimmunization").removeClass("d-none");

            return false;
        } else {

            $("#alertEditImmunizationError.editimmunization").removeClass("d-block");
            $("#alertEditImmunizationError.editimmunization").addClass("d-none");

            if (immu_date.length != '' && immu_temp.length != '' &&
                immu_rr.length != '' && immu_hr.length != '' && immu_bp.length != '' &&
                immu_weight.length != '' && immu_height.length != '' &&
                immu_vaccinename.length != '' && immu_vaccinetype.length != '') {

                //ajax
                var formData = $('#EditImmunizationForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/report/crudImmunization.php',
                    data: formData + '&action=EditImmunization',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertEditImmunizationError.editimmunization").addClass("d-block");
                            $("#alertEditImmunizationError.editimmunization").removeClass("d-none");

                            $("#errAll.editimmunization").removeClass("d-none");
                            $("#errAll.editimmunization").addClass("d-block");
                            $("#errAll.editimmunization").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertEditImmunizationSuccess.editimmunization").removeClass("d-none");
                            $("#alertEditImmunizationSuccess.editimmunization").addClass("d-block");

                            $("#succMsg.editimmunization").removeClass("d-none");
                            $("#succMsg.editimmunization").addClass("d-block");
                            $("#succMsg.editimmunization").html(feedback.message);
                            $("#EditImmunizationForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertEditImmunizationSuccess.editimmunization");
                                let alertLi = $("#succMsg.editimmunization");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonEditImmunizationOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonEditImmunizationTwo").click(function () {
                                location.reload()
                            });

                            $('#editImmunizationModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    //DELETE CONSULTATION
    $(document).on('click', '#DeleteImmunization', function (e) {
        e.preventDefault();

        $.ajax({
            method: 'post',
            url: '/bhcm.com/app/controllers/report/crudImmunization.php',
            data: 'immunization_id=' + $('#immunization_id').val() +
                '&action=DeleteImmunization',
            dataType: 'JSON',
            success: function (feedback) {
                if (feedback.status === "error") {
                    $("#alertDeleteImmunizationError.deleteimmunization").addClass(
                        "d-block");
                    $("#alertDeleteImmunizationError.deleteimmunization").removeClass(
                        "d-none");

                    $("#errAll.deleteimmunization").removeClass("d-none");
                    $("#errAll.deleteimmunization").addClass("d-block");
                    $("#errAll.deleteimmunization").html(feedback.errAll);
                } else if (feedback.status === "success") {
                    $("#warningImmunizationSuccess.deleteimmunization").removeClass('d-block');
                    $("#warningImmunizationSuccess.deleteimmunization").addClass('d-none');

                    $("#alertImmunizationSuccess.deleteimmunization").removeClass('d-none');
                    $("#alertImmunizationSuccess.deleteimmunization").addClass('d-block');

                    $("#succMsg.deleteimmunization").html(feedback.message);

                    $("#immunizationModalFooterOne").removeClass('d-block');
                    $("#immunizationModalFooterOne").addClass('d-none');

                    $("#immunizationModalFooterTwo").removeClass('d-none');
                    $("#immunizationModalFooterTwo").addClass('d-block');

                    $("#ModalCloseButtonDeleteImmunizationOne").click(function () {
                        location.reload()
                    });

                    $("#ModalCloseButtonDeleteImmunizationTwo").click(function () {
                        location.reload()
                    });

                    $('#deleteImmunizationModal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                }
            }
        });
    });
});