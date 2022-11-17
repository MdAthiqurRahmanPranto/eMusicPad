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
                                    <a href="index.html"><img src="{{url('frontend/assets/images/logo.png')}}"
                                            alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">

                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu ">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">Home</a> </li>

                                        <li> <a href="about.html">About</a> </li>

                                        <li> <a href="{{ route('musicpads') }}">Music Pads</a> </li>
                                        <li> <a href="contact.html">Contact</a> </li>
                                        @auth()
                                        <li> <a href="{{route('profile')}}">Profile</a> </li>
                                        <li> <a href="{{route('logout')}}">Logout</a> </li>
                                        @endauth

                                        @guest()
                                        <li> <a href="{{route('login')}}">login</a> </li>
                                        <li> <a href="{{route('registration')}}">Registrations</a> </li>
                                        @endguest
                                       
                                        <li> <a class="last_manu" href="#"><img
                                                    src="{{url('frontend/assets/images/search_icon.png')}}"
                                                    alt="#" /></a> </li>

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
