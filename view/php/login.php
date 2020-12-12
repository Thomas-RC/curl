<?php

$body = '
<!-- Default form login -->
<div style="height: 100vh">
    <div class="flex-center flex-column">
        <!-- Default form register -->

        <form class="needs-validation border border-light p-5" novalidate action="login" method="post">

            <p class="h4 mb-4">Sign in</p>
        
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
        
            <div class="text-center">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                    </div>
                </div>
                <div>
                    <!-- Forgot password -->
                    <a href="">Forgot password?</a>
                </div>
                
            
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
            
                <!-- Register -->
                <p>Not a member?
                    <a href="">Register</a>
                </p>
            
                <!-- Social login -->
                <p>or sign in with:</p>
            
                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>
        
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
