<!-- 
 developing by : Mohamed Elmasry
 Github        : https://github.com/elmasryn
 Email         : elmasry_n@hotmail.com 
-->

<div class="topbar-menu-area">
    <div class="container">
        <div class="topbar-menu left-menu">
            <ul>
                <li class="menu-item">
                    <a title="Hotline: (+123) 456 789" href="#">
                        <span class="icon label-before fa fa-mobile"></span>
                        Hotline: (+123) 456 789
                    </a>
                </li>
            </ul>
        </div>
        <div class="topbar-menu right-menu">
            <ul>
                @if (Route::has('login'))
                    @auth
                        <li class="menu-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a title="Logout" href="#"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    @else
                        <li class="menu-item">
                            <a title="Login" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="menu-item">
                                <a title="Register" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
                <li class="menu-item lang-menu menu-item-has-children parent">
                    <a title="English" href="#">
                        <span class="img label-before">
                            <img src="{{asset('frontend/images/lang-en.png')}}" alt="lang-en">
                        </span>
                        English <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="submenu lang">
                        <li class="menu-item">
                            <a title="hungary" href="#">
                                <span class="img label-before">
                                    <img src="{{asset('frontend/images/lang-hun.png')}}" alt="lang-hun">
                                </span>
                                Hungary
                            </a>
                        </li>
                        <li class="menu-item">
                            <a title="german" href="#">
                                <span class="img label-before">
                                    <img src="{{asset('frontend/images/lang-ger.png')}}" alt="lang-ger">
                                </span>
                                German
                            </a>
                        </li>
                        <li class="menu-item">
                            <a title="french" href="#">
                                <span class="img label-before">
                                    <img src="{{asset('frontend/images/lang-fra.png')}}" alt="lang-fre">
                                </span>
                                French
                            </a>
                        </li>
                        <li class="menu-item">
                            <a title="canada" href="#">
                                <span class="img label-before">
                                    <img src="{{asset('frontend/images/lang-can.png')}}" alt="lang-can">
                                </span>
                                Canada
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children parent">
                    <a title="Dollar (USD)" href="#">
                        Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="submenu curency">
                        <li class="menu-item">
                            <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                        </li>
                        <li class="menu-item">
                            <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                        </li>
                        <li class="menu-item">
                            <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
