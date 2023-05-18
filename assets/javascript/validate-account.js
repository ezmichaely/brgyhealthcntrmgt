$(document).ready(function () {
    // REGISTER
    $("#Register").click(function (e) {
        e.preventDefault();
        // console.log('ez');
        const account_type = $('#account_type.register').val();
        const account_firstname = $('#account_firstname.register').val();
        const account_lastname = $('#account_lastname.register').val();
        const account_username = $('#account_username.register').val();
        const account_password = $('#account_password.register').val();
        const account_confirmpassword = $('#account_confirmpassword.register').val();
        const question_id = $('#question_id.register').val();
        const account_answer = $('#account_answer.register').val();

        var errAll = '';
        var errType = '';
        var errFirstname = '';
        var errLastname = '';
        var errUsername = '';
        var errPassword = '';
        var errConfirmPassword = '';
        var errQuestion = '';
        var errAnswer = '';

        if (account_type.length == '' && account_firstname.length == '' && account_lastname.length == '' && account_username.length == '' &&
            account_password.length == '' && account_confirmpassword.length == '' && question_id.length == '' && account_answer.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.register").removeClass("d-none");
            $("#errAll.register").addClass("d-block");
            $("#errAll.register").html(errAll);
        } else {
            errAll = '';
            $("#errAll.register").addClass("d-none");
            $("#errAll.register").removeClass("d-block");
            $("#errAll.register").html(errAll);

            if (account_type.length == '') {
                errType = '<li> Please Select an account type! </li>';
                $("#errType.register").removeClass("d-none");
                $("#errType.register").addClass("d-block");
                $("#errType.register").html(errType);
            } else {
                errType = '';
                $("#errType.register").addClass("d-none");
                $("#errType.register").removeClass("d-block");
                $("#errType.register").html(errType);
            }

            if (account_firstname.length == '') {
                errFirstname = '<li> Firstname is required! </li>';
                $("#errFirstname.register").removeClass("d-none");
                $("#errFirstname.register").addClass("d-block");
                $("#errFirstname.register").html(errFirstname);
            } else {
                errFirstname = '';
                $("#errFirstname.register").addClass("d-none");
                $("#errFirstname.register").removeClass("d-block");
                $("#errFirstname.register").html(errFirstname);
            }

            if (account_lastname.length == '') {
                errLastname = '<li> Lastname is required! </li>';
                $("#errLastname.register").removeClass("d-none");
                $("#errLastname.register").addClass("d-block");
                $("#errLastname.register").html(errLastname);
            } else {
                errLastname = '';
                $("#errLastname.register").addClass("d-none");
                $("#errLastname.register").removeClass("d-block");
                $("#errLastname.register").html(errLastname);
            }

            if (account_username.length == '') {
                errUsername = '<li> Username is required! </li>';
                $("#errUsername.register").removeClass("d-none");
                $("#errUsername.register").addClass("d-block");
                $("#errUsername.register").html(errUsername);
            } else {
                if (account_username.length < 6) {
                    errUsername = '<li>Username must not be less than 6 characters! </li>';
                    $("#errUsername.register").removeClass("d-none");
                    $("#errUsername.register").addClass("d-block");
                    $("#errUsername.register").html(errUsername);
                } else {
                    errUsername = '';
                    $("#errUsername.register").addClass("d-none");
                    $("#errUsername.register").removeClass("d-block");
                    $("#errUsername.register").html(errUsername);
                }
            }

            if (account_password.length == '') {
                errPassword = '<li>Password is required! </li>';
                $("#errPassword.register").removeClass("d-none");
                $("#errPassword.register").addClass("d-block");
                $("#errPassword.register").html(errPassword);
            } else {
                if (account_password.length < 6) {
                    errPassword = '<li>Password must not be less than 6 characters! </li>';
                    $("#errPassword.register").removeClass("d-none");
                    $("#errPassword.register").addClass("d-block");
                    $("#errPassword.register").html(errPassword);
                } else {
                    errPassword = '';
                    $("#errPassword.register").addClass("d-none");
                    $("#errPassword.register").removeClass("d-block");
                    $("#errPassword.register").html(errPassword);
                }
            }

            if (account_confirmpassword != account_password) {
                errConfirmPassword = '<li>Confirm password must be the same with password! </li>';
                $("#errConfirmpassword.register").removeClass("d-none");
                $("#errConfirmpassword.register").addClass("d-block");
                $("#errConfirmpassword.register").html(errConfirmPassword);
            } else {
                errConfirmPassword = '';
                $("#errConfirmpassword.register").addClass("d-none");
                $("#errConfirmpassword.register").removeClass("d-block");
                $("#errConfirmpassword.register").html(errConfirmPassword);
            }

            if (question_id.length == '') {
                errQuestion = '<li>Please select your password security question! </li>';
                $("#errQuestion.register").removeClass("d-none");
                $("#errQuestion.register").addClass("d-block");
                $("#errQuestion.register").html(errQuestion);
            } else {
                errQuestion = '';
                $("#errQuestion.register").addClass("d-none");
                $("#errQuestion.register").removeClass("d-block");
                $("#errQuestion.register").html(errQuestion);
            }

            if (account_answer.length == '') {
                errAnswer = '<li>Please answer the question! </li>';
                $("#errAnswer.register").removeClass("d-none");
                $("#errAnswer.register").addClass("d-block");
                $("#errAnswer.register").html(errAnswer);
            } else {
                errAnswer = '';
                $("#errAnswer.register").addClass("d-none");
                $("#errAnswer.register").removeClass("d-block");
                $("#errAnswer.register").html(errAnswer);
            }
        }

        if (errAll != '' || errType != '' || errFirstname != '' || errLastname != '' || errUsername != '' || errPassword != '' ||
            errConfirmPassword != '' || errQuestion != '' || errAnswer != '') {

            $("#alertRegisterError.register").addClass("d-block");
            $("#alertRegisterError.register").removeClass("d-none");

            return false;
        } else {

            $("#alertRegisterError.register").removeClass("d-block");
            $("#alertRegisterError.register").addClass("d-none");

            if (account_type.length != '' && account_firstname.length != '' && account_lastname.length != '' &&
                account_username.length != '' && account_password.length != '' &&
                account_confirmpassword.length != '' && question_id.length != '' &&
                account_answer.length != '') {
                //ajax

                var formData = $('#RegisterForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/accounts/authentication.php',
                    data: formData + '&action=Register',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertRegisterError.register").addClass("d-block");
                            $("#alertRegisterError.register").removeClass("d-none");

                            $("#errAll.register").removeClass("d-none");
                            $("#errAll.register").addClass("d-block");
                            $("#errAll.register").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#RegisterForm")[0].reset();
                            location.href = "index.php";
                        }
                    }
                });
            }
        }
    });

    // LOG IN
    $("#Login").click(function (e) {
        e.preventDefault();
        console.log('ez');
        const account_username = $('#account_username.login').val();
        const account_password = $('#account_password.login').val();

        var errAll = '';
        var errUsername = '';
        var errPassword = '';

        if (account_username.length == '' && account_password.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.login").removeClass("d-none");
            $("#errAll.login").addClass("d-block");
            $("#errAll.login").html(errAll);
        } else {
            errAll = '';
            $("#errAll.login").addClass("d-none");
            $("#errAll.login").removeClass("d-block");
            $("#errAll.login").html(errAll);

            if (account_username.length == '') {
                errUsername = '<li> Username is required! </li>';
                $("#errUsername.login").removeClass("d-none");
                $("#errUsername.login").addClass("d-block");
                $("#errUsername.login").html(errUsername);
            } else {
                if (account_username.length < 6) {
                    errUsername = '<li>Username must not be less than 6 characters! </li>';
                    $("#errUsername.login").removeClass("d-none");
                    $("#errUsername.login").addClass("d-block");
                    $("#errUsername.login").html(errUsername);
                } else {
                    errUsername = '';
                    $("#errUsername.login").addClass("d-none");
                    $("#errUsername.login").removeClass("d-block");
                    $("#errUsername.login").html(errUsername);
                }
            }

            if (account_password.length == '') {
                errPassword = '<li>Password is required! </li>';
                $("#errPassword.login").removeClass("d-none");
                $("#errPassword.login").addClass("d-block");
                $("#errPassword.login").html(errPassword);
            } else {
                if (account_password.length < 6) {
                    errPassword = '<li>Password must not be less than 6 characters! </li>';
                    $("#errPassword.login").removeClass("d-none");
                    $("#errPassword.login").addClass("d-block");
                    $("#errPassword.login").html(errPassword);
                } else {
                    errPassword = '';
                    $("#errPassword.login").addClass("d-none");
                    $("#errPassword.login").removeClass("d-block");
                    $("#errPassword.login").html(errPassword);
                }
            }
        }

        if (errAll != '' || errUsername != '' || errPassword != '') {
            $("#alertLoginError.login").addClass("d-block");
            $("#alertLoginError.login").removeClass("d-none");

            return false;
        } else {
            $("#alertLoginError.login").removeClass("d-block");
            $("#alertLoginError.login").addClass("d-none");

            if (account_username.length != '' && account_password.length != '') {
                var formData = $('#LoginForm').serialize();

                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/accounts/authentication.php',
                    data: formData + '&action=Login',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertLoginError.login").addClass("d-block");
                            $("#alertLoginError.login").removeClass("d-none");

                            $("#errAll.login").removeClass("d-none");
                            $("#errAll.login").addClass("d-block");
                            $("#errAll.login").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#LoginForm")[0].reset();

                            if (feedback.type === "admin") {
                                location.href = "admin/index.php?id=" + (feedback.id);
                            } else if (feedback.type === "staff") {
                                location.href = "staff/index.php?id=" + (feedback.id);
                            } else if (feedback.type === "nurse") {
                                location.href = "nurse/index.php?id=" + (feedback.id);
                            }
                        }
                    }
                });
            }
        }
    });

    // FORGOT PASSWORD 
    $("#ForgotPasswordBtn").click(function (e) {
        e.preventDefault();
        // console.log('ez');
        const account_type = $('#account_type.forgotpassword').val();
        const account_firstname = $('#account_firstname.forgotpassword').val();
        const account_lastname = $('#account_lastname.forgotpassword').val();
        const account_username = $('#account_username.forgotpassword').val();
        const question_id = $('#question_id.forgotpassword').val();
        const account_answer = $('#account_answer.forgotpassword').val();

        var errAll = '';
        var errType = '';
        var errFirstname = '';
        var errLastname = '';
        var errUsername = '';
        var errQuestion = '';
        var errAnswer = '';

        if (account_type.length == '' && account_firstname.length == '' && account_lastname.length == '' && account_username.length == '' &&
            question_id.length == '' && account_answer.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.forgotpassword").removeClass("d-none");
            $("#errAll.forgotpassword").addClass("d-block");
            $("#errAll.forgotpassword").html(errAll);
        } else {
            errAll = '';
            $("#errAll.forgotpassword").addClass("d-none");
            $("#errAll.forgotpassword").removeClass("d-block");
            $("#errAll.forgotpassword").html(errAll);

            if (account_type.length == '') {
                errType = '<li> Please Select an account type! </li>';
                $("#errType.forgotpassword").removeClass("d-none");
                $("#errType.forgotpassword").addClass("d-block");
                $("#errType.forgotpassword").html(errType);
            } else {
                errType = '';
                $("#errType.forgotpassword").addClass("d-none");
                $("#errType.forgotpassword").removeClass("d-block");
                $("#errType.forgotpassword").html(errType);
            }

            if (account_firstname.length == '') {
                errFirstname = '<li> Firstname is required! </li>';
                $("#errFirstname.forgotpassword").removeClass("d-none");
                $("#errFirstname.forgotpassword").addClass("d-block");
                $("#errFirstname.forgotpassword").html(errFirstname);
            } else {
                errFirstname = '';
                $("#errFirstname.forgotpassword").addClass("d-none");
                $("#errFirstname.forgotpassword").removeClass("d-block");
                $("#errFirstname.forgotpassword").html(errFirstname);
            }

            if (account_lastname.length == '') {
                errLastname = '<li> Lastname is required! </li>';
                $("#errLastname.forgotpassword").removeClass("d-none");
                $("#errLastname.forgotpassword").addClass("d-block");
                $("#errLastname.forgotpassword").html(errLastname);
            } else {
                errLastname = '';
                $("#errLastname.forgotpassword").addClass("d-none");
                $("#errLastname.forgotpassword").removeClass("d-block");
                $("#errLastname.forgotpassword").html(errLastname);
            }

            if (account_username.length == '') {
                errUsername = '<li> Username is required! </li>';
                $("#errUsername.forgotpassword").removeClass("d-none");
                $("#errUsername.forgotpassword").addClass("d-block");
                $("#errUsername.forgotpassword").html(errUsername);
            } else {
                if (account_username.length < 6) {
                    errUsername = '<li>Username must not be less than 6 characters! </li>';
                    $("#errUsername.forgotpassword").removeClass("d-none");
                    $("#errUsername.forgotpassword").addClass("d-block");
                    $("#errUsername.forgotpassword").html(errUsername);
                } else {
                    errUsername = '';
                    $("#errUsername.forgotpassword").addClass("d-none");
                    $("#errUsername.forgotpassword").removeClass("d-block");
                    $("#errUsername.forgotpassword").html(errUsername);
                }
            }

            if (question_id.length == '') {
                errQuestion = '<li>Please select your password security question! </li>';
                $("#errQuestion.forgotpassword").removeClass("d-none");
                $("#errQuestion.forgotpassword").addClass("d-block");
                $("#errQuestion.forgotpassword").html(errQuestion);
            } else {
                errQuestion = '';
                $("#errQuestion.forgotpassword").addClass("d-none");
                $("#errQuestion.forgotpassword").removeClass("d-block");
                $("#errQuestion.forgotpassword").html(errQuestion);
            }

            if (account_answer.length == '') {
                errAnswer = '<li>Please answer the question! </li>';
                $("#errAnswer.forgotpassword").removeClass("d-none");
                $("#errAnswer.forgotpassword").addClass("d-block");
                $("#errAnswer.forgotpassword").html(errAnswer);
            } else {
                errAnswer = '';
                $("#errAnswer.forgotpassword").addClass("d-none");
                $("#errAnswer.forgotpassword").removeClass("d-block");
                $("#errAnswer.forgotpassword").html(errAnswer);
            }
        }

        if (errAll != '' || errType != '' || errFirstname != '' || errLastname != '' || errUsername != '' || errQuestion != '' || errAnswer != '') {

            $("#alertForgotPasswordError.forgotpassword").addClass("d-block");
            $("#alertForgotPasswordError.forgotpassword").removeClass("d-none");

            return false;
        } else {

            $("#alertForgotPasswordError.forgotpassword").removeClass("d-block");
            $("#alertForgotPasswordError.forgotpassword").addClass("d-none");

            if (account_type.length != '' && account_firstname.length != '' && account_lastname.length != '' &&
                account_username.length != '' && question_id.length != '' &&
                account_answer.length != '') {
                //ajax

                var formData = $('#ForgotPasswordForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/accounts/authentication.php',
                    data: formData + '&action=ForgotPassword',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertForgotPasswordError.forgotpassword").removeClass("d-none");
                            $("#alertForgotPasswordError.forgotpassword").addClass("d-block");

                            $("#errAll.forgotpassword").removeClass("d-none");
                            $("#errAll.forgotpassword").addClass("d-block");
                            $("#errAll.forgotpassword").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#ForgotPasswordForm")[0].reset();
                            location.href = "reset-password.php?id=" + (feedback.id) + "&token=" + (feedback.token);
                            // location.href = "freecreate?fname=" + fname + "&Mnumber=" + Mnumber + "&sitename=" + sitename;
                        }
                    }
                });
            }
        }
    });

    // RESET PASSWORD 
    $("#ResetPasswordBtn").click(function (e) {
        e.preventDefault();
        // console.log('me');
        const account_password = $('#account_password.resetpassword').val();
        const account_confirmpassword = $('#account_confirmpassword.resetpassword').val();

        var errPassword = '';
        var errConfirmPassword = '';

        if (account_password.length == '') {
            errPassword = '<li>Password is required! </li>';
            $("#errPassword.resetpassword").removeClass("d-none");
            $("#errPassword.resetpassword").addClass("d-block");
            $("#errPassword.resetpassword").html(errPassword);
        } else {
            if (account_password.length < 6) {
                errPassword = '<li>Password must not be less than 6 characters! </li>';
                $("#errPassword.resetpassword").removeClass("d-none");
                $("#errPassword.resetpassword").addClass("d-block");
                $("#errPassword.resetpassword").html(errPassword);
            } else {
                errPassword = '';
                $("#errPassword.resetpassword").addClass("d-none");
                $("#errPassword.resetpassword").removeClass("d-block");
                $("#errPassword.resetpassword").html(errPassword);
            }
        }

        if (account_confirmpassword != account_password) {
            errConfirmPassword = '<li>Confirm password must be the same with password! </li>';
            $("#errConfirmpassword.resetpassword").removeClass("d-none");
            $("#errConfirmpassword.resetpassword").addClass("d-block");
            $("#errConfirmpassword.resetpassword").html(errConfirmPassword);
        } else {
            errConfirmPassword = '';
            $("#errConfirmpassword.resetpassword").addClass("d-none");
            $("#errConfirmpassword.resetpassword").removeClass("d-block");
            $("#errConfirmpassword.resetpassword").html(errConfirmPassword);
        }


        if (errPassword != '' || errConfirmPassword != '') {
            $("#alertResetPasswordError.resetpassword").addClass("d-block");
            $("#alertResetPasswordError.resetpassword").removeClass("d-none");

            return false;
        } else {

            $("#alertResetPasswordError.resetpassword").removeClass("d-block");
            $("#alertResetPasswordError.resetpassword").addClass("d-none");

            if (account_password.length != '' && account_confirmpassword.length != '') {
                //ajax
                var formData = $('#ResetPasswordForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/accounts/authentication.php',
                    data: formData + '&action=ResetPassword',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            location.href = "forgot-password.php";
                        } else if (feedback.status === "success") {
                            $("#ResetPasswordForm")[0].reset();
                            location.href = "index.php";
                        }
                    }
                });
            }
        }
    });

    // ACCEPT REQUEST
    $(document).on('click', '#AcceptRequest', function (e) {
        e.preventDefault();

        $.ajax({
            method: 'post',
            url: '../app/controllers/accounts/requestAccount.php',
            data: 'account_id=' + $('#account_id').val() +
                '&action=AcceptRequest',
            dataType: 'JSON',
            success: function (feedback) {
                if (feedback.status === "error") {
                    $("#alertRequestError.acceptrequest").addClass(
                        "d-block");
                    $("#alertRequestError.acceptrequest").removeClass(
                        "d-none");

                    $("#errAll.acceptrequest").removeClass("d-none");
                    $("#errAll.acceptrequest").addClass("d-block");
                    $("#errAll.acceptrequest").html(feedback.errAll);
                } else if (feedback.status === "success") {
                    $("#warningRequestSuccess.acceptrequest").removeClass('d-block');
                    $("#warningRequestSuccess.acceptrequest").addClass('d-none');
                    $("#alertRequestSuccess.acceptrequest").removeClass('d-none');
                    $("#alertRequestSuccess.acceptrequest").addClass('d-block');

                    $("#succMsg.acceptrequest").html(feedback.message);

                    $("#requestModalFooterOne").removeClass('d-block');
                    $("#requestModalFooterOne").addClass('d-none');

                    $("#requestModalFooterTwo").removeClass('d-none');
                    $("#requestModalFooterTwo").addClass('d-block');

                    $("#ModalCloseButtonAcceptRequestOne").click(function () {
                        location.reload()
                    });

                    $("#ModalCloseButtonAcceptRequestTwo").click(function () {
                        location.reload()
                    });

                    $('#acceptRequestModal').on('hidden.bs.modal', function () {
                        location.reload();
                    });

                }
            }
        });
    });

    // DELETE REQUEST
    $(document).on('click', '#DeleteRequest', function (e) {
        e.preventDefault();

        $.ajax({
            method: 'post',
            url: '../app/controllers/accounts/requestAccount.php',
            data: 'account_id=' + $('#account_id').val() +
                '&action=DeleteRequest',
            dataType: 'JSON',
            success: function (feedback) {
                if (feedback.status === "error") {
                    $("#alertRequestError.deleterequest").addClass(
                        "d-block");
                    $("#alertRequestError.deleterequest").removeClass(
                        "d-none");

                    $("#errAll.deleterequest").removeClass("d-none");
                    $("#errAll.deleterequest").addClass("d-block");
                    $("#errAll.deleterequest").html(feedback.errAll);
                } else if (feedback.status === "success") {
                    $("#warningRequestSuccess.deleterequest").removeClass('d-block');
                    $("#warningRequestSuccess.deleterequest").addClass('d-none');
                    $("#alertRequestSuccess.deleterequest").removeClass('d-none');
                    $("#alertRequestSuccess.deleterequest").addClass('d-block');

                    $("#succMsg.deleterequest").html(feedback.message);

                    $("#requestModalFooterOne").removeClass('d-block');
                    $("#requestModalFooterOne").addClass('d-none');

                    $("#requestModalFooterTwo").removeClass('d-none');
                    $("#requestModalFooterTwo").addClass('d-block');

                    $("#ModalCloseButtonDeleteRequestOne").click(function () {
                        location.reload()
                    });

                    $("#ModalCloseButtonDeleteRequestTwo").click(function () {
                        location.reload()
                    });

                    $('#deleteRequestModal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                }
            }
        });
    });

    // ADD ADMIN 
    $("#AddAdmin").click(function (e) {
        e.preventDefault();
        const account_firstname = $('#account_firstname.addadmin').val();
        const account_lastname = $('#account_lastname.addadmin').val();
        const account_username = $('#account_username.addadmin').val();
        const account_password = $('#account_password.addadmin').val();
        const account_confirmpassword = $('#account_confirmpassword.addadmin').val();
        const question_id = $('#question_id.addadmin').val();
        const account_answer = $('#account_answer.addadmin').val();

        var errAll = '';
        var errFirstname = '';
        var errLastname = '';
        var errUsername = '';
        var errPassword = '';
        var errConfirmPassword = '';
        var errQuestion = '';
        var errAnswer = '';

        if (account_firstname.length == '' && account_lastname.length == '' && account_username.length == '' &&
            account_password.length == '' && question_id.length == '' && account_answer.length == '') {
            errAll = '<li> All fields are empty! </li>';
            $("#errAll.addadmin").removeClass("d-none");
            $("#errAll.addadmin").addClass("d-block");
            $("#errAll.addadmin").html(errAll);
        } else {
            errAll = '';
            $("#errAll.addadmin").addClass("d-none");
            $("#errAll.addadmin").removeClass("d-block");
            $("#errAll.addadmin").html(errAll);

            if (account_firstname.length == '') {
                errFirstname = '<li> Firstname is required! </li>';
                $("#errFirstname.addadmin").removeClass("d-none");
                $("#errFirstname.addadmin").addClass("d-block");
                $("#errFirstname.addadmin").html(errFirstname);
            } else {
                errFirstname = '';
                $("#errFirstname.addadmin").addClass("d-none");
                $("#errFirstname.addadmin").removeClass("d-block");
                $("#errFirstname.addadmin").html(errFirstname);
            }

            if (account_lastname.length == '') {
                errLastname = '<li> Lastname is required! </li>';
                $("#errLastname.addadmin").removeClass("d-none");
                $("#errLastname.addadmin").addClass("d-block");
                $("#errLastname.addadmin").html(errLastname);
            } else {
                errLastname = '';
                $("#errLastname.addadmin").addClass("d-none");
                $("#errLastname.addadmin").removeClass("d-block");
                $("#errLastname.addadmin").html(errLastname);
            }

            if (account_username.length == '') {
                errUsername = '<li> Username is required! </li>';
                $("#errUsername.addadmin").removeClass("d-none");
                $("#errUsername.addadmin").addClass("d-block");
                $("#errUsername.addadmin").html(errUsername);
            } else {
                if (account_username.length < 6) {
                    errUsername = '<li>Username must not be less than 6 characters! </li>';
                    $("#errUsername.addadmin").removeClass("d-none");
                    $("#errUsername.addadmin").addClass("d-block");
                    $("#errUsername.addadmin").html(errUsername);
                } else {
                    errUsername = '';
                    $("#errUsername.addadmin").addClass("d-none");
                    $("#errUsername.addadmin").removeClass("d-block");
                    $("#errUsername.addadmin").html(errUsername);
                }
            }

            if (account_password.length == '') {
                errPassword = '<li>Password is required! </li>';
                $("#errPassword.addadmin").removeClass("d-none");
                $("#errPassword.addadmin").addClass("d-block");
                $("#errPassword.addadmin").html(errPassword);
            } else {
                if (account_password.length < 6) {
                    errPassword = '<li>Password must not be less than 6 characters! </li>';
                    $("#errPassword.addadmin").removeClass("d-none");
                    $("#errPassword.addadmin").addClass("d-block");
                    $("#errPassword.addadmin").html(errPassword);
                } else {
                    errPassword = '';
                    $("#errPassword.addadmin").addClass("d-none");
                    $("#errPassword.addadmin").removeClass("d-block");
                    $("#errPassword.addadmin").html(errPassword);
                }
            }

            if (account_confirmpassword != account_password) {
                errConfirmPassword = '<li>Confirm password must be the same with password! </li>';
                $("#errConfirmpassword.addadmin").removeClass("d-none");
                $("#errConfirmpassword.addadmin").addClass("d-block");
                $("#errConfirmpassword.addadmin").html(errConfirmPassword);
            } else {
                errConfirmPassword = '';
                $("#errConfirmpassword.addadmin").addClass("d-none");
                $("#errConfirmpassword.addadmin").removeClass("d-block");
                $("#errConfirmpassword.addadmin").html(errConfirmPassword);
            }

            if (question_id.length == '') {
                errQuestion = '<li>Please select your password security question! </li>';
                $("#errQuestion.addadmin").removeClass("d-none");
                $("#errQuestion.addadmin").addClass("d-block");
                $("#errQuestion.addadmin").html(errQuestion);
            } else {
                errQuestion = '';
                $("#errQuestion.addadmin").addClass("d-none");
                $("#errQuestion.addadmin").removeClass("d-block");
                $("#errQuestion.addadmin").html(errQuestion);
            }

            if (account_answer.length == '') {
                errAnswer = '<li>Please answer the question! </li>';
                $("#errAnswer.addadmin").removeClass("d-none");
                $("#errAnswer.addadmin").addClass("d-block");
                $("#errAnswer.addadmin").html(errAnswer);
            } else {
                errAnswer = '';
                $("#errAnswer.addadmin").addClass("d-none");
                $("#errAnswer.addadmin").removeClass("d-block");
                $("#errAnswer.addadmin").html(errAnswer);
            }
        }

        if (errAll != '' || errFirstname != '' || errLastname != '' || errUsername != '' || errPassword != '' ||
            errConfirmPassword != '' || errQuestion != '' || errAnswer != '') {

            $("#alertAddAdminError.addadmin").addClass("d-block");
            $("#alertAddAdminError.addadmin").removeClass("d-none");

            return false;
        } else {

            $("#alertAddAdminError.addadmin").removeClass("d-block");
            $("#alertAddAdminError.addadmin").addClass("d-none");

            if (account_firstname.length != '' && account_lastname.length != '' &&
                account_username.length != '' && account_password.length != '' &&
                account_confirmpassword.length != '' && question_id.length != '' &&
                account_answer.length != '') {
                //ajax

                var formData = $('#AddAdminForm').serialize();
                // console.log(formData);
                $.ajax({
                    method: 'post',
                    url: '/bhcm.com/app/controllers/accounts/crudAccount.php',
                    data: formData + '&action=AddAdmin',
                    dataType: 'JSON',
                    success: function (feedback) {
                        if (feedback.status === "error") {
                            $("#alertAddAdminError.addadmin").addClass("d-block");
                            $("#alertAddAdminError.addadmin").removeClass("d-none");

                            $("#errAll.addadmin").removeClass("d-none");
                            $("#errAll.addadmin").addClass("d-block");
                            $("#errAll.addadmin").html(feedback.errAll);
                        } else if (feedback.status === "success") {
                            $("#alertAddAdminSuccess.addadmin").addClass("d-block");
                            $("#alertAddAdminSuccess.addadmin").removeClass("d-none");

                            $("#succMsg.addadmin").removeClass("d-none");
                            $("#succMsg.addadmin").addClass("d-block");
                            $("#succMsg.addadmin").html(feedback.message);
                            $("#AddAdminForm")[0].reset();

                            setTimeout(function () {
                                $("#alertAddAdminSuccess.addadmin").removeClass('d-block');
                                $("#alertAddAdminSuccess.addadmin").addClass('d-none');
                                $("#succMsg.addadmin").removeClass('d-block');
                                $("#succMsg.addadmin").addClass('d-none');
                            }, 5000);

                            $("#ModalCloseButtonAddAdminOne").click(function () {
                                location.reload();
                            });
                            $("#ModalCloseButtonAddAdminTwo").click(function () {
                                location.reload();
                            });
                            $('#addAdminModal').on('hidden.bs.modal', function () {
                                location.reload();
                            })
                        }
                    }
                });
            }
        }
    }); // end of ADD ADMIN 

    // EDIT ACCOUNT INFO
    $(document).on('click', '#getEditAccount', function (e) {
        $('#account_firstname.editaccount').attr("readonly", false);
        $('#account_lastname.editaccount').attr("readonly", false);
        $('#account_username.editaccount').attr("readonly", false);
        $('#account_password.editaccount').attr("readonly", false);
        $('#account_confirmpassword.editaccount').attr("readonly", false);
        $('#question_id.editaccount').attr("disabled", false);
        $('#account_answer.editaccount').attr("readonly", false);

        $('#accountProfileModalFooterOne').removeClass('d-block');
        $('#accountProfileModalFooterOne').addClass('d-none');

        $('#accountProfileModalFooterTwo').removeClass('d-none');
        $('#accountProfileModalFooterTwo').addClass('d-block');

        var errAll = '';
        var errFirstname = '';
        var errLastname = '';
        var errUsername = '';
        var errPassword = '';
        var errConfirmPassword = '';
        var errQuestion = '';
        var errAnswer = '';

        $("#EditAccount").click(function (e) {
            e.preventDefault();
            // console.log();
            const account_firstname = $('#account_firstname.editaccount').val();
            const account_lastname = $('#account_lastname.editaccount').val();
            const account_username = $('#account_username.editaccount').val();
            const account_password = $('#account_password.editaccount').val();
            const account_confirmpassword = $('#account_confirmpassword.editaccount').val();
            const question_id = $('#question_id.editaccount').val();
            const account_answer = $('#account_answer.editaccount').val();


            if (account_firstname.length == '' && account_lastname.length == '' && account_username.length == '' &&
                account_password.length == '' && question_id.length == '' && account_answer.length == '') {
                errAll = '<li> All fields are empty! </li>';
                $("#errAll.editaccount").removeClass("d-none");
                $("#errAll.editaccount").addClass("d-block");
                $("#errAll.editaccount").html(errAll);
            } else {
                errAll = '';
                $("#errAll.editaccount").addClass("d-none");
                $("#errAll.editaccount").removeClass("d-block");
                $("#errAll.editaccount").html(errAll);

                if (account_firstname.length == '') {
                    errFirstname = '<li> Firstname is required! </li>';
                    $("#errFirstname.editaccount").removeClass("d-none");
                    $("#errFirstname.editaccount").addClass("d-block");
                    $("#errFirstname.editaccount").html(errFirstname);
                } else {
                    errFirstname = '';
                    $("#errFirstname.editaccount").addClass("d-none");
                    $("#errFirstname.editaccount").removeClass("d-block");
                    $("#errFirstname.editaccount").html(errFirstname);
                }

                if (account_lastname.length == '') {
                    errLastname = '<li> Lastname is required! </li>';
                    $("#errLastname.editaccount").removeClass("d-none");
                    $("#errLastname.editaccount").addClass("d-block");
                    $("#errLastname.editaccount").html(errLastname);
                } else {
                    errLastname = '';
                    $("#errLastname.editaccount").addClass("d-none");
                    $("#errLastname.editaccount").removeClass("d-block");
                    $("#errLastname.editaccount").html(errLastname);
                }

                if (account_username.length == '') {
                    errUsername = '<li> Username is required! </li>';
                    $("#errUsername.editaccount").removeClass("d-none");
                    $("#errUsername.editaccount").addClass("d-block");
                    $("#errUsername.editaccount").html(errUsername);
                } else {
                    if (account_username.length < 6) {
                        errUsername = '<li>Username must not be less than 6 characters! </li>';
                        $("#errUsername.editaccount").removeClass("d-none");
                        $("#errUsername.editaccount").addClass("d-block");
                        $("#errUsername.editaccount").html(errUsername);
                    } else {
                        errUsername = '';
                        $("#errUsername.editaccount").addClass("d-none");
                        $("#errUsername.editaccount").removeClass("d-block");
                        $("#errUsername.editaccount").html(errUsername);
                    }
                }

                if (account_password.length == '') {
                    errPassword = '<li>Password is required! </li>';
                    $("#errPassword.editaccount").removeClass("d-none");
                    $("#errPassword.editaccount").addClass("d-block");
                    $("#errPassword.editaccount").html(errPassword);
                } else {
                    if (account_password.length < 6) {
                        errPassword = '<li>Password must not be less than 6 characters! </li>';
                        $("#errPassword.editaccount").removeClass("d-none");
                        $("#errPassword.editaccount").addClass("d-block");
                        $("#errPassword.editaccount").html(errPassword);
                    } else {
                        errPassword = '';
                        $("#errPassword.editaccount").addClass("d-none");
                        $("#errPassword.editaccount").removeClass("d-block");
                        $("#errPassword.editaccount").html(errPassword);
                    }
                }

                if (account_confirmpassword != account_password) {
                    errConfirmPassword = '<li>Confirm password must be the same with password! </li>';
                    $("#errConfirmpassword.editaccount").removeClass("d-none");
                    $("#errConfirmpassword.editaccount").addClass("d-block");
                    $("#errConfirmpassword.editaccount").html(errConfirmPassword);
                } else {
                    errConfirmPassword = '';
                    $("#errConfirmpassword.editaccount").addClass("d-none");
                    $("#errConfirmpassword.editaccount").removeClass("d-block");
                    $("#errConfirmpassword.editaccount").html(errConfirmPassword);
                }

                if (question_id.length == '') {
                    errQuestion = '<li>Please select your password security question! </li>';
                    $("#errQuestion.editaccount").removeClass("d-none");
                    $("#errQuestion.editaccount").addClass("d-block");
                    $("#errQuestion.editaccount").html(errQuestion);
                } else {
                    errQuestion = '';
                    $("#errQuestion.editaccount").addClass("d-none");
                    $("#errQuestion.editaccount").removeClass("d-block");
                    $("#errQuestion.editaccount").html(errQuestion);
                }

                if (account_answer.length == '') {
                    errAnswer = '<li>Please answer the question! </li>';
                    $("#errAnswer.editaccount").removeClass("d-none");
                    $("#errAnswer.editaccount").addClass("d-block");
                    $("#errAnswer.editaccount").html(errAnswer);
                } else {
                    errAnswer = '';
                    $("#errAnswer.editaccount").addClass("d-none");
                    $("#errAnswer.editaccount").removeClass("d-block");
                    $("#errAnswer.editaccount").html(errAnswer);
                }
            }

            if (errAll != '' || errFirstname != '' || errLastname != '' || errUsername != '' || errPassword != '' ||
                errConfirmPassword != '' || errQuestion != '' || errAnswer != '') {
                $("#alertEditAccountError.editaccount").addClass("d-block");
                $("#alertEditAccountError.editaccount").removeClass("d-none");

                return false;
            } else {

                $("#alertEditAccountError.editaccount").removeClass("d-block");
                $("#alertEditAccountError.editaccount").addClass("d-none");

                if (account_firstname.length != '' && account_lastname.length != '' &&
                    account_username.length != '' && account_password.length != '' &&
                    account_confirmpassword.length != '' && question_id.length != '' &&
                    account_answer.length != '') {

                    var formData = $('#editAccountForm').serialize();
                    // console.log(formData);
                    $.ajax({
                        method: 'post',
                        url: '/bhcm.com/app/controllers/accounts/crudAccount.php',
                        data: formData + '&action=EditAccount',
                        dataType: 'JSON',
                        success: function (feedback) {
                            if (feedback.status === "error") {
                                $("#alertEditAccountError.editaccount").addClass("d-block");
                                $("#alertEditAccountError.editaccount").removeClass("d-none");

                                $("#errAll.editaccount").removeClass("d-none");
                                $("#errAll.editaccount").addClass("d-block");
                                $("#errAll.editaccount").html(feedback.errAll);
                            } else if (feedback.status === "success") {
                                $("#alertEditAccountSuccess.editaccount").removeClass("d-none");
                                $("#alertEditAccountSuccess.editaccount").addClass("d-block");

                                $("#succMsg.editaccount").removeClass("d-none");
                                $("#succMsg.editaccount").addClass("d-block");
                                $("#succMsg.editaccount").html(feedback.message);


                                $('#account_firstname.editaccount').attr("readonly", true);
                                $('#account_lastname.editaccount').attr("readonly", true);
                                $('#account_username.editaccount').attr("readonly", true);
                                $('#account_password.editaccount').attr("readonly", true);
                                $('#account_confirmpassword.editaccount').attr("readonly", true);
                                $('#question_id.editaccount').attr("disabled", true);
                                $('#account_answer.editaccount').attr("readonly", true);
                                $('#accountProfileModalFooterOne').addClass('d-block');
                                $('#accountProfileModalFooterOne').removeClass('d-none');

                                $('#accountProfileModalFooterTwo').addClass('d-none');
                                $('#accountProfileModalFooterTwo').removeClass('d-block');

                                $('#account_password.editaccount').val('');
                                $('#account_confirmpassword.editaccount').val('');


                                setTimeout(function () {
                                    let alertUl = $(
                                        "#alertEditAccountSuccess.editaccount");
                                    let alertLi = $("#succMsg.editaccount");
                                    alertUl.removeClass('d-block');
                                    alertUl.addClass('d-none');

                                    alertLi.removeClass('d-block');
                                    alertLi.addClass('d-none');
                                }, 5000);

                                // location.reload();
                            }
                        }
                    });

                }
            }

            // var formData = $('#EditConsultationForm').serialize();

        });


        $("#cancelEditAccount").click(function () {
            $('#account_firstname.editaccount').attr("readonly", true);
            $('#account_lastname.editaccount').attr("readonly", true);
            $('#account_username.editaccount').attr("readonly", true);
            $('#account_password.editaccount').attr("readonly", true);
            $('#account_confirmpassword.editaccount').attr("readonly", true);
            $('#question_id.editaccount').attr("disabled", true);
            $('#account_answer.editaccount').attr("readonly", true);

            $('#accountProfileModalFooterOne').addClass('d-block');
            $('#accountProfileModalFooterOne').removeClass('d-none');

            $('#accountProfileModalFooterTwo').addClass('d-none');
            $('#accountProfileModalFooterTwo').removeClass('d-block');

            // remove alerts
            $("#alertEditAccountError.editaccount").addClass("d-none");
            $("#alertEditAccountError.editaccount").removeClass("d-block");

            if (errAll != '') {
                errAll = '';
                $("#errAll.editaccount").addClass("d-none");
                $("#errAll.editaccount").removeClass("d-block");
                $("#errAll.editaccount").html(errAll);
            }

            if (errFirstname != '') {
                errFirstname = '';
                $("#errFirstname.editaccount").addClass("d-none");
                $("#errFirstname.editaccount").removeClass("d-block");
                $("#errFirstname.editaccount").html(errFirstname);
            }

            if (errLastname != '') {
                errLastname = '';
                $("#errLastname.editaccount").addClass("d-none");
                $("#errLastname.editaccount").removeClass("d-block");
                $("#errLastname.editaccount").html(errLastname);
            }

            if (errUsername != '') {
                errUsername = '';
                $("#errUsername.editaccount").addClass("d-none");
                $("#errUsername.editaccount").removeClass("d-block");
                $("#errUsername.editaccount").html(errUsername);
            }

            if (errPassword != '') {
                errPassword = '';
                $("#errPassword.editaccount").addClass("d-none");
                $("#errPassword.editaccount").removeClass("d-block");
                $("#errPassword.editaccount").html(errPassword);
            }

            if (errConfirmPassword != '') {
                errConfirmPassword = '';
                $("#errConfirmPassword.editaccount").addClass("d-none");
                $("#errConfirmPassword.editaccount").removeClass("d-block");
                $("#errConfirmPassword.editaccount").html(errConfirmPassword);
            }

            if (errQuestion != '') {
                errQuestion = '';
                $("#errQuestion.editaccount").addClass("d-none");
                $("#errQuestion.editaccount").removeClass("d-block");
                $("#errQuestion.editaccount").html(errQuestion);
            }

            if (errAnswer != '') {
                errAnswer = '';
                $("#errAnswer.editaccount").addClass("d-none");
                $("#errAnswer.editaccount").removeClass("d-block");
                $("#errAnswer.editaccount").html(errAnswer);
            }
        });
    });

    // DELETE ACCOUNT 
    $(document).on('click', '#DeleteAccount', function (e) {
        e.preventDefault();

        $.ajax({
            method: 'post',
            url: '/bhcm.com/app/controllers/accounts/crudAccount.php',
            data: 'account_id=' + $('#account_id').val() +
                '&action=DeleteAccount',
            dataType: 'JSON',
            success: function (feedback) {
                if (feedback.status === "error") {
                    $("#alertDeleteAccountError.deleteaccount").addClass(
                        "d-block");
                    $("#alertDeleteAccountError.deleteaccount").removeClass(
                        "d-none");

                    $("#errAll.deleteaccount").removeClass("d-none");
                    $("#errAll.deleteaccount").addClass("d-block");
                    $("#errAll.deleteaccount").html(feedback.errAll);
                } else if (feedback.status === "success") {
                    $("#warningDeleteAccountSuccess.deleteaccount").removeClass('d-block');
                    $("#warningDeleteAccountSuccess.deleteaccount").addClass('d-none');
                    $("#alertDeleteAccountSuccess.deleteaccount").removeClass('d-none');
                    $("#alertDeleteAccountSuccess.deleteaccount").addClass('d-block');

                    $("#succMsg.deleteaccount").html(feedback.message);

                    $("#accountModalFooterOne").removeClass('d-block');
                    $("#accountModalFooterOne").addClass('d-none');

                    $("#accountModalFooterTwo").removeClass('d-none');
                    $("#accountModalFooterTwo").addClass('d-block');

                    $("#ModalCloseButtonDeleteAccountOne").click(function () {
                        location.reload()
                    });

                    $("#ModalCloseButtonDeleteAccountTwo").click(function () {
                        location.reload()
                    });

                    $('#deleteAccountModal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                }
            }
        });
    });

});