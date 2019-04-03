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
						</div>
						<h3>
							History
						</h3>
						</div>
					</div>
				</div>
				<div class="bottom_part">
							<p>


								<?php 

								if($data):

								  echo $data->content;

								else:
                                   echo  "No data";

                                endif;   
								  ?>
								  

							</p>
						</div>
						<!-- <a href="#" class="main_btn mt-45">Request Custom Price</a> -->
					
				
			
			
		</div>
	</section>
	<!--================End About Area =================-->


@endsection