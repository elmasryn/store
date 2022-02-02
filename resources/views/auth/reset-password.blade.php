<!-- 
 developing by : Mohamed Elmasry
 Github        : https://github.com/elmasryn
 Email         : elmasry_n@hotmail.com 
-->
    <x-app-layout>

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link">
                        <a href="/" class="link">home</a>
                    </li>
                    <li class="item-link">
                        <span>Reset Password</span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form class="form-stl" name="frm-login" method="POST"
                                    action="{{ route('password.update') }}">
                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <!-- Email Address -->
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">Email Address*</label>
                                        <input type="email" id="frm-reg-email" name="email" placeholder="Email address"
                                            value="{{ old('email', $request->email) }}">
                                    </fieldset>
                                    <!-- Password -->
                                    <fieldset class="wrap-input item-width-in-half left-item">
                                        <label for="frm-reg-pass">Password*</label>
                                        <input type="password" id="frm-reg-pass" name="password" placeholder="Password"
                                            autocomplete="password">
                                    </fieldset>
                                    <!-- Confirm Password -->
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="frm-reg-cfpass">Confirm Password*</label>
                                        <input type="password" id="frm-reg-cfpass" name="password_confirmation"
                                            placeholder="Confirm Password" autocomplete="password_confirmation">
                                    </fieldset>

                                    <input type="submit" class="btn btn-sign" value="Reset Password" name="confirm">
                                </form>

                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->
    </x-app-layout>
