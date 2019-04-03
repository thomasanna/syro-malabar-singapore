@extends('layouts.template')

@section('content')
	
	<!--================About Area =================-->
	<section class="blog_area latest_blog_area section_gap color-bg">
        <div class="container">
        	<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<div class="top-part">
							<p></p>
						</div>
						<h3>
							Events
						</h3>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_left_sidebar">
                    	@foreach($events as $data)
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <ul class="blog_meta list">
                                        <li><a href="#">{{date('F jS, Y', strtotime($data->eventDate))}}<i class="fa fa-calendar-o" aria-hidden="true"></i></a>
                                        </li> <li><a href="#">{{date("g:i a", strtotime($data->eventTime))}}<i class="fa fa-calendar-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#">{{$data->location}}<i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{asset('storage/app/uploads/events/'.$data->eventImage)}}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>{{$data->eventName}}</h2>
                                        </a>
                                        <p>{{$data->eventDescription}}</p>
                                       <!--  <a href="single-blog.html" class="white_bg_btn">View More</a> -->
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                       
                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
                
            </div>
        </div>
    </section>
	<!--================End About Area =================-->


@endsection