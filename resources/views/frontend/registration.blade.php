<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>OMPBMS</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- fevicon -->
    <link rel="icon" href="{{url('frontend/assets/images/fevicon.png')}}" sizes="128x128" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('frontend/assets/css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <footer>
        <div class="footer ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
 
                    
                        
                        <form action="{{ route('registration') }}" class="contact_bg" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="titlepage">
                                        <h2>Registration</h2>
                                    </div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Name" type="text" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Email" type="text" name="email"  value="{{ old('email') }}" >
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="phone" value="{{ old('phone') }}" >
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Password" type="password" name="password">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Confirm Password" type="password" name="password_confirmation">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
        </div>
    </footer>



    <script src="{{url('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{url('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/custom.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>
