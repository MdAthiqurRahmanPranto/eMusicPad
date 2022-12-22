<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{url('frontend/assets/css/bookingstyle.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Booking Form</h1>
							@if (session()->has('message'))

							<div class="alert alert-{{session('type')}}">
									<p>{{ session('message') }}</p>
							</div>
								
							@endif
							@if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
						</div>
						<form action="{{ route('paynow',$padcenter->id) }}" method="post">
							@csrf
							
							
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control"  type="text" name='name' placeholder="Enter your Name" value="{{ auth()->user()->name }}" required >
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" name='email' placeholder="Enter your email" value="{{ auth()->user()->email}}" required>
									</div>
								</div>
							</div>
							
							
							
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control"  type="tel" name='phone' placeholder="Enter your phone number" value="{{ auth()->user()->phone}} "required>
							</div>
							<div class="form-group">
								<span class="form-label">Band Name</span>
								<input class="form-control" type="text" name='bandname' value="{{ auth()->user()->band}}">
							</div>
							<div class="form-group">
								<span class="form-label">Payment</span>
								<input class="form-control" type="text" name='payment' value="{{ $padcenter->price }}" placeholder="">
							</div>
						
							
						
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" name='date' type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										
										
{{-- 											
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Pad-Centers</span>
												<select class="form-control" name='padcenter'>
													@foreach ($padcenter as $data )
													<option>{{ $data->name }}</option>
													@endforeach
												</select>
												<span class="select-arrow"></span>
											</div>
										</div> --}}
										
									
										
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Schedule</span>
												<select class="form-control" name='schedhule'>
													@foreach ($slots as $item)
														
													<option value="{{ $item->startingTime }}-{{ $item->endingTime }}">{{ $item->startingTime }}-{{ $item->endingTime }}</option>
													@endforeach
													
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Instrument</span>
													
												
													
													@foreach ($inst as $data)
													<input  type="checkbox" value="{{ $data->id }}" name="instruments[]" multiple> <span style="color: #fff">{{ $data->name }}</span> <br>
													@endforeach
													
												<span class="select-arrow"></span>
											</div>
										
										</div>
									<div class="col-sm-4">
										<div class="">
											<span class="form-label">Price</span>
												
											
												
												@foreach ($inst as $data)
												<p style="color:#fff">{{ $data->price }}</p>
												@endforeach
												
											
										</div>
									</div>
									
										
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button tyle='submit' class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
