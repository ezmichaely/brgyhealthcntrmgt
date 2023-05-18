$(document).ready(function () {
    // ADD PATIENT
    $("#AddPatient").click(function (e) {
        e.preventDefault();
        const patient_firstname = $('#patient_firstname.addpatient').val();
        const patient_lastname = $('#patient_lastname.addpatient').val();
        const patient_age = $('#patient_age.addpatient').val();
        const patient_dob = $('#patient_dob.addpatient').val();
        const patient_weight = $('#patient_weight.addpatient').val();
        const patient_height = $('#patient_height.addpatient').val();
        const patient_address = $('#patient_address.addpatient').val();
        const patient_pob = $('#patient_pob.addpatient').val();
        const patient_nationality = $('#patient_nationality.addpatient').val();
        const patient_guardianspouse = $('#patient_guardianspouse.addpatient').val();
        const patient_guardianspouseno = $('#patient_guardianspouseno.addpatient').val();

        var errAll = '';
        var errFirstname = '';
        var errLastname = '';
        var errAge = '';
        var errDob = '';
        var errWeight = '';
        var errHeight = '';
        var errAddress = '';
        var errPob = '';
        var errNationality = '';
        var errGuardianspouse = '';
        var errGuardianspouseno = '';

        if (patient_firstname.length == '' && patient_lastname.length == '' &&
            patient_age.length == '' && patient_dob.length == '' &&
            patient_weight.length == '' && patient_height.length == '' &&
            patient_address.length == '' && patient_pob.length == '' &&
            patient_nationality.length == '' && patient_guardianspouse.length == '' &&
            patient_guardianspouseno.length == '') {

            errAll = '<li> All fields are empty! </li>';
            $("#errAll.addpatient").removeClass("d-none");
            $("#errAll.addpatient").addClass("d-block");
            $("#errAll.addpatient").html(errAll);
            // console.log('naay error');
        } else {
            errAll = '';
            $("#errAll.addpatient").addClass("d-none");
            $("#errAll.addpatient").removeClass("d-block");
            $("#errAll.addpatient").html(errAll);

            if (patient_firstname.length == '') {
                errFirstname = '<li> Firstname is required! </li>';
                $("#errFirstname.addpatient").removeClass("d-none");
                $("#errFirstname.addpatient").addClass("d-block");
                $("#errFirstname.addpatient").html(errFirstname);
            } else {
                errFirstname = '';
                $("#errFirstname.addpatient").addClass("d-none");
                $("#errFirstname.addpatient").removeClass("d-block");
                $("#errFirstname.addpatient").html(errFirstname);
            }

            if (patient_lastname.length == '') {
                errLastname = '<li> Lastname is required! </li>';
                $("#errLastname.addpatient").removeClass("d-none");
                $("#errLastname.addpatient").addClass("d-block");
                $("#errLastname.addpatient").html(errLastname);
            } else {
                errLastname = '';
                $("#errLastname.addpatient").addClass("d-none");
                $("#errLastname.addpatient").removeClass("d-block");
                $("#errLastname.addpatient").html(errLastname);
            }

            if (patient_age.length == '') {
                errAge = '<li> Age is required! </li>';
                $("#errAge.addpatient").removeClass("d-none");
                $("#errAge.addpatient").addClass("d-block");
                $("#errAge.addpatient").html(errAge);
            } else {
                errAge = '';
                $("#errAge.addpatient").addClass("d-none");
                $("#errAge.addpatient").removeClass("d-block");
                $("#errAge.addpatient").html(errAge);
            }

            if (patient_dob.length == '') {
                errDob = '<li> Birthdate is required! </li>';
                $("#errDob.addpatient").removeClass("d-none");
                $("#errDob.addpatient").addClass("d-block");
                $("#errDob.addpatient").html(errDob);
            } else {
                errDob = '';
                $("#errDob.addpatient").addClass("d-none");
                $("#errDob.addpatient").removeClass("d-block");
                $("#errDob.addpatient").html(errDob);
            }


            if (patient_weight.length == '') {
                errWeight = '<li> Weight is required! </li>';
                $("#errWeight.addpatient").removeClass("d-none");
                $("#errWeight.addpatient").addClass("d-block");
                $("#errWeight.addpatient").html(errWeight);
            } else {
                errWeight = '';
                $("#errWeight.addpatient").addClass("d-none");
                $("#errWeight.addpatient").removeClass("d-block");
                $("#errWeight.addpatient").html(errWeight);
            }

            if (patient_height.length == '') {
                errHeight = '<li> Height is required! </li>';
                $("#errHeight.addpatient").removeClass("d-none");
                $("#errHeight.addpatient").addClass("d-block");
                $("#errHeight.addpatient").html(errHeight);
            } else {
                errHeight = '';
                $("#errHeight.addpatient").addClass("d-none");
                $("#errHeight.addpatient").removeClass("d-block");
                $("#errHeight.addpatient").html(errHeight);
            }

            if (patient_address.length == '') {
                errAddress = '<li> Address is required! </li>';
                $("#errAddress.addpatient").removeClass("d-none");
                $("#errAddress.addpatient").addClass("d-block");
                $("#errAddress.addpatient").html(errAddress);
            } else {
                errAddress = '';
                $("#errAddress.addpatient").addClass("d-none");
                $("#errAddress.addpatient").removeClass("d-block");
                $("#errAddress.addpatient").html(errAddress);
            }

            if (patient_pob.length == '') {
                errPob = '<li> Place of birth is required! </li>';
                $("#errPob.addpatient").removeClass("d-none");
                $("#errPob.addpatient").addClass("d-block");
                $("#errPob.addpatient").html(errPob);
            } else {
                errPob = '';
                $("#errPob.addpatient").addClass("d-none");
                $("#errPob.addpatient").removeClass("d-block");
                $("#errPob.addpatient").html(errPob);
            }

            if (patient_nationality.length == '') {
                errNationality = '<li> Nationality is required! </li>';
                $("#errNationality.addpatient").removeClass("d-none");
                $("#errNationality.addpatient").addClass("d-block");
                $("#errNationality.addpatient").html(errNationality);
            } else {
                errNationality = '';
                $("#errNationality.addpatient").addClass("d-none");
                $("#errNationality.addpatient").removeClass("d-block");
                $("#errNationality.addpatient").html(errNationality);
            }

            if (patient_guardianspouse.length == '') {
                errGuardianspouse = '<li>Guardian is required! </li>';
                $("#errGuardianspouse.addpatient").removeClass("d-none");
                $("#errGuardianspouse.addpatient").addClass("d-block");
                $("#errGuardianspouse.addpatient").html(errGuardianspouse);
            } else {
                if (patient_guardianspouse.length < 5) {
                    errGuardianspouse = "<li> Guardian's name must not less than 5 characters! </li>";
                    $("#errGuardianspouse.addpatient").removeClass("d-none");
                    $("#errGuardianspouse.addpatient").addClass("d-block");
                    $("#errGuardianspouse.addpatient").html(errGuardianspouse);
                } else {
                    errGuardianspouse = '';
                    $("#errGuardianspouse.addpatient").addClass("d-none");
                    $("#errGuardianspouse.addpatient").removeClass("d-block");
                    $("#errGuardianspouse.addpatient").html(errGuardianspouse);
                }
            }

            if (patient_guardianspouseno.length == '') {
                errGuardianspouseno = '<li> Contact number of Guardian is required! </li>';
                $("#errGuardianspouseno.addpatient").removeClass("d-none");
                $("#errGuardianspouseno.addpatient").addClass("d-block");
                $("#errGuardianspouseno.addpatient").html(errGuardianspouseno);
            } else {
                errGuardianspouseno = '';
                $("#errGuardianspouseno.addpatient").addClass("d-none");
                $("#errGuardianspouseno.addpatient").removeClass("d-block");
                $("#errGuardianspouseno.addpatient").html(errGuardianspouseno);
            }
        }

        if (errAll != '' || errFirstname != '' || errLastname != '' ||
            errAge != '' || errDob != '' || errWeight != '' ||
            errHeight != '' || errAddress != '' || errPob != '' ||
            errNationality != '' ||
            errGuardianspouse != '' || errGuardianspouseno != '') {

            $("#alertAddPatientError.addpatient").addClass("d-block");
            $("#alertAddPatientError.addpatient").removeClass("d-none");

            return false;

        } else {
            $("#alertAddPatientError.addpatient").removeClass("d-block");
            $("#alertAddPatientError.addpatient").addClass("d-none");

            if (patient_firstname.length != '' && patient_lastname.length != '' &&
                patient_age.length != '' && patient_dob.length != '' &&
                patient_weight.length != '' && patient_height.length != '' &&
                patient_address.length != '' && patient_pob.length != '' && patient_nationality.length != '' &&
                patient_guardianspouse.length != '' && patient_guardianspouseno.length != '') {

                //ajax
                var formData = $('#AddPatientForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/patients/crudPatient.php',
                    data: formData + '&action=AddPatient',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddPatientError.addpatient").addClass("d-block");
                            $("#alertAddPatientError.addpatient").removeClass("d-none");

                            $("#errAll.addpatient").removeClass("d-none");
                            $("#errAll.addpatient").addClass("d-block");
                            $("#errAll.addpatient").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#AddPatientForm")[0].reset();
                            $("#alertAddPatientSuccess.addpatient").removeClass("d-none");
                            $("#alertAddPatientSuccess.addpatient").addClass("d-block");

                            $("#succMsg.addpatient").removeClass("d-none");
                            $("#succMsg.addpatient").addClass("d-block");
                            $("#succMsg.addpatient").html(feedback.message);

                            setTimeout(function () {
                                let alertUl = $(
                                    "#alertAddPatientSuccess.addpatient");
                                let alertLi = $("#succMsg.addpatient");
                                alertUl.removeClass('d-block');
                                alertUl.addClass('d-none');

                                alertLi.removeClass('d-block');
                                alertLi.addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddPatientOne").click(function () {
                                location.reload()
                            });

                            $("#ModalCloseButtonAddPatientTwo").click(function () {
                                location.reload()
                            });

                            $('#addPatientModal').on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                    }

                });
            }
        }
    });





    $(document).on('click', '#EditPatient', function (e) {
        e.preventDefault();
        $("#EditPatient").click(function (e) {
            e.preventDefault();
            const patient_firstname = $('#patient_firstname.editpatient').val();
            const patient_lastname = $('#patient_lastname.editpatient').val();
            const patient_age = $('#patient_age.editpatient').val();
            const patient_dob = $('#patient_dob.editpatient').val();
            const patient_weight = $('#patient_weight.editpatient').val();
            const patient_height = $('#patient_height.editpatient').val();
            const patient_address = $('#patient_address.editpatient').val();
            const patient_pob = $('#patient_pob.editpatient').val();
            const patient_nationality = $('#patient_nationality.editpatient').val();
            const patient_guardianspouse = $('#patient_guardianspouse.editpatient').val();
            const patient_guardianspouseno = $('#patient_guardianspouseno.editpatient').val();

            var errAll = '';
            var errFirstname = '';
            var errLastname = '';
            var errAge = '';
            var errDob = '';
            var errWeight = '';
            var errHeight = '';
            var errAddress = '';
            var errPob = '';
            var errNationality = '';
            var errGuardianspouse = '';
            var errGuardianspouseno = '';

            if (patient_firstname.length == '' && patient_lastname.length == '' &&
                patient_age.length == '' && patient_dob.length == '' &&
                patient_weight.length == '' && patient_height.length == '' &&
                patient_address.length == '' && patient_pob.length == '' &&
                patient_nationality.length == '' && patient_guardianspouse.length == '' &&
                patient_guardianspouseno.length == '') {

                errAll = '<li> All fields are empty! </li>';
                $("#errAll.editpatient").removeClass("d-none");
                $("#errAll.editpatient").addClass("d-block");
                $("#errAll.editpatient").html(errAll);
                // console.log('naay error');
            } else {
                errAll = '';
                $("#errAll.editpatient").addClass("d-none");
                $("#errAll.editpatient").removeClass("d-block");
                $("#errAll.editpatient").html(errAll);

                if (patient_firstname.length == '') {
                    errFirstname = '<li> Firstname is required! </li>';
                    $("#errFirstname.editpatient").removeClass("d-none");
                    $("#errFirstname.editpatient").addClass("d-block");
                    $("#errFirstname.editpatient").html(errFirstname);
                } else {
                    errFirstname = '';
                    $("#errFirstname.editpatient").addClass("d-none");
                    $("#errFirstname.editpatient").removeClass("d-block");
                    $("#errFirstname.editpatient").html(errFirstname);
                }

                if (patient_lastname.length == '') {
                    errLastname = '<li> Lastname is required! </li>';
                    $("#errLastname.editpatient").removeClass("d-none");
                    $("#errLastname.editpatient").addClass("d-block");
                    $("#errLastname.editpatient").html(errLastname);
                } else {
                    errLastname = '';
                    $("#errLastname.editpatient").addClass("d-none");
                    $("#errLastname.editpatient").removeClass("d-block");
                    $("#errLastname.editpatient").html(errLastname);
                }

                if (patient_age.length == '') {
                    errAge = '<li> Age is required! </li>';
                    $("#errAge.editpatient").removeClass("d-none");
                    $("#errAge.editpatient").addClass("d-block");
                    $("#errAge.editpatient").html(errAge);
                } else {
                    errAge = '';
                    $("#errAge.editpatient").addClass("d-none");
                    $("#errAge.editpatient").removeClass("d-block");
                    $("#errAge.editpatient").html(errAge);
                }

                if (patient_dob.length == '') {
                    errDob = '<li> Birthdate is required! </li>';
                    $("#errDob.editpatient").removeClass("d-none");
                    $("#errDob.editpatient").addClass("d-block");
                    $("#errDob.editpatient").html(errDob);
                } else {
                    errDob = '';
                    $("#errDob.editpatient").addClass("d-none");
                    $("#errDob.editpatient").removeClass("d-block");
                    $("#errDob.editpatient").html(errDob);
                }


                if (patient_weight.length == '') {
                    errWeight = '<li> Weight is required! </li>';
                    $("#errWeight.editpatient").removeClass("d-none");
                    $("#errWeight.editpatient").addClass("d-block");
                    $("#errWeight.editpatient").html(errWeight);
                } else {
                    errWeight = '';
                    $("#errWeight.editpatient").addClass("d-none");
                    $("#errWeight.editpatient").removeClass("d-block");
                    $("#errWeight.editpatient").html(errWeight);
                }

                if (patient_height.length == '') {
                    errHeight = '<li> Height is required! </li>';
                    $("#errHeight.editpatient").removeClass("d-none");
                    $("#errHeight.editpatient").addClass("d-block");
                    $("#errHeight.editpatient").html(errHeight);
                } else {
                    errHeight = '';
                    $("#errHeight.editpatient").addClass("d-none");
                    $("#errHeight.editpatient").removeClass("d-block");
                    $("#errHeight.editpatient").html(errHeight);
                }

                if (patient_address.length == '') {
                    errAddress = '<li> Address is required! </li>';
                    $("#errAddress.editpatient").removeClass("d-none");
                    $("#errAddress.editpatient").addClass("d-block");
                    $("#errAddress.editpatient").html(errAddress);
                } else {
                    errAddress = '';
                    $("#errAddress.editpatient").addClass("d-none");
                    $("#errAddress.editpatient").removeClass("d-block");
                    $("#errAddress.editpatient").html(errAddress);
                }

                if (patient_pob.length == '') {
                    errPob = '<li> Place of birth is required! </li>';
                    $("#errPob.editpatient").removeClass("d-none");
                    $("#errPob.editpatient").addClass("d-block");
                    $("#errPob.editpatient").html(errPob);
                } else {
                    errPob = '';
                    $("#errPob.editpatient").addClass("d-none");
                    $("#errPob.editpatient").removeClass("d-block");
                    $("#errPob.editpatient").html(errPob);
                }

                if (patient_nationality.length == '') {
                    errNationality = '<li> Nationality is required! </li>';
                    $("#errNationality.editpatient").removeClass("d-none");
                    $("#errNationality.editpatient").addClass("d-block");
                    $("#errNationality.editpatient").html(errNationality);
                } else {
                    errNationality = '';
                    $("#errNationality.editpatient").addClass("d-none");
                    $("#errNationality.editpatient").removeClass("d-block");
                    $("#errNationality.editpatient").html(errNationality);
                }

                if (patient_guardianspouse.length == '') {
                    errGuardianspouse = '<li>Guardian is required! </li>';
                    $("#errGuardianspouse.editpatient").removeClass("d-none");
                    $("#errGuardianspouse.editpatient").addClass("d-block");
                    $("#errGuardianspouse.editpatient").html(errGuardianspouse);
                } else {
                    if (patient_guardianspouse.length < 5) {
                        errGuardianspouse = "<li> Guardian's name must not less than 5 characters! </li>";
                        $("#errGuardianspouse.editpatient").removeClass("d-none");
                        $("#errGuardianspouse.editpatient").addClass("d-block");
                        $("#errGuardianspouse.editpatient").html(errGuardianspouse);
                    } else {
                        errGuardianspouse = '';
                        $("#errGuardianspouse.editpatient").addClass("d-none");
                        $("#errGuardianspouse.editpatient").removeClass("d-block");
                        $("#errGuardianspouse.editpatient").html(errGuardianspouse);
                    }
                }

                if (patient_guardianspouseno.length == '') {
                    errGuardianspouseno = '<li> Contact number of Guardian is required! </li>';
                    $("#errGuardianspouseno.editpatient").removeClass("d-none");
                    $("#errGuardianspouseno.editpatient").addClass("d-block");
                    $("#errGuardianspouseno.editpatient").html(errGuardianspouseno);
                } else {
                    errGuardianspouseno = '';
                    $("#errGuardianspouseno.editpatient").addClass("d-none");
                    $("#errGuardianspouseno.editpatient").removeClass("d-block");
                    $("#errGuardianspouseno.editpatient").html(errGuardianspouseno);
                }
            }

            if (errAll != '' || errFirstname != '' || errLastname != '' ||
                errAge != '' || errDob != '' || errWeight != '' ||
                errHeight != '' || errAddress != '' || errPob != '' ||
                errNationality != '' ||
                errGuardianspouse != '' || errGuardianspouseno != '') {

                $("#alertEditPatientError.editpatient").addClass("d-block");
                $("#alertEditPatientError.editpatient").removeClass("d-none");

                return false;

            } else {
                $("#alertEditPatientError.editpatient").removeClass("d-block");
                $("#alertEditPatientError.editpatient").addClass("d-none");

                if (patient_firstname.length != '' && patient_lastname.length != '' &&
                    patient_age.length != '' && patient_dob.length != '' &&
                    patient_weight.length != '' && patient_height.length != '' &&
                    patient_address.length != '' && patient_pob.length != '' && patient_nationality.length != '' &&
                    patient_guardianspouse.length != '' && patient_guardianspouseno.length != '') {

                    //ajax
                    var formData = $('#EditPatientForm').serialize();
                    // console.log(formData);
                    $.ajax({
                        method: 'post',
                        url: '/bhcm.com/app/controllers/patients/crudPatient.php',
                        data: formData + '&action=EditPatient',
                        dataType: 'JSON',
                        success: function (feedback) {
                            if (feedback.status === "error") {
                                $("#alertEditPatientError.editpatient").addClass("d-block");
                                $("#alertEditPatientError.editpatient").removeClass("d-none");

                                $("#errAll.editpatient").removeClass("d-none");
                                $("#errAll.editpatient").addClass("d-block");
                                $("#errAll.editpatient").html(feedback.errAll);
                            } else if (feedback.status === "success") {
                                $("#AddPatientForm")[0].reset();
                                $("#alertEditPatientSuccess.editpatient").removeClass("d-none");
                                $("#alertEditPatientSuccess.editpatient").addClass("d-block");

                                $("#succMsg.editpatient").removeClass("d-none");
                                $("#succMsg.editpatient").addClass("d-block");
                                $("#succMsg.editpatient").html(feedback.message);

                                setTimeout(function () {
                                    let alertUl = $(
                                        "#alertEditPatientSuccess.editpatient");
                                    let alertLi = $("#succMsg.editpatient");
                                    alertUl.removeClass('d-block');
                                    alertUl.addClass('d-none');

                                    alertLi.removeClass('d-block');
                                    alertLi.addClass('d-none');
                                }, 5000);

                                $("#ModalCloseButtonEditPatientOne").click(function () {
                                    location.reload()
                                });

                                $("#ModalCloseButtonEditPatientTwo").click(function () {
                                    location.reload()
                                });

                                $('#editPatientModal').on('hidden.bs.modal', function () {
                                    location.reload();
                                });
                            }
                        }

                    });
                }
            }
        });

    });



});