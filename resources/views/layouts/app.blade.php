<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Main Tag -->
	<title>CMC CHAIN</title>
	<meta id="PagKeywords" name="keywords" content="CMC CHAIN" />
	<meta id="PagDescription" name="description" content="" />
	<link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
	<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Facebook Tag -->
	<meta property="og:url" content=""/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="CMC CHAIN"/>
	<meta property="og:description" content="CMC CHAIN"/>	
	<meta property="og:image" content=""/>
	<meta property="og:site_name" content="CMC CHAIN" />

	<!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fa881189ef.js" crossorigin="anonymous"></script>

	<!-- Css File -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

	<body>

		<!-- Header -->
		<header>
			<nav class="navbar navbar-expand-lg bg-light">
				<a class="navbar-brand" href="{{ route('home') }}">
					<img src="{{ asset('img/logo.png') }}" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link  {{ str_contains(Route::currentRouteName(), 'home') ? 'active' : '' }}" href="{{ route('home') }}" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Whitepaper</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Smart Contract</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Connect</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

        @yield('content')

		<!-- newsletter -->
		<section class="newsletter bgGradBlue">
			<div class="container">
				<div class="row align-items-center">
		            <div class="col-md-auto col-sm text-end">
		                <h6 class="mb-0">Stay ahead</h6>
		                <div>weekly insights straight to your inbox</div>
		            </div>
		            <div class="col">
		                <div class="input-group input-group-lg">
		                    <input type="email" class="form-control" placeholder="Email address">
		                    <button class="btn" type="button">
		                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>
		                    </button>
		                </div>
		            </div>
		        </div>
			</div>
		</section>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img src="{{ asset('img/logo-footer.png') }}" class="footerLogo">
						<h6 class="title"><span>CMC CHAIN LTD (UK)</span></h6>
						<ul class="list-unstyled">
							<li class="mb-2"><span class="fw-medium">Address 1:</span> No. 40 Gracechurch Street, London, EC3V 0BT, USA</li>
							<li class="mb-2"><span class="fw-medium">Address 2:</span> 116 Albert (City of Ottawa, Ontario), Canada</li>
							<li><span class="fw-medium">Email:</span> support@cmcchain.io   |   <span class="fw-medium">Website:</span> www.cmcchain.io</li>
						</ul>
					</div>
					<div class="col-md-6">
						<div class="row menuFooter">
							<div class="col-md-6">
								<h6 class="title"><span>Technology</span></h6>
								<ul>
									<li><a href="javascript:void(0)"">Layer-1 Capabilities</a></li>
									<li><a href="javascript:void(0)"">Core Protocol</a></li>
									<li><a href="javascript:void(0)"">Research</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>Ecosystem</span></h6>
								<ul>
									<li><a href="https://testnet.cmcscan.com/" target="_blank">Testnet</a></li>
									<li><a href="javascript:void(0)">Mainnet</a></li>
									<li><a href="javascript:void(0)">CMC Wallets</a></li>
									<li><a href="javascript:void(0)">Wowidex</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>External Resourcus</span></h6>
								<ul>
									<li><a href="https://cmcinvest.io/" target="_blank">CMC Invest</a></li>
									<li><a href="https://cmcchain.foundation/" target="_blank">CMC Foundation </a></li>
									<li><a href="https://diasplat.com/" target="_blank">Diasplat</a></li>
									<li><a href="https://onstora.com/" target="_blank">Onstora</a></li>
									<li><a href="https://paygate.global/" target="_blank">Payment Gate </a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>Resource</span></h6>
								<ul>
									<li><a href="javascript:void(0)">Community</a></li>
									<li><a href="javascript:void(0)">Documentations</a></li>
									<li><a href="javascript:void(0)">Brand Kit</a></li>
									<li><a href="javascript:void(0)">Blog</a></li>
									<li><a href="javascript:void(0)">White Paper</a></li>
									<li><a href="javascript:void(0)">Smart contract</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row align-items-end">
					<div class="col-md-6 order-md-2">
						<div class="row">
							<div class="col-md-6 menuFooter">
								<h6 class="title"><span>Compay</span></h6>
								<ul>
									<li><a href="javascript:void(0)"">About Us</a></li>
									<li><a href="javascript:void(0)"">Board of Directors</a></li>
									<li><a href="javascript:void(0)"">Technical Advisory Board</a></li>
									<li><a href="javascript:void(0)"">FAQS</a></li>
									<li><a href="javascript:void(0)"">Contact us</a></li>
								</ul>
							</div>
							<div class="col-md-6 social">
								<h6 class="title"><span>Social media</span></h6>
								<div class="row">
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-instagram"></i></a>
									</div>
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-facebook-f"></i></a>
									</div>
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-youtube"></i></a>
									</div>
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-linkedin"></i></a>
									</div>
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 order-md-1">
						<div class="copyright">
							<p class="mb-1">Copyright © 2021 - 2022 CMCchain.io All rights reserved</p>
							<a href="">Privacy Notice</a>   |   <a href="">Legal</a>   |   <a href="">Status</a>   |   <a href="">Cookie Preferences</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Js File -->
		<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script>
			$('.pressRelease .list').owlCarousel({
				items: 10,
			   	loop: true,
			    margin: 10,
			});
			$('.founderInfo-carousel').owlCarousel({
				items: 3,
			   	loop: true,
			   	nav: true,
			});
			// Set the date we're counting down to
			var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

			  // Get today's date and time
			  var now = new Date().getTime();

			  // Find the distance between now and the count down date
			  var distance = countDownDate - now;

			  // Time calculations for days, hours, minutes and seconds
			  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			  document.getElementById("countdown").innerHTML ="<div class='row g-0'>" 
			  + 	"<div class='col-3'>"
			  +			"<div class='item'>"
			  +				"<div class='number'>" + days + "</div>"
			  +				"<div class='bottom'>days</div>"
			  +			"</div>"
			  +		"</div>"
			  + 	"<div class='col-3'>"
			  +			"<div class='item'>"
			  +				"<div class='number'>" + hours + "</div>"
			  +				"<div class='bottom'>hours</div>"
			  +			"</div>"
			  +		"</div>"
			  + 	"<div class='col-3'>"
			  +			"<div class='item'>"
			  +				"<div class='number'>" + minutes + "</div>"
			  +				"<div class='bottom'>min</div>"
			  +			"</div>"
			  +		"</div>"
			  + 	"<div class='col-3'>"
			  +			"<div class='item'>"
			  +				"<div class='number'>" + seconds + "</div>"
			  +				"<div class='bottom'>sec</div>"
			  +			"</div>"
			  +		"</div>"
			  + "</div>";

			  document.getElementById("countdown-1").innerHTML ="<div class='row g-0'>" 
			  + 	"<div class='col-3'>"
			  +			"<div class='item'>"
			  +				"<div class='number'>" + days + "</div>"
			  +				"<div class='bottom'>days</div>"
			  +			"</div>"
			  +		"</div>"
			  + 	"<div class='col-3'>"
			  +			"<div class='item'>"
			  +				"<div class='number'>" + hours + "</div>"
			  +				"<div class='bottom'>hours</div>"
			  +			"</div>"
			  +		"</div>"
			  + 	"<div class='col-3'>"
			  +			"<div class='item'>"
			  +				"<div class='number'>" + minutes + "</div>"
			  +				"<div class='bottom'>min</div>"
			  +			"</div>"
			  +		"</div>"
			  + 	"<div class='col-3'>"
			  +			"<div class='item'>"
			  +				"<div class='number'>" + seconds + "</div>"
			  +				"<div class='bottom'>sec</div>"
			  +			"</div>"
			  +		"</div>"
			  + "</div>";
	
			  if (distance < 0) {
			    clearInterval(x);
			    document.getElementById("countdown").innerHTML = "EXPIRED";
			  }
			}, 1000);
		</script>	
        @stack('script')
	</body>
</html>
