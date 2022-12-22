@extends('frontend.master')

@section('contents')
<div id="about" class="about">
    <div class="container">
        <div class="row display_boxflex">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                    <h2>About Us</h2>
                    <p>An Online Music Pad Booking & Management System is a website where you can choose your desire pad with slots and book them online. This is very user friendly website that anyone can easily book a pad for practice. Music Pad is like of a rehearsal room where a band or some group of musician can practice their music. In this website anyone can book a music pad via online.User can select a particular pad with slots and book them online at a website called an Online Music Pad Booking & Management System. First a user has to registration in the website then can book a pad. Anyone can visit the website but can’t book the pad. User can see the pad location and all details. The pad centers will be added by admin in the website.so the pad owner will contact with the admin to get the booking service.  </p>
                   
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                    <figure><img src="{{url('frontend/assets/images/About2.jpg')}}" alt="#" /></figure>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection