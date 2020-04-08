<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Student Management" />
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- css -->
<link href="{{ asset('/') }}assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/') }}assets/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" 	href="{{ asset('/') }}assets/css/chocolat.css" type="text/css" media="all">
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{ asset('/') }}assets/js/jquery-1.11.1.min.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.js"></script>
	<!-- Popup-Box-JavaScript -->
	<script src="{{ asset('/') }}assets/js/modernizr.custom.97074.js"></script>
	<script src="{{ asset('/') }}assets/js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.gallery-grids a').Chocolat();
		});
	</script>
	<!-- //Popup-Box-JavaScript -->
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="{{ asset('/') }}assets/js/move-top.js"></script>
			<script type="text/javascript" src="{{ asset('/') }}assets/js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="{{ asset('/') }}assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('/') }}assets/js/modernizr.custom.53451.js"></script> 
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>	
</head>
<body>
	
	@include('frontend.includes.header');


	@include('frontend.includes.menu');


    @include('frontend.includes.slider');


	@yield('body')

	@include('frontend.includes.footer')

</body>
</html>