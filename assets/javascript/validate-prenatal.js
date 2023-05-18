$(document).ready(function () {
    // ADD PRENATAL
    $("#AddPrenatal").click(function (e) {
        e.preventDefault();
        const prenatal_date = $('#prenatal_date.addprenatal').val();
        const prenatal_temp = $('#prenatal_temperature.addprenatal').val();
        const prenatal_rr = $('#prenatal_rr.addprenatal').val();
        const prenatal_hr = $('#prenatal_hr.addprenatal').val();
        const prenatal_bp = $('#prenatal_bp.addprenatal').val();
        const prenatal_sugarlevel = $('#prenatal_sugarlevel.addprenatal').val();
        const prenatal_hemoglobin = $('#prenatal_hemoglobin.addprenatal').val();
        const prenatal_weight = $('#prenatal_weight.addprenatal').val();
        const prenatal_height = $('#prenatal_height.addprenatal').val();
        const prenatal_dosename = $('#prenatal_dosename.addprenatal').val();
        const prenatal_doselevel = $('#prenatal_doselevel.addprenatal').val();
        const prenatal_medications = $('#prenatal_medications.addprenatal').val();


        var errAll = '';
        var errDate = '';
        var errTemp = '';
        var errRR = '';
        var errHR = '';
        var errBP = '';
        var errSL = '';
        var errHemoglobin = '';
        var errWeight = '';
        var errHeight = '';
        var errDoselevel = '';
        var errDosename = '';
        var errMedications = '';


        if (prenatal_date.length == '' && prenatal_temp.length == '' && prenatal_rr.length == '' &&
            prenatal_hr.length == '' && prenatal_bp.length == '' &&
            prenatal_sugarlevel.length == '' && prenatal_hemoglobin.length == '' &&
            prenatal_height.length == '' && prenatal_weight.length == '' &&
            prenatal_dosename.length == '' && prenatal_doselevel.length == '' &&
            prenatal_medications.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.addprenatal").removeClass("d-none");
            $("#errAll.addprenatal").addClass("d-block");
            $("#errAll.addprenatal").html(errAll);

        } else {
            errAll = '';
            $("#errAll.addprenatal").addClass("d-none");
            $("#errAll.addprenatal").removeClass("d-block");
            $("#errAll.addprenatal").html(errAll);

            if (prenatal_date.length == '') {
                errDate = '<li> Date is required! </li>';
                $("#errDate.addprenatal").removeClass("d-none");
                $("#errDate.addprenatal").addClass("d-block");
                $("#errDate.addprenatal").html(errDate);
            } else {
                errDate = '';
                $("#errDate.addprenatal").addClass("d-none");
                $("#errDate.addprenatal").removeClass("d-block");
                $("#errDate.addprenatal").html(errDate);
            }

            if (prenatal_temp.length == '') {
                errTemp = '<li> Temperature is required! </li>';
                $("#errTemp.addprenatal").removeClass("d-none");
                $("#errTemp.addprenatal").addClass("d-block");
                $("#errTemp.addprenatal").html(errTemp);
            } else {
                errTemp = '';
                $("#errTemp.addprenatal").addClass("d-none");
                $("#errTemp.addprenatal").removeClass("d-block");
                $("#errTemp.addprenatal").html(errTemp);
            }

            if (prenatal_rr.length == '') {
                errRR = '<li> Respiratory rate is required! </li>';
                $("#errRR.addprenatal").removeClass("d-none");
                $("#errRR.addprenatal").addClass("d-block");
                $("#errRR.addprenatal").html(errRR);
            } else {
                errRR = '';
                $("#errRR.addprenatal").addClass("d-none");
                $("#errRR.addprenatal").removeClass("d-block");
                $("#errRR.addprenatal").html(errRR);

            }

            if (prenatal_hr.length == '') {
                errHR = '<li> Heart Rate is required! </li>';
                $("#errHR.addprenatal").removeClass("d-none");
                $("#errHR.addprenatal").addClass("d-block");
                $("#errHR.addprenatal").html(errHR);
            } else {
                errHR = '';
                $("#errHR.addprenatal").addClass("d-none");
                $("#errHR.addprenatal").removeClass("d-block");
                $("#errHR.addprenatal").html(errHR);
            }


            if (prenatal_bp.length == '') {
                errBP = '<li> Blood pressure is required! </li>';
                $("#errBP.addprenatal").removeClass("d-none");
                $("#errBP.addprenatal").addClass("d-block");
                $("#errBP.addprenatal").html(errBP);
            } else {
                errBP = '';
                $("#errBP.addprenatal").addClass("d-none");
                $("#errBP.addprenatal").removeClass("d-block");
                $("#errBP.addprenatal").html(errBP);
            }

            if (prenatal_sugarlevel.length == '') {
                errSL = '<li> Sugar level is required! </li>';
                $("#errSL.addprenatal").removeClass("d-none");
                $("#errSL.addprenatal").addClass("d-block");
                $("#errSL.addprenatal").html(errSL);
            } else {
                errSL = '';
                $("#errSL.addprenatal").addClass("d-none");
                $("#errSL.addprenatal").removeClass("d-block");
                $("#errSL.addprenatal").html(errSL);
            }

            if (prenatal_hemoglobin.length == '') {
                errHemoglobin = '<li> Hemoglobin level is required! </li>';
                $("#errHemoglobin.addprenatal").removeClass("d-none");
                $("#errHemoglobin.addprenatal").addClass("d-block");
                $("#errHemoglobin.addprenatal").html(errHemoglobin);
            } else {
                errHemoglobin = '';
                $("#errHemoglobin.addprenatal").addClass("d-none");
                $("#errHemoglobin.addprenatal").removeClass("d-block");
                $("#errHemoglobin.addprenatal").html(errHemoglobin);
            }

            if (prenatal_weight.length == '') {
                errWeight = '<li> Weight is required! </li>';
                $("#errWeight.addprenatal").removeClass("d-none");
                $("#errWeight.addprenatal").addClass("d-block");
                $("#errWeight.addprenatal").html(errWeight);
            } else {
                errWeight = '';
                $("#errWeight.addprenatal").addClass("d-none");
                $("#errWeight.addprenatal").removeClass("d-block");
                $("#errWeight.addprenatal").html(errWeight);
            }

            if (prenatal_height.length == '') {
                errHeight = '<li> Height is required! </li>';
                $("#errHeight.addprenatal").removeClass("d-none");
                $("#errHeight.addprenatal").addClass("d-block");
                $("#errHeight.addprenatal").html(errHeight);
            } else {
                errHeight = '';
                $("#errHeight.addprenatal").addClass("d-none");
                $("#errHeight.addprenatal").removeClass("d-block");
                $("#errHeight.addprenatal").html(errHeight);
            }

            if (prenatal_dosename.length == '') {
                errDosename = '<li> Dose name is required! </li>';
                $("#errDosename.addprenatal").removeClass("d-none");
                $("#errDosename.addprenatal").addClass("d-block");
                $("#errDosename.addprenatal").html(errDosename);
            } else {
                errDosename = '';
                $("#errDosename.addprenatal").addClass("d-none");
                $("#errDosename.addprenatal").removeClass("d-block");
                $("#errDosename.addprenatal").html(errDosename);
            }

            if (prenatal_doselevel.length == '') {
                errDoselevel = '<li> Vaccine level is required! </li>';
                $("#errDoselevel.addprenatal").removeClass("d-none");
                $("#errDoselevel.addprenatal").addClass("d-block");
                $("#errDoselevel.addprenatal").html(errDoselevel);
            } else {
                errDoselevel = '';
                $("#errDoselevel.addprenatal").addClass("d-none");
                $("#errDoselevel.addprenatal").removeClass("d-block");
                $("#errDoselevel.addprenatal").html(errDoselevel);
            }

            if (prenatal_medications.length == '') {
                errMedications = '<li> Medication is required! </li>';
                $("#errMedications.addprenatal").removeClass("d-none");
                $("#errMedications.addprenatal").addClass("d-block");
                $("#errMedications.addprenatal").html(errMedications);
            } else {
                errMedications = '';
                $("#errMedications.addprenatal").addClass("d-none");
                $("#errMedications.addprenatal").removeClass("d-block");
                $("#errMedications.addprenatal").html(errMedications);
            }
        }

        if (errAll != '' || errDate != '' || errTemp != '' || errRR != '' ||
            errHR != '' || errBP != '' ||
            errSL != '' || errHemoglobin != '' || errWeight != '' || errHeight != '' ||
            errDosename != '' || errDoselevel != '' || errMedications != '') {

            $("#alertAddPrenatalError.addprenatal").addClass("d-block");
            $("#alertAddPrenatalError.addprenatal").removeClass("d-none");

            return false;
        } else {

            $("#alertAddPrenatalError.addprenatal").removeClass("d-block");
            $("#alertAddPrenatalError.addprenatal").addClass("d-none");

            if (prenatal_date.length != '' && prenatal_temp.length != '' &&
                prenatal_rr.length != '' && prenatal_hr.length != '' && prenatal_bp.length != '' &&
                prenatal_sugarlevel.length != '' && prenatal_hemoglobin.length != '' &&
                prenatal_weight.length != '' && prenatal_height.length != '' &&
                prenatal_dosename.length != '' && prenatal_doselevel.length != '' &&
                prenatal_medications.length != '') {

                //ajax
                var formData = $('#AddPrenatalForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/report/crudPrenatal.php',
                    data: formData + '&action=AddPrenatal',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddPrenatalError.addprenatal").addClass("d-block");
                            $("#alertAddPrenatalError.addprenatal").removeClass("d-none");

                            $("#errAll.addprenatal").removeClass("d-none");
                            $("#errAll.addprenatal").addClass("d-block");
                            $("#errAll.addprenatal").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertAddPrenatalSuccess.addprenatal").removeClass("d-none");
                            $("#alertAddPrenatalSuccess.addprenatal").addClass("d-block");

                            $("#succMsg.addprenatal").removeClass("d-none");
                            $("#succMsg.addprenatal").addClass("d-block");
                            $("#succMsg.addprenatal").html(feedback.message);
                            $("#AddPrenatalForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertAddPrenatalSuccess.addprenatal");
                                let alertLi = $("#succMsg.addprenatal");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddPrenatalOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonAddPrenatalTwo").click(function () {
                                location.reload()
                            });

                            $('#addPrenatalModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    // EDIT PRENATAL
    $(document).on('click', '#EditPrenatal', function (e) {
        e.preventDefault();
        const prenatal_date = $('#prenatal_date.editprenatal').val();
        const prenatal_temp = $('#prenatal_temperature.editprenatal').val();
        const prenatal_rr = $('#prenatal_rr.editprenatal').val();
        const prenatal_hr = $('#prenatal_hr.editprenatal').val();
        const prenatal_bp = $('#prenatal_bp.editprenatal').val();
        const prenatal_sugarlevel = $('#prenatal_sugarlevel.editprenatal').val();
        const prenatal_hemoglobin = $('#prenatal_hemoglobin.editprenatal').val();
        const prenatal_weight = $('#prenatal_weight.editprenatal').val();
        const prenatal_height = $('#prenatal_height.editprenatal').val();
        const prenatal_dosename = $('#prenatal_dosename.editprenatal').val();
        const prenatal_doselevel = $('#prenatal_doselevel.editprenatal').val();
        const prenatal_medications = $('#prenatal_medications.editprenatal').val();


        var errAll = '';
        var errDate = '';
        var errTemp = '';
        var errRR = '';
        var errHR = '';
        var errBP = '';
        var errSL = '';
        var errHemoglobin = '';
        var errWeight = '';
        var errHeight = '';
        var errDoselevel = '';
        var errDosename = '';
        var errMedications = '';


        if (prenatal_date.length == '' && prenatal_temp.length == '' && prenatal_rr.length == '' &&
            prenatal_hr.length == '' && prenatal_bp.length == '' &&
            prenatal_sugarlevel.length == '' && prenatal_hemoglobin.length == '' &&
            prenatal_height.length == '' && prenatal_weight.length == '' &&
            prenatal_dosename.length == '' && prenatal_doselevel.length == '' &&
            prenatal_medications.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.editprenatal").removeClass("d-none");
            $("#errAll.editprenatal").addClass("d-block");
            $("#errAll.editprenatal").html(errAll);

        } else {
            errAll = '';
            $("#errAll.editprenatal").addClass("d-none");
            $("#errAll.editprenatal").removeClass("d-block");
            $("#errAll.editprenatal").html(errAll);

            if (prenatal_date.length == '') {
                errDate = '<li> Date is required! </li>';
                $("#errDate.editprenatal").removeClass("d-none");
                $("#errDate.editprenatal").addClass("d-block");
                $("#errDate.editprenatal").html(errDate);
            } else {
                errDate = '';
                $("#errDate.editprenatal").addClass("d-none");
                $("#errDate.editprenatal").removeClass("d-block");
                $("#errDate.editprenatal").html(errDate);
            }

            if (prenatal_temp.length == '') {
                errTemp = '<li> Temperature is required! </li>';
                $("#errTemp.editprenatal").removeClass("d-none");
                $("#errTemp.editprenatal").addClass("d-block");
                $("#errTemp.editprenatal").html(errTemp);
            } else {
                errTemp = '';
                $("#errTemp.editprenatal").addClass("d-none");
                $("#errTemp.editprenatal").removeClass("d-block");
                $("#errTemp.editprenatal").html(errTemp);
            }

            if (prenatal_rr.length == '') {
                errRR = '<li> Respiratory rate is required! </li>';
                $("#errRR.editprenatal").removeClass("d-none");
                $("#errRR.editprenatal").addClass("d-block");
                $("#errRR.editprenatal").html(errRR);
            } else {
                errRR = '';
                $("#errRR.editprenatal").addClass("d-none");
                $("#errRR.editprenatal").removeClass("d-block");
                $("#errRR.editprenatal").html(errRR);

            }

            if (prenatal_hr.length == '') {
                errHR = '<li> Heart Rate is required! </li>';
                $("#errHR.editprenatal").removeClass("d-none");
                $("#errHR.editprenatal").addClass("d-block");
                $("#errHR.editprenatal").html(errHR);
            } else {
                errHR = '';
                $("#errHR.editprenatal").addClass("d-none");
                $("#errHR.editprenatal").removeClass("d-block");
                $("#errHR.editprenatal").html(errHR);
            }


            if (prenatal_bp.length == '') {
                errBP = '<li> Blood pressure is required! </li>';
                $("#errBP.editprenatal").removeClass("d-none");
                $("#errBP.editprenatal").addClass("d-block");
                $("#errBP.editprenatal").html(errBP);
            } else {
                errBP = '';
                $("#errBP.editprenatal").addClass("d-none");
                $("#errBP.editprenatal").removeClass("d-block");
                $("#errBP.editprenatal").html(errBP);
            }

            if (prenatal_sugarlevel.length == '') {
                errSL = '<li> Sugar level is required! </li>';
                $("#errSL.editprenatal").removeClass("d-none");
                $("#errSL.editprenatal").addClass("d-block");
                $("#errSL.editprenatal").html(errSL);
            } else {
                errSL = '';
                $("#errSL.editprenatal").addClass("d-none");
                $("#errSL.editprenatal").removeClass("d-block");
                $("#errSL.editprenatal").html(errSL);
            }

            if (prenatal_hemoglobin.length == '') {
                errHemoglobin = '<li> Hemoglobin level is required! </li>';
                $("#errHemoglobin.editprenatal").removeClass("d-none");
                $("#errHemoglobin.editprenatal").addClass("d-block");
                $("#errHemoglobin.editprenatal").html(errHemoglobin);
            } else {
                errHemoglobin = '';
                $("#errHemoglobin.editprenatal").addClass("d-none");
                $("#errHemoglobin.editprenatal").removeClass("d-block");
                $("#errHemoglobin.editprenatal").html(errHemoglobin);
            }

            if (prenatal_weight.length == '') {
                errWeight = '<li> Weight is required! </li>';
                $("#errWeight.editprenatal").removeClass("d-none");
                $("#errWeight.editprenatal").addClass("d-block");
                $("#errWeight.editprenatal").html(errWeight);
            } else {
                errWeight = '';
                $("#errWeight.editprenatal").addClass("d-none");
                $("#errWeight.editprenatal").removeClass("d-block");
                $("#errWeight.editprenatal").html(errWeight);
            }

            if (prenatal_height.length == '') {
                errHeight = '<li> Height is required! </li>';
                $("#errHeight.editprenatal").removeClass("d-none");
                $("#errHeight.editprenatal").addClass("d-block");
                $("#errHeight.editprenatal").html(errHeight);
            } else {
                errHeight = '';
                $("#errHeight.editprenatal").addClass("d-none");
                $("#errHeight.editprenatal").removeClass("d-block");
                $("#errHeight.editprenatal").html(errHeight);
            }

            if (prenatal_dosename.length == '') {
                errDosename = '<li> Dose name is required! </li>';
                $("#errDosename.editprenatal").removeClass("d-none");
                $("#errDosename.editprenatal").addClass("d-block");
                $("#errDosename.editprenatal").html(errDosename);
            } else {
                errDosename = '';
                $("#errDosename.editprenatal").addClass("d-none");
                $("#errDosename.editprenatal").removeClass("d-block");
                $("#errDosename.editprenatal").html(errDosename);
            }

            if (prenatal_doselevel.length == '') {
                errDoselevel = '<li> Vaccine level is required! </li>';
                $("#errDoselevel.editprenatal").removeClass("d-none");
                $("#errDoselevel.editprenatal").addClass("d-block");
                $("#errDoselevel.editprenatal").html(errDoselevel);
            } else {
                errDoselevel = '';
                $("#errDoselevel.editprenatal").addClass("d-none");
                $("#errDoselevel.editprenatal").removeClass("d-block");
                $("#errDoselevel.editprenatal").html(errDoselevel);
            }

            if (prenatal_medications.length == '') {
                errMedications = '<li> Medication is required! </li>';
                $("#errMedications.editprenatal").removeClass("d-none");
                $("#errMedications.editprenatal").addClass("d-block");
                $("#errMedications.editprenatal").html(errMedications);
            } else {
                errMedications = '';
                $("#errMedications.editprenatal").addClass("d-none");
                $("#errMedications.editprenatal").removeClass("d-block");
                $("#errMedications.editprenatal").html(errMedications);
            }
        }

        if (errAll != '' || errDate != '' || errTemp != '' || errRR != '' ||
            errHR != '' || errBP != '' ||
            errSL != '' || errHemoglobin != '' || errWeight != '' || errHeight != '' ||
            errDosename != '' || errDoselevel != '' || errMedications != '') {

            $("#alertEditPrenatalError.editprenatal").addClass("d-block");
            $("#alertEditPrenatalError.editprenatal").removeClass("d-none");

            return false;
        } else {

            $("#alertEditPrenatalError.editprenatal").removeClass("d-block");
            $("#alertEditPrenatalError.editprenatal").addClass("d-none");

            if (prenatal_date.length != '' && prenatal_temp.length != '' &&
                prenatal_rr.length != '' && prenatal_hr.length != '' && prenatal_bp.length != '' &&
                prenatal_sugarlevel.length != '' && prenatal_hemoglobin.length != '' &&
                prenatal_weight.length != '' && prenatal_height.length != '' &&
                prenatal_dosename.length != '' && prenatal_doselevel.length != '' &&
                prenatal_medications.length != '') {

                //ajax
                var formData = $('#EditPrenatalForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/report/crudPrenatal.php',
                    data: formData + '&action=EditPrenatal',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertEditPrenatalError.editprenatal").addClass("d-block");
                            $("#alertEditPrenatalError.editprenatal").removeClass("d-none");

                            $("#errAll.editprenatal").removeClass("d-none");
                            $("#errAll.editprenatal").addClass("d-block");
                            $("#errAll.editprenatal").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertEditPrenatalSuccess.editprenatal").removeClass("d-none");
                            $("#alertEditPrenatalSuccess.editprenatal").addClass("d-block");

                            $("#succMsg.editprenatal").removeClass("d-none");
                            $("#succMsg.editprenatal").addClass("d-block");
                            $("#succMsg.editprenatal").html(feedback.message);
                            $("#EditPrenatalForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertEditPrenatalSuccess.editprenatal");
                                let alertLi = $("#succMsg.editprenatal");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonEditPrenatalOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonEditPrenatalTwo").click(function () {
                                location.reload()
                            });

                            $('#editPrenatalModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }



    });


    //DELETE PRENATAL
    $(document).on('click', '#DeletePrenatal', function (e) {
        e.preventDefault();

        $.ajax({
            method: 'post',
            url: '/bhcm.com/app/controllers/report/crudPrenatal.php',
            data: 'prenatal_id=' + $('#prenatal_id').val() +
                '&action=DeletePrenatal',
            dataType: 'JSON',
            success: function (feedback) {
                if (feedback.status === "error") {
                    $("#alertDeletePrenatalError.deleteprenatal").addClass(
                        "d-block");
                    $("#alertDeletePrenatalError.deleteprenatal").removeClass(
                        "d-none");

                    $("#errAll.deleteprenatal").removeClass("d-none");
                    $("#errAll.deleteprenatal").addClass("d-block");
                    $("#errAll.deleteprenatal").html(feedback.errAll);
                } else if (feedback.status === "success") {
                    $("#warningPrenatalSuccess.deleteprenatal").removeClass('d-block');
                    $("#warningPrenatalSuccess.deleteprenatal").addClass('d-none');

                    $("#alertPrenatalSuccess.deleteprenatal").removeClass('d-none');
                    $("#alertPrenatalSuccess.deleteprenatal").addClass('d-block');

                    $("#succMsg.deleteprenatal").html(feedback.message);

                    $("#prenatalModalFooterOne").removeClass('d-block');
                    $("#prenatalModalFooterOne").addClass('d-none');

                    $("#prenatalModalFooterTwo").removeClass('d-none');
                    $("#prenatalModalFooterTwo").addClass('d-block');

                    $("#ModalCloseButtonDeletePrenatalOne").click(function () {
                        location.reload()
                    });

                    $("#ModalCloseButtonDeletePrenatalTwo").click(function () {
                        location.reload()
                    });

                    $('#deletePrenatalModal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                }
            }
        });
    });
});