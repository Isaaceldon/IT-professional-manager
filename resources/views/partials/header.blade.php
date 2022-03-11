<!-- Header Start -->
<div class="header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="brand">
                    <a href="index.html" style="color: teal;font-size:25px;font-weight:bold;">
                        MeetPro-World
                    </a>
                </div>
            </div>
            <div class="col-lg-10 ">

                <div class="navbar navbar-expand-lg bg-light navbar-light">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse"
                       >
                        <div class="navbar-nav ml-auto">
                            <a href="{{route('accueil')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{route('allprofessional')}}" class="nav-item nav-link">Professional</a>
                            <a href="{{route('about')}}" class="nav-item nav-link">About Us</a>
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contact Us</a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
