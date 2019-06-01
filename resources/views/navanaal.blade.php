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
				@if($navanaal)	
				@if($navanaal->lang == 'Malayalam' && $navanaal->content !="")	
				@if($navanaal->lang == 'Malayalam' && $navanaal->file !="")
				<a href="{{asset('storage/app/uploads/novena/'.$navanaal->file)}}" class="genric-btn primary" title="Download"><i class="fa fa-download" aria-hidden="true"></i></a>
				@endif
				@endif
				<a class="{{$navanaal->lang == 'Malayalam' ? 'active' : ''}}" href="{{route('navanaal' , ['name' => $navanaal->saint_name, 'lang' => 'Malayalam'])}}">Navanaal in Malayalam</a> |  
			    @if($navanaal->lang == 'English' && $navanaal->content !="")
				<a class="{{$navanaal->lang == 'English' ? 'active' : ''}}" href="{{route('navanaal' , ['name' => $navanaal->saint_name, 'lang' => 'English'])}}">   Navanaal in English</a>
				@if($navanaal->lang == 'English' && $navanaal->file !="")
				<a href="{{asset('storage/app/uploads/novena/'.$navanaal->file)}}" class="genric-btn primary" title="Download"><i class="fa fa-download" aria-hidden="true" title="Download"></i></a>
				@endif
				@endif
				@endif



						</div>
					</div>
				</div>
				<div class="bottom_part novena">





								<?php 

								if($navanaal):

								  echo $navanaal->content;

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