@extends('layouts.template')

@section('content')
	
	<!--================About Area =================-->
	<section class="latest_blog_area section_gap_inner_pg color-bg">
		<div class="container">
			<div class="row ">
				<div class="col-lg-12 ">
					<div class="main_title">
						<div class="top-part">
							<p></p>

                             @include('admin.flash-message')
						</div>
						<h3>
							Marriage NOC request form
						</h3>
                        </div>
						<div class="bottom_part">
							<p style="text-align:center"></p>
					    <form class="row contact_form noc-form" action="{{route('noc-save')}}" method="post" id="contactForm" >
					    	{!! csrf_field() !!}
                        <div class="col-md-12">
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Name<span class="required"> *</span></label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>

                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Baptism Name <span class="required"> *</span></label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="baptism_name" name="baptism_name" placeholder="Enter your Baptism Name" required>
                                </div>
                            </div>

                             <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Contact Number <span class="required"> *</span></label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter your contact number in Singapore" required>
                                </div>
                            </div>
                             <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">NRIC/FIN Number <span class="required"> *</span></label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="nric_fin" name="nric_fin" placeholder="Enter your NRIC/FIN Number" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Sex <span class="required"> *</span></label></div>
                                <div class="col-12 col-md-9">
                              
                                <select class="form-control" name="sex" id="sex" placeholder="Enter your sex" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Marital Status <span class="required"> *</span></label></div>
                                <div class="col-12 col-md-9">
                                <select class="form-control" name="marital_status" id="marital_status" placeholder="Enter your marital status " required>
                                    <option value="Unmarried ">Unmarried </option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced ">Divorced </option>
                                    <option value="Widow/Widower ">Widow/Widower </option>
                                </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Father Name</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter your father name" >
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Mother Name</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Enter your mother name" >
                                </div>
                            </div>
                             <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Address in Singapore</label></div>
                                <div class="col-12 col-md-9">
                                <textarea class="form-control address_in_singapore"  name="address_in_singapore" id="address_in_singapore" placeholder="Enter your address in Singapore "></textarea>                               
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Work Place Address</label></div>
                                <div class="col-12 col-md-9">
                                <textarea class="form-control work_place_address"  name="work_place_address" id="work_place_address" placeholder="Enter your work place address "></textarea>                               
                                </div>
                            </div>
                             <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Designation / Job Title</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter your designation" >
                                </div>
                            </div>
                             <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Date of arrival in Singapore</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="date_arrival_singapore" name="date_arrival_singapore" current-time="{{date('Y-m-d')}}" placeholder="DD-MM-YYYY"  >
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Church in Singapore you visit</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="church_in_singapore" name="church_in_singapore" placeholder="Enter your Church in Singapore you visit" >
                                </div>
                            </div>
                                                    
                            
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Address in India</label></div>
                            	<div class="col-12 col-md-9">
                                <textarea class="form-control message"  name="address_in_india" id="address_in_india" placeholder="Enter Address in India " ></textarea>		
                               
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Parish Vicar Name</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="parish_vicar_name" name="parish_vicar_name" placeholder="Enter Parish Vicar Name" >
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Parish Address</label></div>
                                <div class="col-12 col-md-9">
                                <textarea class="form-control message"  name="parish_address" id="parish_address" placeholder="Enter Parish Address " ></textarea>        
                               
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Would-be details (if available)</label></div>
                                <div class="col-12 col-md-9">
                                <textarea class="form-control message"  name="would_be_details" id="would_be_details" placeholder="Enter Would be details (if available)" ></textarea>        
                               
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Reference Person 1 (in Singapore) Contact Number <span class="required"> *</span></label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="reference_person_1" name="reference_person_1" placeholder="Enter Reference Person 1 (in Singapore) Contact Number" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Reference Person 2 (in Singapore) Contact Number <span class="required"> *</span></label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="reference_person_2" name="reference_person_2" placeholder="Enter Reference Person 2 (in Singapore) Contact Number" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3 form_label"><label for="select" class="form-control-label">Reference Person 3 (in Singapore) Contact Number</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="reference_person_3" name="reference_person_3" placeholder="Enter Reference Person 3 (in Singapore) Contact Number" >
                                </div>
                            </div>
                             <div class="col-md-12 text-centre" style="padding-bottom: 12px;">
                            <span class="getsendOtpUrl" data-url = "{{route('send-otp')}}" token="{{ csrf_token() }}" type="noc"></span>
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
                            <button type="submit" value="submit" class="submit_btn">Submit</button>
                        </div>
                    </form>
							
						</div>
						<!-- <a href="#" class="main_btn mt-45">Request Custom Price</a> -->
					
				</div>
			</div>
			
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


var dateNow = jQuery("input[name=date_arrival_singapore]").attr('current-time');
    jQuery('#date_arrival_singapore').datetimepicker({
    format: 'DD-MM-YYYY',
 
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