@extends('layouts.template')

@section('content')
	
	<!--================About Area =================-->
	<section class="latest_blog_area  section_gap_inner_pg color-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<div class="top-part">
							@include('admin.flash-message')
						</div>
						<h3>
							House Blessing/ Visit Online Request

						</h3>
					
						</div>
						</div>
			       </div>
						<div class="bottom_part">
							<p>
							<span class="required">*</span>	Strongly advise to contact our Spiritual director before sent request as the date and time of request need to be convenient for priest and the family members. Otherwise not able to confirm the date & time of house visit you may request. Thank you.
							</p>

						 <form class="row contact_form" action="{{route('house-blessing-request.save')}}" method="post" id="contactForm" >
					    	{!! csrf_field() !!}
                        <div class="col-md-12">
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Name <span class="required"> *</span></label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>

                             <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Contact Number <span class="required"> *</span></label></div>
                            	<div class="col-12 col-md-9">
                                <span class="mobcode">+65</span>    
                                <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter your contact number in Singapore" required style="padding-left: 39px;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Date for House Blessing <span class="required"> *</span></label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="house_blessing_date" name="house_blessing_date" current-time="{{date('Y-m-d')}}" placeholder="DD-MM-YYYY" required>
                                </div>

                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Time for House Blessing <span class="required"> *</span></label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="house_blessing_time" name="house_blessing_time" current-time="{{date('H:i:s')}}" placeholder="H:i:s" required>
                                </div>

                            </div> 

                                                        
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Address <span class="required"> *</span></label></div>
                            	<div class="col-12 col-md-9">
                                <textarea class="form-control message"  name="address" id="address" placeholder="Enter your address " required></textarea>		
                               
                                </div>
                            </div>

                            <div class="col-md-12 text-centre" style="padding-bottom: 12px;">
                            <span class="getsendOtpUrl" data-url = "{{route('send-otp')}}" token="{{ csrf_token() }}" type="house-blessing"></span>
                            <button type="button" class="verify genric-btn primary">Send Otp</button>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Enter otp number <span class="required"> *</span></label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter your otp" required>
                                </div>
                            </div>

                           
                        </div>

                        <div class="col-md-12 text-centre">
                            <button type="submit" value="submit" class="submit_btn">Send</button>
                        </div>
                    </form>
						</div>
						<!-- <a href="#" class="main_btn mt-45">Request Custom Price</a> -->
					
				
			
		</div>
	</section>
	<!--================End About Area =================-->


@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap-datetimepicker.min.css') }}">

@endpush

@push('scripts')

<script src="{{asset('public/admin/js/moment.min.js')}}"></script>

<script src="{{asset('public/admin/js/bootstrap-datetimepicker.min.js')}}"></script>

<script>

    var dateNow = jQuery("input[name=house_blessing_date]").attr('current-time');
    jQuery('#house_blessing_date').datetimepicker({
    format: 'DD-MM-YYYY',
 
});
    var dateNow1 = jQuery("input[name=house_blessing_time]").attr('current-time');
    jQuery('#house_blessing_time').datetimepicker({
    format: 'H:s',
});


jQuery('body').on('click', '.verify', function() {

    var action = jQuery(".getsendOtpUrl").attr('data-url');
    var token  = jQuery(".getsendOtpUrl").attr('token');
    var type  = jQuery(".getsendOtpUrl").attr('type');
    var contact_number=jQuery('#contact_number').val(); 
    if(contact_number != ""){
        jQuery.ajax({
        type: 'POST',
        async: false,
        url: action,
        dataType: 'json',
        data: {
         "_token" : token,
         "data": {
             "contact_number":contact_number,
             "type":type
         }
       },
        
        success: function(response) {
           alert(response.message)
        }
     });

    }

    else{
        jQuery('.error_div .err_msg').html('Please enter contact number'); 
        jQuery('.error_div').css('display','block');
    }

});


</script>
@endpush