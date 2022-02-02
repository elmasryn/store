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
                    <span>Verification Email</span>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <form class="form-stl" name="frm-login" method="POST"
                                action="{{ route('verification.send') }}">
                                @csrf
                                <input type="submit" class="btn btn-sign" value="Resend Verification Email"
                                    name="Verification Email">
                            </form>

                            <form class="form-stl" name="frm-login" method="POST"
                                action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" class="btn btn-sign" value="Log Out" name="Log Out">
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
