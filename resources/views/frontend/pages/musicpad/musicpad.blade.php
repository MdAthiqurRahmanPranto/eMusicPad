@extends('frontend.master')


@section('contents')
<div id="gallery" class="Gallery">
  <div class="container"> 
    <div class="row display_boxflex">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <div class="row">
          
          @foreach ($musicpad as $data )
            
         
          
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
            <div class="Gallery_img">
              <figure><img src="{{ url('/uploads/'.$data->image) }}" alt="Padcenter image"/></figure>
            </div>
            <div class="hover_box">
             
              <ul class="icon_hu">
                 <h3>{{ $data->name }}</h3>
            
              </ul>
            </div>
          </div>

          @endforeach
          
          
          
          
          
          
          {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
            <div class="Gallery_img">
              <figure><img src="{{ url('frontend/assets/images/Gallery2.jpg') }}" alt="#"/></figure>
            </div>
            <div class="hover_box">
             
              <ul class="icon_hu">
                 <h3>Air Extreme</h3>
                
              </ul>
            </div>
          </div> --}}
          {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott1">
            <div class="Gallery_img">
              <figure><img src="{{ url('frontend/assets/images/Gallery3.jpg') }}" alt="#"/></figure>
            </div>
            <div class="hover_box">
             
              <ul class="icon_hu">
                 <h3>Olive Pad</h3>
               
              </ul>
            </div>
          </div> --}}
          {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="Gallery_img">
              <figure><img src="{{ url('frontend/assets/images/Gallery4.jpg') }}" alt="#"/></figure>
            </div>
            <div class="hover_box">
             
              <ul class="icon_hu">
                 <h3>Funkedelic Pad</h3>
           
              </ul>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="Gallery_text">
          <div class="titlepage">
            <h2>Pad Center</h2>
          </div>
          <p>Book your pad here.......</p>
          <a href="{{route('musicpads.list') }}">See More</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection