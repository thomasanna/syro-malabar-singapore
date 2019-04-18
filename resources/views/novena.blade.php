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
				@if($novena->lang == 'Malayalam' && $novena->file !="")
				<a href="{{asset('storage/app/uploads/novena/'.$novena->file)}}" class="genric-btn primary" title="Download"><i class="fa fa-download" aria-hidden="true"></i></a>
				@endif
				<a class="{{$novena->lang == 'Malayalam' ? 'active' : ''}}" href="{{route('novena' , ['name' => 'St. Alphonsa Muttathupadathu', 'lang' => 'Malayalam'])}}">Novena in Malayalam</a> |  
			 
				<a class="{{$novena->lang == 'English' ? 'active' : ''}}" href="{{route('novena' , ['name' => 'St. Alphonsa Muttathupadathu', 'lang' => 'English'])}}">   Novena in English</a>
				@if($novena->lang == 'English' && $novena->file !="")
				<a href="{{asset('storage/app/uploads/novena/'.$novena->file)}}" class="genric-btn primary" title="Download"><i class="fa fa-download" aria-hidden="true" title="Download"></i></a>
				@endif



						</div>
					</div>
				</div>
				<div class="bottom_part ">





								<?php 

								if($novena):

								  echo $novena->content;

								else:
                                   echo  "No data";
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