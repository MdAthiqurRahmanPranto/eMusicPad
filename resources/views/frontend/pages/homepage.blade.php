@extends('frontend.master')

@section('contents')

<!-- about  -->
<div id="about" class="about">
    <div class="container">
        <div class="row display_boxflex">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                    <h2>About Us</h2>
                    <p>An Online Music Pad Booking & Management System is a website where you can choose your desire pad with slots and book them online. This is very user friendly website that anyone can easily book a pad for practice. Music Pad is like of a rehearsal room where a band or some group of musician can practice their music. In this website anyone can book a music pad via online. </p>
                    <a href="{{ route('about') }}">Read More</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                    <figure><img src="{{url('frontend/assets/images/about.png')}}" alt="#" /></figure>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection