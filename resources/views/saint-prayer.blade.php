@extends('layouts.template')

@section('content')
	
	<!--================About Area =================-->
	<section class="latest_blog_area section_gap color-bg">
		<div class="container novena">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<div class="top-part">
							<p></p>
						</div>
				@if($prayer)	
				@if($prayer->lang == 'Malayalam' && $prayer->content !="")	
				@if($prayer->lang == 'Malayalam' && $prayer->file !="")
				<a href="{{asset('storage/app/uploads/novena/'.$prayer->file)}}" class="genric-btn primary" title="Download"><i class="fa fa-download" aria-hidden="true"></i></a>
				@endif
				@endif
				<a class="{{$prayer->lang == 'Malayalam' ? 'active' : ''}}" href="{{route('saint-prayer' , ['name' => $prayer->saint_name, 'lang' => 'Malayalam'])}}">Prayer in Malayalam</a> |  
			    @if($prayer->lang == 'English' && $prayer->content !="")
				<a class="{{$prayer->lang == 'English' ? 'active' : ''}}" href="{{route('saint-prayer' , ['name' => $prayer->saint_name, 'lang' => 'English'])}}">   Prayer in English</a>
				@if($prayer->lang == 'English' && $prayer->file !="")
				<a href="{{asset('storage/app/uploads/novena/'.$prayer->file)}}" class="genric-btn primary" title="Download"><i class="fa fa-download" aria-hidden="true" title="Download"></i></a>
				@endif
				@endif
				@endif



						</div>
					</div>
				</div>
				<div class="bottom_part novena">





								<?php 

								if($prayer):

								  echo $prayer->content;

								else:
                                   echo  "No data Available";
                                   echo  "<br>";
                                   echo  "<br>";
                                   echo  "<br>";
                                   echo  "<br>";
                                   echo  "<br>";
                                   echo  "<br>";
                                   echo  "<br>";
                               
                          

                                endif;   
								  ?>
								  

							
						</div>					
				
			
			
		</div>
	</section>
	<!--================End About Area =================-->


@endsection