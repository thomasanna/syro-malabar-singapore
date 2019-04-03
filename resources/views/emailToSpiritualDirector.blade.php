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

                             @include('admin.flash-message')
						</div>
						<h3>
							Send E-Mail to Spiritual Director <br><br><br>
						</h3>
						<div class="bottom_part">
							<p>
					    <form class="row contact_form" action="{{route('send-email-spiritual-director')}}" method="post" id="contactForm" >
					    	{!! csrf_field() !!}
                        <div class="col-md-12">
                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Name</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>

                            <div class="row form-group">
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">e-mail</label></div>
                            	<div class="col-12 col-md-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your e-mail" required>
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
                            	<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Message</label></div>
                            	<div class="col-12 col-md-9">
                                <textarea class="form-control message"  name="message" id="message" placeholder="Enter your message " required></textarea>		
                               
                                </div>
                            </div>

                           
                        </div>

                        <div class="col-md-6 text-right2">
                            <button type="submit" value="submit" class="submit_btn">Send</button>
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