@extends('layouts.template')

@section('content')
	
	<!--================About Area =================-->
	<section class="latest_blog_area section_gap color-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<div class="top-part">
							<p></p>
                            <div class="col-sm-12 success_div" style="display:none">
                              <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                 <span class="badge badge-pill badge-success">Success</span> You have been successfully registered on the syro-malabar catholics singapore
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                </button>
                              </div>
                             </div>
    					</div>
						<h3>
							Registration <br><br><br>
						</h3>
						<div class="bottom_part">
							<p>
                            <span class="getRegistrationSaveUrl" data-url = "{{route('save-registration')}}" token="{{ csrf_token() }}"></span>
                            <form class="row contact_form"  method="post" id="contactForm" novalidate="novalidate">
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
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">NRIC/FIN</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="nric_fin" name="nric_fin" placeholder="Enter your NRIC/FIN">
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">e-mail</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your e-mail">
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Age</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="age" name="age" placeholder="Enter your age">
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Sex</label></div>
                            	<div class="col-12 col-md-9">
                              
                                <select class="form-control" name="sex" id="sex" placeholder="Enter your sex">
                                	<option value="Male">Male</option>
                                	<option value="Female">Female</option>
                                </select>
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Marital Status</label></div>
                            	<div class="col-12 col-md-9">
                                <select class="form-control" name="marital_status" id="marital_status" placeholder="Enter your marital status ">
                                	<option value="Single">Single</option>
                                	<option value="Married">Married</option>
                                </select>
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Address in Singapore</label></div>
                            	<div class="col-12 col-md-9">
                            	<textarea class="form-control address_in_singapore"  name="address_in_singapore" id="address_in_singapore" placeholder="Enter your address in Singapore "></textarea>                               
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Address in India</label></div>
                            	<div class="col-12 col-md-9">
                                <textarea class="form-control address_in_india"  name="address_in_india" id="address_in_india" placeholder="Enter your address in India "></textarea>		
                               
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Parish in India</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="parish_in_india" name="parish_in_india" placeholder="Enter your parish in India ">
                                </div>
                            </div>
                           
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Diocese in India</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="diocese_in_india" name="diocese_in_india" placeholder="Enter your diocese in India ">
                                </div>
                            </div>
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Family living in Singapore</label></div>
                            	<div class="col-12 col-md-9">
                                 <select class="form-control singapore_living" name="singapore_living" id="singapore_living" placeholder="Select">
                                 	<option value="">Select</option>
                                	<option value="1">Yes</option>
                                	<option value="0">No</option>
                                </select>
                                </div>
                            </div>
                            <div class="family_details_div"> 

                            	<div class="col col-md-3 fd_div" style="display:none"><label for="select" class=" form-control-label">Family Details :-</label></div>
                                <div class="family" family-count="0"></div>

                            </div>
                         
                           
                        </div>

                        <div class="col-md-6 text-right2">
                            <button type="submit" value="submit" class="submit_btn">Submit</button>
                        </div>
                    </form>
								  

							</p>
						</div>
						<!-- <a href="#" class="main_btn mt-45">Request Custom Price</a> -->
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!--================End About Area =================-->


@endsection

@push('scripts')

<script src="{{asset('public/js/registration.js')}}"></script>

@endpush