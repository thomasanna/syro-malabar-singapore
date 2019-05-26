@extends('layouts.template')

@section('content')

  <!-- Modal -->
  <div class="modal fade mapModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 modal_body_content">
              <p></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 modal_body_map">
              <div class="location-map" id="location-map">
                <div style="width: 600px; height: 400px;" id="map_canvas"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 modal_body_end">
              <div class="sect1" style="display:none">
                <p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><strong><span style="font-size: 18.0pt; font-family: 'Times New Roman', serif; color: #2f5496;">Church of Devine Mercy</span></strong></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif; color: #2f5496;">19 Pasir Ris Street 72, Singapore 518771</span></p>
<p style="margin: 6pt 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt;">Nearest MRT: Pasir Ris</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt;">Bus 58, 88, 359, 518A, 518</span></p>
<p style="margin: 6pt 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt;">Contact Person: Mr. Binu</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt;">HP: </span><span style="font-size: 12.0pt;">90888753</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt;">&nbsp;</span></p>

              </div>
              <div class="sect2" style="display:none">
                <p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><strong><span style="font-size: 18.0pt; font-family: 'Times New Roman', serif; color: #c45911;">Choice Retreat House</span></strong></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif; color: #c45911;">47 Jurong West Street 42, Singapore 649368</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><strong><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">Bus 49 from Opp. Lakeside MRT / Bus 334 from Jurong East Interchange</span></strong></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><strong><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">Alight at 1st bus stop after bus turn into Jurong West Street-42</span></strong></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center">&nbsp;</p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">Contact Person: Varghese Vadakkan</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">HP:</span><span style="font-size: 14.0pt;"> 91411241</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt;">&nbsp;</span></p>


              </div>

              <div class="sect3" style="display:none">
                <p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><strong><span style="font-size: 18.0pt; font-family: 'Times New Roman', serif; color: #538135;">Church of St Anthony</span></strong></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif; color: #538135;">25 Woodlands Ave 1, Singapore 739064</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">Nearest MRT: Marsiling </span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">Bus 912 / 912B from Woodlands Interchange</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt;">Contact Person: Tonia</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt;">HP: </span><span style="font-size: 14.0pt;">93864186</span></p>

              </div>
              <div class="sect4" style="display:none">
                <p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><strong><span style="font-size: 18.0pt; font-family: 'Times New Roman', serif; color: #bf8f00;">St Anne's Church</span></strong></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif; color: #bf8f00;">66 Sengkang E Way, Singapore 548593</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><a name="_GoBack"></a><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Helvetica, sans-serif; color: #1c1e21; background: white;">Nearest MRT: Sengkang </span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Helvetica, sans-serif; color: #1c1e21; background: white;">Bus: 27,88,163,82,161</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">Contact Person: Jeeson</span></p>
<p style="margin: 0cm 0cm 0.0001pt; text-align: center; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif;" align="center"><span style="font-size: 12.0pt; font-family: Arial, sans-serif;">HP: </span><span style="font-size: 12.0pt;">81888432</span></p>


              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
	
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
      <img class="d-block w-100" src="{{asset('public/img/banner/home-banner1.jpg')}}" alt="First slide">
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
        <th></th>
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
	   <!--  <td><span id="mapShow">More Details</span></td> -->
	    <td> <button type="button" class="btn btn-primary mapShow" data-toggle="modal" data-target="#myModal" 
        data-lat='1.380194' data-lng='103.935991' data-sect ='1'>
      More Details
    </button></td>
        
      </tr>
      <tr class="sec_tr">
        <th scope="row" >2nd Saturday</th>
        <td >7:00 pm</td>
        <td ><span><h3>Choice Retreat House</h3></span>
47 Jurong West Street 42, Singapore 649368
</td>
<td> <button type="button" class="btn btn-primary mapShow" data-toggle="modal" data-target="#myModal" 
        data-lat='1.352015' data-lng='103.7144722' data-sect ='2'>
      More Details
    </button></td>
       
      </tr>
      <tr class="third_tr">
        <th scope="row" >3rd Saturday</th>
        <td >7:30 pm</td>
        <td ><span><h3>Church of St Anthony</h3></span>
                  25 Woodlands Ave 1, Singapore 739064
        </td>
        <td> <button type="button" class="btn btn-primary mapShow" data-toggle="modal" data-target="#myModal" 
        data-lat='1.4295946' data-lng='103.7774012' data-sect ='3'>
      More Details
    </button></td>
       
      </tr>
      <tr class="fourth_tr">
        <th scope="row" >4th Saturday</th>
        <td >7:30 pm</td>
        <td><span><h3>St Anne's Church</h3></span>
                66 Sengkang E Way, Singapore 548593
        </td>
         <td> <button type="button" class="btn btn-primary mapShow" data-toggle="modal" data-target="#myModal" 
        data-lat='1.3915334' data-lng='103.8996073' data-sect ='4'>
      More Details
    </button></td>
       
      </tr>
      <tr class="fifth_tr">
        <th scope="row" >5th Saturday</th>
        <td >7:30 pm</td>
        <td ><span><h3>Church of St Anthony</h3></span>
           25 Woodlands Ave 1, Singapore 739064
        </td>
         <td> <button type="button" class="btn btn-primary mapShow" data-toggle="modal" data-target="#myModal" 
        data-lat='1.4295946' data-lng='103.7774012' data-sect ='3'>
      More Details
    </button></td>
       
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
    @if(count($events)>0)
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
  @endif
	<!--================End Latest Blog Area =================-->



@endsection

@push("scripts")

<script>
	$('.carousel').carousel({
	interval: 5000
	})

</script>
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBwK60iYbpb18s05KCGEqeGP2TIMpn4HSg"></script>

<script type="text/javascript">



  var map = null;
  var myMarker;
  var myLatlng;

  function initializeGMap(lat, lng) {
    myLatlng = new google.maps.LatLng(lat, lng);

    var myOptions = {
      zoom: 12,
      zoomControl: true,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    myMarker = new google.maps.Marker({
      position: myLatlng
    });
    myMarker.setMap(map);
  }

  // Re-init map before show modal
  $('#myModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    initializeGMap(button.data('lat'), button.data('lng'));
    $("#location-map").css("width", "100%");
    $("#map_canvas").css("width", "100%");
  });

  // Trigger map resize event after modal shown
  $('#myModal').on('shown.bs.modal', function() {
    google.maps.event.trigger(map, "resize");
    map.setCenter(myLatlng);
  });



       $(".mapShow").click(function (event) {
        var button = $(event.relatedTarget);
        var sect   = $(this).attr("data-sect");
		    initializeGMap(button.data('lat'), button.data('lng'));

		    $("#location-map").css("width", "100%");
		    $("#map_canvas").css("width", "100%");
		    google.maps.event.trigger(map, "resize");
        map.setCenter(myLatlng);
        
        if(sect == 1){
          $('.sect1').css('display','block');
          $('.sect3').css('display','none');
          $('.sect2').css('display','none');
          $('.sect4').css('display','none');
        } 
        else if(sect == 2){
          $('.sect2').css('display','block');
          $('.sect3').css('display','none');
          $('.sect1').css('display','none');
          $('.sect4').css('display','none');
        }
         else if(sect == 3){
          $('.sect3').css('display','block');
          $('.sect2').css('display','none');
          $('.sect1').css('display','none');
          $('.sect4').css('display','none');
        } 
        else if(sect == 4){
          $('.sect4').css('display','block');
          $('.sect3').css('display','none');
          $('.sect2').css('display','none');
          $('.sect1').css('display','none');
        }
       });

</script>
@endpush