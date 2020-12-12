<?php

$body = '
<div style="height: 100vh">
    <div class="flex-center flex-column">
        <!-- Default form register -->

        <form class="needs-validation border border-light p-5" novalidate action="register" method="post">

            <p class="h4 mb-4">Sign up</p>

            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <!-- First name -->
                    <input name="name" type="text" id="input_name" class="form-control" required>
                    <label for="materialFormCardNameEx" class="font-weight-light">Your name</label>
                    <span class="errorMessage_name invalid-feedback"></span>
            </div>
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                    <!-- Email -->
                    <input name="email" type="email" id="input_email" class="form-control" required>
                    <label for="input_email" class="font-weight-light">Your email</label>
                    <span class="errorMessage_email invalid-feedback"></span>
            </div>
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                    <!-- Password -->
                    <input name="password" type="password" id="input_password" class="form-control" required>
                    <label for="input_password" class="font-weight-light">Your password</label>
                    <span class="errorMessage_password invalid-feedback"></span>
            </div>
            <div class="md-form">
                <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                    <!-- Confirm password -->
                    <input name="c_password" type="password" id="input_c_password" class="form-control" required>
                    <label for="input_c_password" class="font-weight-light">Confirm password</label>
                    <span class="errorMessage_c_password invalid-feedback"></span>
            </div>

            <div class="text-center">
                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters and 1 digit
                </small>

                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

                <!-- Social register -->
                <p>or sign up with:</p>

                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                <hr>

                <!-- Terms of service -->
                <p>By clicking
                    <em>Sign up</em> you agree to our
                    <a href="" target="_blank">terms of service</a>
                </p>
            </div>

        </form>
        <!-- Default form register -->
    </div>
</div>
';
