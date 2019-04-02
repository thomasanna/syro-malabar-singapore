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
							Catechism Books - {{$class}}
						</h3>
					</div>

						<div class="bottom_part">
							<p>
								
	<section class="button-area">
		<div class="container border-top-generic">
			<h3 class="text-heading title_color">Download lessons...</h3>
			<div class="button-group-area">
				<!-- <a href="#" class="genric-btn default">Default</a> -->
				@if(count($catechismBooksData) > 0)
					@foreach($catechismBooksData as $data)
					<a href="{{asset('storage/app/uploads/catechism/'.$data['class'].'/'.$data['lesson'].'/'.$data['book'])}}" class="genric-btn primary">{{$data['lesson']}}</a>
					@endforeach
				@else
				No files.
				@endif
				<!-- <a href="#" class="genric-btn success">Success</a>
				<a href="#" class="genric-btn info">Info</a>
				<a href="#" class="genric-btn warning">Warning</a>
				<a href="#" class="genric-btn danger">Danger</a>
				<a href="#" class="genric-btn link">Link</a>
				<a href="#" class="genric-btn disable">Disable</a> -->
			</div>
			

		</div>
	</section>
							</p>
						</div>
						<!-- <a href="#" class="main_btn mt-45">Request Custom Price</a> -->
					
				</div>
			</div>
			
		</div>
	</section>
	<!--================End About Area =================-->


@endsection