<!doctype html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="public/img/favicon.png" type="image/png">
	<title>Syro-Malabar Catholics</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/nice-select.css')}}">

	<!-- <link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/basstyle.public/css/jquery-ui.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/public/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-public/css/animate.css">
	<link rel="stylesheet" href="vendors/popup/magnific-popup.css"> -->
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('public/css/main-style.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/mystyle.css')}}">
	<!-- <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet"> -->
	<link rel="stylesheet" href="{{asset('public/fonts/ml-ttkarthika.ttf')}}" rel="stylesheet">

	<!-- <link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/responsive.css"> -->
</head>

<!-- <body oncontextmenu="return false;"> -->
<body>
	<a href="#" id="scroll" style="display: none;"><span></span></a>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0" style="cursor:pointer">
			<div class="container">
				<!-- <div class="float-left">
					<ul class="list header_social">
						<li><a href="#">Contact Us +65 97106920</a></li>
					</ul>
				</div> -->
				<!-- <div class="float-right">
					<select>
						<option value="1">USD</option>
						<option value="1">EUR</option>
						<option value="1">AOA</option>
						<option value="1">AUD</option>
					</select>
					<select>
						<option value="1">ENG</option>
						<option value="1">FRA</option>
						<option value="1">BAN</option>
					</select>
				</div> -->
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <div class="container">
			  <!-- <a class="navbar-brand logo_h" href="{{ asset('/') }}"><img src="public/img/banner/smcs_logo.jpg" alt="" style="width: 125px;
    height: 36px;"></a> -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

			  <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			    <ul class="nav navbar-nav menu_nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="{{ asset('/') }}">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          About
			        </a>
			        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <li><a class="dropdown-item" href="{{route('History')}}">SMCS History</a></li>
			          <li><a class="dropdown-item" href="{{route('bharavahikal')}}">SMCS Bharavahikal</a></li>
			          <li><a class="dropdown-item" href="{{route('St-Thomas-The-Apostle')}}" >St. Thomas The Apostle</a></li>
			          <li><a class="dropdown-item" href="http://www.syromalabarchurch.in/" target="_blank">Syro-Malabar Church</a></li>
			          <li><a class="dropdown-item" href="{{route('saints-of-smc')}}">Saints of SMC </a></li>

			         
                      <li><a class="dropdown-item" href="https://www.catholic.sg/" target="_blank">Singapore Diocese</a></li>
                      <li><a class="dropdown-item" href="{{route('registration')}}">Register Yourself</a></li>
			        </ul>
			      </li> 

			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Activities
			        </a>
			        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			        	<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Activities</a>
			        	<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			   
			              <li><a class="dropdown-item" href="{{route('Activities-Year1' , 2010)}}">2010</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1' ,2011)}}">2011</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1' ,2012)}}">2012</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1',2013)}}">2013</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1',2014)}}">2014</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1',2015)}}">2015</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1',2016)}}">2016</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1',2017)}}">2017</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1',2018)}}">2018</a></li>
			              <li><a class="dropdown-item" href="{{route('Activities-Year1',2019)}}">2019</a></li>
                        </ul>
			            </li>
			       </ul>
			      </li>  

			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Departments
			        </a>
			        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Family Apostolate </a>
			            <ul class="dropdown-menu">
			              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Appointments</a>                 
	                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <li class="dropdown-submenu"><a class="dropdown-item" href="{{route('house-blessing-request')}}">House blessing request </a></li>
					          <li class="dropdown-submenu"><a class="dropdown-item" href="{{route('Counselling')}}">Spiritual support and Guidance  </a></li>
				          </ul>                   
			              </li>
			              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{route('Marriage-Preparation')}}">Marriage Preparation</a>

                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <li class="dropdown-submenu"><a class="dropdown-item" href="{{route('apply-noc')}}">Apply NOC </a></li>
					          <li class="dropdown-submenu"><a class="dropdown-item" href="#">Available MPC Details </a></li>
				          </ul> 


			              </li>
			            </ul>
			          </li>



			          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Kudumba Koottayma</a>
			            <ul class="dropdown-menu">
			              <li><a class="dropdown-item" href="{{route('Family-Unit1')}}">Family Unit 1</a></li>
			              <li><a class="dropdown-item" href="{{route('Family-Unit2')}}">Family Unit 2</a></li>
			            </ul>
			          </li>
			          <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Faith Formation</a>
			            <ul class="dropdown-menu">
			              <li><a class="dropdown-item" href="{{route('Catechism')}}">Catechism</a></li>
			              <li><a class="dropdown-item" href="{{route('First-Holy-Communion')}}">First Holy Communion</a></li>
			            </ul>
			          </li> -->
                      <li class="dropdown-submenu"><a class="dropdown-item" href="{{route('Youth-Children')}}">Youth & Children</a></li>
                      <li class="dropdown-submenu"><a class="dropdown-item" href="{{route('Women')}}">Women</a></li>

			        </ul>
			      </li>

			      <!-- <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Associations
			        </a>
			        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <li><a class="dropdown-item" href="{{route('Women')}}">Women</a></li>
			          <li><a class="dropdown-item" href="{{route('Youth-Children')}}">Youth & Children</a></li>
			         </ul>
			      </li> -->

			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Downloads
			        </a>
			        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <li><a class="dropdown-item" href="{{route('Liturgical-Calendar')}}">Liturgical Calendar</a></li>
			          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Catechism Books</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			   
			              <li><a class="dropdown-item" href="{{route('Catechism-Books' , 'Class 1')}}">Class 1</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 2')}}">Class 2</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 3')}}">Class 3</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 4')}}">Class 4</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 5')}}">Class 5</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 6')}}">Class 6</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 7')}}">Class 7</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 8')}}">Class 8</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 9')}}">Class 9</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 10')}}">Class 10</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 11')}}">Class 11</a></li>
			              <li><a class="dropdown-item" href="{{route('Catechism-Books','Class 12')}}">Class 12</a></li>

			          
			       </ul>

			          </li>
			          <li><a class="dropdown-item" href="{{route('Forms')}}">Forms</a></li>
			          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Reports</a>
			            <ul class="dropdown-menu">
			              <li><a class="dropdown-item" href="{{route('Reports-Year1')}}">2018</a></li>
			              <li><a class="dropdown-item" href="{{route('Reports-Year2')}}">2019</a></li>
			            </ul>
			          </li>
			          <li><a class="dropdown-item" href="{{route('prayers')}}">Prayers</a></li>
			         </ul>
			      </li> 

			       <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="{{route('Forms')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Contact Us
			        </a>
			        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <li><a class="dropdown-item" href="{{route('E-Mail-to-Spiritual-Director')}}">Send E-Mail to Spiritual Director</a></li>
			          <li><a class="dropdown-item" href="{{route('Feedback')}}">Feedback </a></li>
			         </ul>
			      </li> 

			    </ul>
			  </div>
			  </div>
			</nav>
		</div>
	</header>


    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Agency</h6>
						<p>
							The world has become so fasted that people don’t want to standby reading page of info they would much rather
							look at a presentation and understand message.
						</p>
					</div>
				</div> -->
				<div class="col-lg-3 col-md-6 col-sm-6" style="display:none">
					<div class="single-footer-widget">
						<h6>Quick Links</h6>
						<div class="row">
							<ul class="col footer-nav">
								<li><a href="{{route('History')}}">About</a></li>
								<!-- <li><a href="#">Categories</a></li>
								<li><a href="#">Archives</a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="#">Ad Choice</a></li> -->
							</ul>
							<ul class="col footer-nav">
								<!-- <li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Newsletters</a></li> -->
								<li><a href="{{route('Feedback')}}">Feedback</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-3  col-md-6 col-sm-6" style="display:none">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>For business professionals caught between high OEM price mediocre print and graphic.</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<!--<div class="d-flex flex-row">

									<input class="form-control email" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default submit_mail"><i class="lnr lnr-location" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									 <div class="col-lg-4 col-md-4">
										<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
									</div> 
								</div> -->
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instafeed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/instagram/Image-01.jpg" alt=""></li>
							<li><img src="img/instagram/Image-02.jpg" alt=""></li>
							<li><img src="img/instagram/Image-03.jpg" alt=""></li>
							<li><img src="img/instagram/Image-04.jpg" alt=""></li>
							<li><img src="img/instagram/Image-05.jpg" alt=""></li>
							<li><img src="img/instagram/Image-06.jpg" alt=""></li>
							<li><img src="img/instagram/Image-07.jpg" alt=""></li>
							<li><img src="img/instagram/Image-08.jpg" alt=""></li>
						</ul>
					</div>
				</div> -->
			</div>
			<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
				<div>
					<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <!-- | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
				<div class="footer-social d-flex align-items-center">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<!-- <a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a> -->
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="{{asset('public/js/jquery.min.js')}}">></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

	<script src="{{asset('public/js/bootstrap.min.js')}}">></script>
	<script src="{{asset('public/js/jquery.nice-select.min.js')}}">></script>
	<!-- <script src="{{asset('public/js/popper.js')}}">></script> -->
	<script src="{{asset('public/js/stellar.js')}}">></script>
	<script src="{{asset('public/js/simpleLightbox.min.js')}}">></script>
	<script src="{{asset('public/js/jquery.magnific-popup.min.js')}}">></script>
	<script src="{{asset('public/js/jquery.ajaxchimp.min.js')}}">></script>
	<script src="{{asset('public/js/jquery.waypoints.min.js')}}">></script>
	<script src="{{asset('public/js/jquery.counterup.js')}}">></script>
	<script src="{{asset('public/js/mail-script.js')}}">></script>
	<script src="{{asset('public/js/theme.js')}}">></script>
	<script>
		$('.submit_mail').submit(function(e) {
		    e.preventDefault();
		    // handle the form submission (AJAX...)
            var email = $('.email').val();
		    window.location.assign('mailto:'+email);
		});
		$(".top_menu.row.m0").click(function(){
		  var url = '{{ asset('/') }}'
		  window.location.href = url;
		});

		$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
    </script>
    @stack('css')

    @stack('scripts')

</body>

</html>