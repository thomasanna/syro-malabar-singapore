@extends('layouts.template')

@section('content')
	
	<!--================About Area =================-->
	<section class="latest_blog_area  color-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<div class="top-part">
							<p></p>
                             @include('admin.flash-message')
						</div>
						<h3>
							Feedback
						</h3>
                        <br>

                    </div>
						<div class="bottom_part">
							<p>
					    <form class="row contact_form" action="{{route('save-feedback')}}" method="post" id="contactForm" >
					    	{!! csrf_field() !!}
                        <div class="col-md-12">
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Name</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>
                             <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Contact Number</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter your contact number in Singapore" required>
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Subject</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject" required>
                                </div>
                            </div>                           
                            
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Your feedback</label></div>
                            	<div class="col-12 col-md-9">
                                <textarea class="form-control message"  name="message" id="message" placeholder="Enter your feedback " required></textarea>		
                               
                                </div>
                            </div>

                           
                        </div>

                        <div class="col-md-12 text-centre">
                            <button type="submit" value="submit" class="submit_btn">Send</button>
                        </div>
                    </form>
							</p>
						</div>
						<!-- <a href="#" class="main_btn mt-45">Request Custom Price</a> -->
					</div>
				
			</div>
			
		</div>
	</section>
	<!--================End About Area =================-->
    @if(count($feedback) >0)
    <section class="section_gap">   
       <div class="container">
        <div class="row text-center">
                <h1 class="heading-title"> Your feedback </h1>
            </div>

                <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        @foreach($feedback as $data)
                        <div class="testimonial">
                            <div><h2>{{$data->subject}}</h2></div>
                            <p class="description">

                                {{$data->message}}
                            </p>
                           <!--  <div class="pic">
                                <img src="images/Affluent-Women-Mailing-Lists.jpg" alt=""/>
                            </div> -->
                            <div class="testimonial-prof">
                                <h4>{{$data->name}}</h4>
                                <small>Web Developer</small>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
       </div>

    </section>
    @endif

@endsection

@push('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="{{asset('public/css/testimonial-carousal.css')}}">

@endpush

@push('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script>
jQuery(document).ready(function(){
    jQuery("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[1000,2],
        itemsTablet:[767,1],
        pagination: false,
        navigation:true,
        navigationText:["",""],
        autoPlay:false
    });
});
    </script>
@endpush