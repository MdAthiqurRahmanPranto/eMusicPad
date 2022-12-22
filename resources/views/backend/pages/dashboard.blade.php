@extends('backend.adminpanel')

@section('contents')

<h1>Dashbaord</h1>

<div class="row">
  <div class="col-xl-3 col-md-6">
      <div class="card bg-primary text-white mb-4">
          <div class="card-body">Total Padcenter</div>
          <div class="card-footer d-flex align-items-center justify-content-between">
              <span>{{ $totalPadcenter }}</span>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-md-6">
      <div class="card bg-warning text-white mb-4">
          <div class="card-body">Total Musician</div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <span>{{ $totalMusician }}</span>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-md-6">
      <div class="card bg-success text-white mb-4">
          <div class="card-body">Total Booking</div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <span>{{ $totalBooking}}</span>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-md-6">
      <div class="card bg-danger text-white mb-4">
          <div class="card-body">Total Instrument</div>
          <div class="card-footer d-flex align-items-center justify-content-between">
            <span>{{ $totalInstrument }}</span>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
      </div>
  </div>
</div>


@endsection
