@extends('layouts.template')

@section('content')
	
<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner d-flex align-items-center" style="min-height: unset;">
			<!-- <div class="overlay bg-parallax" data-stellar-ratio="2" data-stellar-vertical-offset="0" data-background=""></div> -->
			<!-- <div class="overlay overlay-bg"></div> -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 100%;" data-pause="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner3.jpg')}}" alt="Second slide">
    </div> 
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner4.jpg')}}" alt="Second slide">
    </div> 
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner5.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner6.jpg')}}" alt="Second slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner7.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner8.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner9.jpg')}}" alt="Second slide">
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
						<div class="home_title">
							Regular Syro-Malabar Qurbana Schedules in Singapore 
						</div>
						<p>
							
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="table-responsive">
  <!--Table-->
  <table class="table table-striped">

    <!--Table head-->
    <thead>
      <tr class="main_tr">
        <th>Week</th>
        <th>Time</th>
        <th>Church</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
      <tr class="first_tr">
        <th scope="row" >1st Saturday</th>
        <td >7:30 pm</td>
        <td ><span><h3>Church of Devine Mercy</h3></span>
	     19 Pasir Ris Street 72, Singapore 518771
	    </td>
        
      </tr>
      <tr class="sec_tr">
        <th scope="row" >2nd Saturday</th>
        <td >7:00 pm</td>
        <td ><span><h3>Choice Retreat House</h3></span>
47 Jurong West Street 42, Singapore 649368
</td>
       
      </tr>
      <tr class="third_tr">
        <th scope="row" >3rd Saturday</th>
        <td >7:30 pm</td>
        <td ><span><h3>Church of St Anthony</h3></span>
                  25 Woodlands Ave 1, Singapore 739064
        </td>
       
      </tr>
      <tr class="fourth_tr">
        <th scope="row" >4th Saturday</th>
        <td >7:30 pm</td>
        <td><span><h3>St Anne's Church</h3></span>
                66 Sengkang E Way, Singapore 548593
        </td>
       
      </tr>
      <tr class="fifth_tr">
        <th scope="row" >5th Saturday</th>
        <td >7:30 pm</td>
        <td ><span><h3>Church of St Anthony</h3></span>
           25 Woodlands Ave 1, Singapore 739064
        </td>
       
      </tr>
    </tbody>
    <!--Table body-->
  </table>
  <!--Table-->
</div>

			</div>
			<div>
				
			</div>
		</div>
	</section>
	<!--================End Latest Blog Area =================-->

		<!--================Latest Blog Area =================-->
	<section class="latest_blog_area  color-bg" style="margin-bottom: 12px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="text-uppercase"></p>
						<div class="home_title">
							Upcoming Events
						</div>
						<p>
							Inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
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
	</section>
	<!--================End Latest Blog Area =================-->




@endsection

@push("scripts")
<script>
	$('.carousel').carousel({
	interval: 2000
	})
</script>
@endpush