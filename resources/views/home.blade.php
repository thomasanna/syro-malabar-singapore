@extends('layouts.template')

@section('content')
	
<!--================Home Banner Area =================-->
	<div class="home_banner_area">
		<div class="banner_inner d-flex align-items-center" style="min-height: unset;">
			<!-- <div class="overlay bg-parallax" data-stellar-ratio="2" data-stellar-vertical-offset="0" data-background=""></div> -->
			<!-- <div class="overlay overlay-bg"></div> -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 100%;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner2.jpg')}}" alt="Second slide">
    </div>
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


		
		</div>
	</section>
	<!--================End Home Banner Area =================-->

		<!--================Latest Blog Area =================-->
	<section class="latest_blog_area section_gap color-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="text-uppercase"></p>
						<h2>
							Events
						</h2>
						<p>
							nappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
							especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							inappropriate behavior is often laughed.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach($events as $data)
				<div class="single-recent-blog col-lg-4 col-md-6">
					<div class="thumb">
						<img class="f-img img-fluid mx-auto" src="{{asset('storage/app/uploads/events/'.$data->eventImage)}}" alt="">
					</div>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
						
						<div class="meta"> <i class="fa fa-calendar-o" aria-hidden="true"></i>

							<span style="text-transform: none;">{{date('F jS, Y', strtotime($data->eventDate)) ." , ".date("g:i a", strtotime($data->eventTime))}}</span>
							<br>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<span style="text-transform: none;">{{$data->location}}</span>

							
						</div>
					</div>
					<a href="#">
						<h4>{{$data->eventName}}</h4>
					</a>
					<p> 
						@if(strlen($data->eventDescription) > 100)
						{{substr($data->eventDescription,0,100)."..."}}
						@else
						{{$data->eventDescription}}
						@endif

					</p>
				</div>
				
				@endforeach

			</div>
			<div>
				<a href="{{route('events')}}" class="main_btn">View all</a>
			</div>
		</div>
	</div>
	<!--================End Latest Blog Area =================-->


@endsection

@push("scripts")
<script>
	$('.carousel').carousel({
	interval: 2000
	})
</script>
@endpush