$(document).ready(function () {
    // ADD CONSULTATION
    $("#AddConsultation").click(function (e) {
        e.preventDefault();
        const c_date = $('#consultation_date.addconsultation').val();
        const c_temp = $('#consultation_temperature.addconsultation').val();
        const c_rr = $('#consultation_rr.addconsultation').val();
        const c_hr = $('#consultation_hr.addconsultation').val();
        const c_bp = $('#consultation_bp.addconsultation').val();
        const c_symp = $('#consultation_symptoms.addconsultation').val();
        const c_find = $('#consultation_findings.addconsultation').val();
        const c_med = $('#consultation_medications.addconsultation').val();

        var errAll = '';
        var errDate = '';
        var errTemp = '';
        var errRR = '';
        var errHR = '';
        var errBP = '';
        var errSymp = '';
        var errFind = '';
        var errMed = '';

        if (c_date.length == '' && c_temp.length == '' && c_rr.length == '' &&
            c_hr.length == '' && c_bp.length == '' &&
            c_symp.length == '' && c_find.length == '' && c_med.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.addconsultation").removeClass("d-none");
            $("#errAll.addconsultation").addClass("d-block");
            $("#errAll.addconsultation").html(errAll);

        } else {
            errAll = '';
            $("#errAll.addconsultation").addClass("d-none");
            $("#errAll.addconsultation").removeClass("d-block");
            $("#errAll.addconsultation").html(errAll);

            if (c_date.length == '') {
                errDate = '<li> Date is required! </li>';
                $("#errDate.addconsultation").removeClass("d-none");
                $("#errDate.addconsultation").addClass("d-block");
                $("#errDate.addconsultation").html(errDate);
            } else {
                errDate = '';
                $("#errDate.addconsultation").addClass("d-none");
                $("#errDate.addconsultation").removeClass("d-block");
                $("#errDate.addconsultation").html(errDate);
            }

            if (c_temp.length == '') {
                errTemp = '<li> Temperature is required! </li>';
                $("#errTemp.addconsultation").removeClass("d-none");
                $("#errTemp.addconsultation").addClass("d-block");
                $("#errTemp.addconsultation").html(errTemp);
            } else {
                errTemp = '';
                $("#errTemp.addconsultation").addClass("d-none");
                $("#errTemp.addconsultation").removeClass("d-block");
                $("#errTemp.addconsultation").html(errTemp);
            }

            if (c_rr.length == '') {
                errRR = '<li> Respiratory rate is required! </li>';
                $("#errRR.addconsultation").removeClass("d-none");
                $("#errRR.addconsultation").addClass("d-block");
                $("#errRR.addconsultation").html(errRR);
            } else {
                errRR = '';
                $("#errRR.addconsultation").addClass("d-none");
                $("#errRR.addconsultation").removeClass("d-block");
                $("#errRR.addconsultation").html(errRR);

            }

            if (c_hr.length == '') {
                errHR = '<li> Heart Rate is required! </li>';
                $("#errHR.addconsultation").removeClass("d-none");
                $("#errHR.addconsultation").addClass("d-block");
                $("#errHR.addconsultation").html(errHR);
            } else {
                errHR = '';
                $("#errHR.addconsultation").addClass("d-none");
                $("#errHR.addconsultation").removeClass("d-block");
                $("#errHR.addconsultation").html(errHR);
            }


            if (c_bp.length == '') {
                errBP = '<li> Blood pressure is required! </li>';
                $("#errBP.addconsultation").removeClass("d-none");
                $("#errBP.addconsultation").addClass("d-block");
                $("#errBP.addconsultation").html(errBP);
            } else {
                errBP = '';
                $("#errBP.addconsultation").addClass("d-none");
                $("#errBP.addconsultation").removeClass("d-block");
                $("#errBP.addconsultation").html(errBP);
            }

            if (c_symp.length == '') {
                errSymp = '<li> Symptoms is required! </li>';
                $("#errSymp.addconsultation").removeClass("d-none");
                $("#errSymp.addconsultation").addClass("d-block");
                $("#errSymp.addconsultation").html(errSymp);
            } else {
                errSymp = '';
                $("#errSymp.addconsultation").addClass("d-none");
                $("#errSymp.addconsultation").removeClass("d-block");
                $("#errSymp.addconsultation").html(errSymp);
            }

            if (c_find.length == '') {
                errFind = '<li>Findings is required! </li>';
                $("#errFind.addconsultation").removeClass("d-none");
                $("#errFind.addconsultation").addClass("d-block");
                $("#errFind.addconsultation").html(errFind);
            } else {
                errFind = '';
                $("#errFind.addconsultation").addClass("d-none");
                $("#errFind.addconsultation").removeClass("d-block");
                $("#errFind.addconsultation").html(errFind);
            }

            if (c_med.length == '') {
                errMed = '<li>Medication is required! </li>';
                $("#errMed.addconsultation").removeClass("d-none");
                $("#errMed.addconsultation").addClass("d-block");
                $("#errMed.addconsultation").html(errMed);
            } else {
                errMed = '';
                $("#errMed.addconsultation").addClass("d-none");
                $("#errMed.addconsultation").removeClass("d-block");
                $("#errMed.addconsultation").html(errMed);
            }
        }

        if (errAll != '' || errDate != '' || errTemp != '' || errRR != '' ||
            errHR != '' || errBP != '' || errSymp != '' || errFind != '' || errMed != '') {

            $("#alertAddConsultationError.addconsultation").addClass("d-block");
            $("#alertAddConsultationError.addconsultation").removeClass("d-none");

            return false;
        } else {

            $("#alertAddConsultationError.addconsultation").removeClass("d-block");
            $("#alertAddConsultationError.addconsultation").addClass("d-none");

            if (c_date.length != '' && c_temp.length != '' &&
                c_rr.length != '' && c_hr.length != '' && c_bp.length != '' &&
                c_symp.length != '' && c_find.length != '' && c_med.length != '') {

                //ajax
                var formData = $('#AddConsultationForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/report/crudConsultation.php',
                    data: formData + '&action=AddConsultation',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddConsultationError.addconsultation").addClass("d-block");
                            $("#alertAddConsultationError.addconsultation").removeClass("d-none");

                            $("#errAll.addconsultation").removeClass("d-none");
                            $("#errAll.addconsultation").addClass("d-block");
                            $("#errAll.addconsultation").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertAddConsultationSuccess.addconsultation").removeClass("d-none");
                            $("#alertAddConsultationSuccess.addconsultation").addClass("d-block");

                            $("#succMsg.addconsultation").removeClass("d-none");
                            $("#succMsg.addconsultation").addClass("d-block");
                            $("#succMsg.addconsultation").html(feedback.message);
                            $("#AddConsultationForm")[0].reset();

                            setTimeout(function () {
                                let alertUl = $("#alertAddConsultationSuccess.addconsultation");
                                let alertLi = $("#succMsg.addconsultation");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddConsultationOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonAddConsultationTwo").click(function () {
                                location.reload()
                            });

                            $('#addConsultationModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    // EDIT CONSULTATION
    $(document).on('click', '#EditConsultation', function (e) {
        e.preventDefault();

        const c_date = $('#consultation_date.editconsultation').val();
        const c_temp = $('#consultation_temperature.editconsultation').val();
        const c_rr = $('#consultation_rr.editconsultation').val();
        const c_hr = $('#consultation_hr.editconsultation').val();
        const c_bp = $('#consultation_bp.editconsultation').val();
        const c_symp = $('#consultation_symptoms.editconsultation').val();
        const c_find = $('#consultation_findings.editconsultation').val();
        const c_med = $('#consultation_medications.editconsultation').val();

        var errAll = '';
        var errDate = '';
        var errTemp = '';
        var errRR = '';
        var errHR = '';
        var errBP = '';
        var errSymp = '';
        var errFind = '';
        var errMed = '';

        if (c_date.length == '' && c_temp.length == '' && c_rr.length == '' &&
            c_hr.length == '' && c_bp.length == '' &&
            c_symp.length == '' && c_find.length == '' && c_med.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.editconsultation").removeClass("d-none");
            $("#errAll.editconsultation").addClass("d-block");
            $("#errAll.editconsultation").html(errAll);

        } else {
            errAll = '';
            $("#errAll.editconsultation").addClass("d-none");
            $("#errAll.editconsultation").removeClass("d-block");
            $("#errAll.editconsultation").html(errAll);

            if (c_date.length == '') {
                errDate = '<li> Date is required! </li>';
                $("#errDate.editconsultation").removeClass("d-none");
                $("#errDate.editconsultation").addClass("d-block");
                $("#errDate.editconsultation").html(errDate);
            } else {
                errDate = '';
                $("#errDate.editconsultation").addClass("d-none");
                $("#errDate.editconsultation").removeClass("d-block");
                $("#errDate.editconsultation").html(errDate);
            }

            if (c_temp.length == '') {
                errTemp = '<li> Temperature is required! </li>';
                $("#errTemp.editconsultation").removeClass("d-none");
                $("#errTemp.editconsultation").addClass("d-block");
                $("#errTemp.editconsultation").html(errTemp);
            } else {
                errTemp = '';
                $("#errTemp.editconsultation").addClass("d-none");
                $("#errTemp.editconsultation").removeClass("d-block");
                $("#errTemp.editconsultation").html(errTemp);
            }

            if (c_rr.length == '') {
                errRR = '<li> Respiratory rate is required! </li>';
                $("#errRR.editconsultation").removeClass("d-none");
                $("#errRR.editconsultation").addClass("d-block");
                $("#errRR.editconsultation").html(errRR);
            } else {
                errRR = '';
                $("#errRR.editconsultation").addClass("d-none");
                $("#errRR.editconsultation").removeClass("d-block");
                $("#errRR.editconsultation").html(errRR);

            }

            if (c_hr.length == '') {
                errHR = '<li> Heart Rate is required! </li>';
                $("#errHR.editconsultation").removeClass("d-none");
                $("#errHR.editconsultation").addClass("d-block");
                $("#errHR.editconsultation").html(errHR);
            } else {
                errHR = '';
                $("#errHR.editconsultation").addClass("d-none");
                $("#errHR.editconsultation").removeClass("d-block");
                $("#errHR.editconsultation").html(errHR);
            }


            if (c_bp.length == '') {
                errBP = '<li> Blood pressure is required! </li>';
                $("#errBP.editconsultation").removeClass("d-none");
                $("#errBP.editconsultation").addClass("d-block");
                $("#errBP.editconsultation").html(errBP);
            } else {
                errBP = '';
                $("#errBP.editconsultation").addClass("d-none");
                $("#errBP.editconsultation").removeClass("d-block");
                $("#errBP.editconsultation").html(errBP);
            }

            if (c_symp.length == '') {
                errSymp = '<li> Symptoms is required! </li>';
                $("#errSymp.editconsultation").removeClass("d-none");
                $("#errSymp.editconsultation").addClass("d-block");
                $("#errSymp.editconsultation").html(errSymp);
            } else {
                errSymp = '';
                $("#errSymp.editconsultation").addClass("d-none");
                $("#errSymp.editconsultation").removeClass("d-block");
                $("#errSymp.editconsultation").html(errSymp);
            }

            if (c_find.length == '') {
                errFind = '<li>Findings is required! </li>';
                $("#errFind.editconsultation").removeClass("d-none");
                $("#errFind.editconsultation").addClass("d-block");
                $("#errFind.editconsultation").html(errFind);
            } else {
                errFind = '';
                $("#errFind.editconsultation").addClass("d-none");
                $("#errFind.editconsultation").removeClass("d-block");
                $("#errFind.editconsultation").html(errFind);
            }

            if (c_med.length == '') {
                errMed = '<li>Medication is required! </li>';
                $("#errMed.editconsultation").removeClass("d-none");
                $("#errMed.editconsultation").addClass("d-block");
                $("#errMed.editconsultation").html(errMed);
            } else {
                errMed = '';
                $("#errMed.editconsultation").addClass("d-none");
                $("#errMed.editconsultation").removeClass("d-block");
                $("#errMed.editconsultation").html(errMed);
            }
        }

        if (errAll != '' || errDate != '' || errTemp != '' || errRR != '' ||
            errHR != '' || errBP != '' || errSymp != '' || errFind != '' || errMed != '') {

            $("#alertEditConsultationError.editconsultation").addClass("d-block");
            $("#alertEditConsultationError.editconsultation").removeClass("d-none");

            return false;
        } else {

            $("#alertEditConsultationError.editconsultation").removeClass("d-block");
            $("#alertEditConsultationError.editconsultation").addClass("d-none");

            if (c_date.length != '' && c_temp.length != '' &&
                c_rr.length != '' && c_hr.length != '' && c_bp.length != '' &&
                c_symp.length != '' && c_find.length != '' && c_med.length != '') {

                //ajax
                var formData = $('#EditConsultationForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/report/crudConsultation.php',
                    data: formData + '&action=EditConsultation',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertEditConsultationError.editconsultation").addClass(
                                "d-block");
                            $("#alertEditConsultationError.editconsultation").removeClass(
                                "d-none");

                            $("#errAll.editconsultation").removeClass("d-none");
                            $("#errAll.editconsultation").addClass("d-block");
                            $("#errAll.editconsultation").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertEditConsultationSuccess.editconsultation").removeClass(
                                "d-none");
                            $("#alertEditConsultationSuccess.editconsultation").addClass(
                                "d-block");

                            $("#succMsg.editconsultation").removeClass("d-none");
                            $("#succMsg.editconsultation").addClass("d-block");
                            $("#succMsg.editconsultation").html(feedback.message);

                            setTimeout(function () {
                                let alertUl = $(
                                    "#alertEditConsultationSuccess.editconsultation"
                                );
                                let alertLi = $("#succMsg.editconsultation");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonEditConsultationOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonEditConsultationTwo").click(function () {
                                location.reload()
                            });

                            $('#editConsultationModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        }
    });

    //DELETE CONSULTATION
    $(document).on('click', '#DeleteConsultation', function (e) {
        e.preventDefault();

        $.ajax({
            method: 'post',
            url: '/bhcm.com/app/controllers/report/crudConsultation.php',
            data: 'consultation_id=' + $('#consultation_id').val() +
                '&action=DeleteConsultation',
            dataType: 'JSON',
            success: function (feedback) {
                if (feedback.status === "error") {
                    $("#alertDeleteConsultationError.deleteconsultation").addClass(
                        "d-block");
                    $("#alertDeleteConsultationError.deleteconsultation").removeClass(
                        "d-none");

                    $("#errAll.deleteconsultation").removeClass("d-none");
                    $("#errAll.deleteconsultation").addClass("d-block");
                    $("#errAll.deleteconsultation").html(feedback.errAll);
                } else if (feedback.status === "success") {
                    $("#warningConsultationSuccess.deleteconsultation").removeClass('d-block');
                    $("#warningConsultationSuccess.deleteconsultation").addClass('d-none');

                    $("#alertConsultationSuccess.deleteconsultation").removeClass('d-none');
                    $("#alertConsultationSuccess.deleteconsultation").addClass('d-block');

                    $("#succMsg.deleteconsultation").html(feedback.message);

                    $("#consultationModalFooterOne").removeClass('d-block');
                    $("#consultationModalFooterOne").addClass('d-none');

                    $("#consultationModalFooterTwo").removeClass('d-none');
                    $("#consultationModalFooterTwo").addClass('d-block');

                    $("#ModalCloseButtonDeleteConsultationOne").click(function () {
                        location.reload()
                    });

                    $("#ModalCloseButtonDeleteConsultationTwo").click(function () {
                        location.reload()
                    });

                    $('#deleteConsultationModal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                }
            }
        });
    });
});