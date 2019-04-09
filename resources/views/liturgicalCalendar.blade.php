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
							Liturgical Calendar
						</h3>
						</div>
				</div>
			</div>
						<div class="bottom_part">
							<p>
								The Syro-Malabar Catholic Church or Church of Malabar Syrian Catholics is an Eastern Catholic Major Archiepiscopal Church based in Kerala, India. It is a sui iuris particular church in full communion with the Pope and the worldwide Catholic Church, with self-governance under the Code of Canons of the Eastern Churches

								<!-- <section class="button-area">
		<div class="container border-top-generic">
			<h3 class="text-heading title_color">Download Calender...</h3>
			<div class="button-group-area">

				@if(count($data) > 0)
					@foreach($data as $dt)
					<a href="{{asset('storage/app/uploads/calender/'.$dt['file'])}}" class="genric-btn primary">{{$dt['lang']}}</a>
					@endforeach
				@else
				No files.
				@endif

			</div>
			

		</div>
	</section> -->
	<h3 class="text-heading title_color">Download Calender...</h3>
	           @if(count($data) > 0)
	           <div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">Year</div>
							<div class="country">Calender</div>
						</div>
						@foreach($data as $dt)
						<div class="table-row">
							<div class="serial">{{$dt['year']}}</div>
							<div class="country"> <a target="_blank" href="{{asset('storage/app/uploads/calender/'.$dt['file'])}}" class="genric-btn primary">{{$dt['lang']}}</a></div>

						</div>
						@endforeach
					
					</div>
				</div>
				@else
				No files.
				@endif
							


			</p>
						</div>
						<!-- <a href="#" class="main_btn mt-45">Request Custom Price</a> -->
					
		</div>
	</section>
	<!--================End About Area =================-->


@endsection\