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
                    <span>Email Password Reset Link</span>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form class="form-stl" name="frm-login" method="POST"
                                action="{{ route('password.email') }}">
                                @csrf

                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div>
                                
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address"
                                        value="{{ old('email') }}">
                                </fieldset>

                                <input type="submit" class="btn btn-sign" value="Email Password Reset Link"
                                    name="confirm">
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
