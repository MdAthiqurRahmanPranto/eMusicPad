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
                                        <li> <a href="{{route('Profile')}}">Profile-{{ auth()->user()->name }}</a> </li>
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

        {{-- <!-- end header -->
        <section class="slider_section">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span>The Best</span>
                                            <h1>Online music pad booking</h1>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution
                                                of letters, as opposed to using 'Content here, content here', making
                                                it look</p>
                                            <a href="{{route('login')}}">Login</a> <a href="{{route('registration')}}">Registrations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">

                        <div class="container ">
                            <div class="carousel-caption">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span>The Best</span>
                                            <h1>Online music pad booking</h1>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution
                                                of letters, as opposed to using 'Content here, content here', making
                                                it look</p>
                                            <a href="{{route('login')}}">Login</a><a href="#">Registrations </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="carousel-item">

                        <div class="container">
                            <div class="carousel-caption ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span>The Best</span>
                                            <h1>Online music pad booking</h1>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution
                                                of letters, as opposed to using 'Content here, content here', making
                                                it look</p>
                                            <a href="{{route('login')}}">Login</a> <a href="#">Registrations </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>

                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                </a> -->
            </div>



        </section> --}}
    </div>
</header>
<section class="slider_section" style="background:url({{ url('frontend/assets/images/banner2.jpg') }});">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-bg">
                                    <span>The Best</span>
                                    <h1>Online music pad booking</h1>
                                    <p> 
                                        Online Music Pad Booking & Management System is a website, where you can book your 
                                        Practice pad online. You don’t need to go physically for booking the pad. It requires more time and effort when all procedures are performed manually.Thus, in order to reduce time consumption and human effort the Online Music Pad Booking & Management System application can be applied. </p>
                                        @guest()
                                        <a href="{{route('login')}}">Login</a> <a href="{{route('registration')}}">Registrations</a>
                                        @endguest
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item">

                <div class="container ">
                    <div class="carousel-caption">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-bg">
                                    <span>The Best</span>
                                    <h1>Online music pad booking</h1>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. The point of
                                        using Lorem Ipsum is that it has a more-or-less normal distribution
                                        of letters, as opposed to using 'Content here, content here', making
                                        it look</p>
                                    <a href="{{route('login')}}">Login</a><a href="#">Registrations </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <div class="carousel-item">

                <div class="container">
                    <div class="carousel-caption ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-bg">
                                    <span>The Best</span>
                                    <h1>Online music pad booking</h1>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. The point of
                                        using Lorem Ipsum is that it has a more-or-less normal distribution
                                        of letters, as opposed to using 'Content here, content here', making
                                        it look</p>
                                    <a href="{{route('login')}}">Login</a> <a href="#">Registrations </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>

        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

        </a> -->
    </div>



</section>