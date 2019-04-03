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
							St Thomas The Apostle
						</h3>
						</div>
						</div>
						</div>
						<div class="bottom_part">
							<p>
								@if($data)

								  {{$data->content}}

								@else								 
								  The Syro-Malabar Catholic Church or Church of Malabar Syrian Catholics is an Eastern Catholic Major Archiepiscopal Church based in Kerala, India. It is a sui iuris particular church in full communion with the Pope and the worldwide Catholic Church, with self-governance under the Code of Canons of the Eastern Churches

								@endif
							</p>
						</div>

		</div>
	</section>
	<!--================End About Area =================-->


@endsection