 <!-- header -->
 <header>
    <!-- header inner -->
    <div class="header-top">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ route('homepage') }}"><img src="{{url('frontend/assets/images/logo.png')}}"
                                            alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">

                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu ">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="{{ route('homepage') }}">Home</a> </li>

                                        <li> <a href="{{ route('about') }}">About</a> </li>

                                        <li> <a href="{{ route('musicpads') }}">Music Pads</a> </li>
                                        <li> <a href="{{ route('contact') }}">Contact</a> </li>
                                        @auth()
                                        <li> <a href="{{route('Profile')}}">Profile</a> </li>
                                        <li> <a href="{{route('logout')}}">Logout</a> </li>
                                        @endauth

                                        @guest()
                                        <li> <a href="{{route('login')}}">login</a> </li>
                                        <li> <a href="{{route('registration')}}">Registrations</a> </li>
                                        @endguest
                                       
                                        <li> <a class="last_manu" href="#"><img
                                                    src=""
                                                    alt="" /></a> </li>

                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </div>
</header>
